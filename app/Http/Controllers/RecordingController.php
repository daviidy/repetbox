<?php

namespace App\Http\Controllers;

use App\Recording;
use App\User;
use App\Style;
use App\Video;
use Auth;
use Validator;
use Illuminate\Contracts\Filesystem\Filesystem;
use FFMpeg\Format\Video\WMV;
use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Storage;
use Pbmedia\LaravelFFMpeg\Filesystem\Media;
use Pbmedia\LaravelFFMpeg\MediaOpener;
use FFMpeg;
use FFMpeg\Filters\AdvancedMedia\ComplexFilters;
use Illuminate\Http\Request;


class RecordingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('users.default.recordings.index');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {

            $recording = Recording::create(['name' => 'New',
                                            'user_id' => Auth::user()->id,
                                   ]);

            $styles = Style::orderby('id', 'asc')->get();
            $users = User::orderby('id', 'asc')->where('type', 'default')->get();

            return redirect('/recordings/edit/'.$recording->id);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function show(Recording $recording)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function edit(Recording $recording)
    {
        if (Auth::check()) {

            $styles = Style::orderby('id', 'asc')->get();
            $users = User::orderby('id', 'asc')->where('type', 'default')->get();
            return view('users.default.recordings.edit', [
                                                            'recording' => $recording,
                                                            'styles' => $styles,
                                                            'users' => $users,
                                                        ]);
        }
        else {
            return redirect('home');
        }
    }

    public function editMulti(Recording $recording)
    {
        if (Auth::check()) {

            $styles = Style::orderby('id', 'asc')->get();
            $users = User::orderby('id', 'asc')->where('type', 'default')->get();
            return view('users.default.recordings.editMulti', [
                                                            'recording' => $recording,
                                                            'styles' => $styles,
                                                            'users' => $users,
                                                        ]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recording $recording)
    {
        $recording->update($request->all());

        $validation = Validator::make($request->all(), [
      'input2.*' => 'required|file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
  ],[
      'input2.*.required' => 'Please upload a file',
        'input2.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
        'input2.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
  ]);

        if ($validation->passes()) {
            if ($request->hasFile('input2') ) {
              foreach ($request->file('input2') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Media::create([
                    'name' => $filename,
                    'recording_id' => $recording->id,
                ]);
                $file->move(public_path().'/files/recordings/', $filename);
              }
          }
        }

        if ($request->users_id) {
          foreach ($request->users_id as $user_id) {
              $user_found = User::find($user_id);
              $recording->users()->attach($user_found);
          }
      }
            return redirect('/recordings/edit/'.$recording->id)->with('status', 'Les modifications ont été enregistrées avec succès');


    }

    public function uploadVideo(Request $request)
    {
        $recording = Recording::find($request->recording_id);
        $filename = time() . '.mp4';
        if (count($recording->videos->where('user_id', Auth::user()->id)) == 0) {
            $video = Video::create([
                'video_file' => $filename,
                'recording_id' => $recording->id,
                'user_id' => Auth::user()->id,

            ]);
        }
        else {
            $recording->videos->where('user_id', Auth::user()->id)->first()->video_file = $filename;
            $recording->videos->where('user_id', Auth::user()->id)->first()->save();
        }

        $file = $request->video;


        $file->move(storage_path('app/public'), $filename);
      return response()->json($recording);
    }


    public function joinVideos(Recording $recording)
    {

        $tab = array();
        foreach ($recording->videos as $video) {
            array_push($tab, $video->video_file);
        }
        //$tab = ['video1.mp4', 'video2.mp4'];
        FFMpeg::fromDisk('local')
        ->open($tab)
        ->export()
        ->addFilter('[0:v][1:v]', 'hstack', '[v]')  // $in, $parameters, $out
        ->addFormatOutputMapping(new X264('libmp3lame', 'libx264'), Media::make('local', 'stacked_video.mp4'), ['0:a', '[v]'])
        ->save();

        /*
        $first_video = $recording->videos->first()->video_file;

        $video1 = $disk->open($first_video);
        var_dump($tab);

        $output = $disk->open('output.mp4');

        var_dump($output_path);

        $video1->concat($tab)->saveFromSameCodecs($output->getPathfile(), true);
        */

        /*
         $video1 = $disk->open('video1.mp4');
         $video2 = $disk->open('video2.mp4');

         $video1->concat([
             $video1->getPathfile(),
             $video2->getPathfile(),
         ])->saveFromDifferentCodecs(storage_path('app/public/out-'.time().'.mp4'), true);
         */

        //shell_exec("ffmpeg -i ".storage_path('app/public/video2.mp4')." -i ".storage_path('app/public/video3.mp4')." -filter_complex hstack ".storage_path('app/public/test.mp4'));

        return redirect()->back()->with('status', 'Les vidéos ont été fusionnées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recording $recording)
    {
        //
    }
}
