<?php

namespace App\Http\Controllers;

use App\Recording;
use App\User;
use App\Style;
use App\Media;
use Auth;
use Validator;
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
        //
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
                                            'audio_file' => 'none',
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
        $recording->video_file = $filename;
        $recording->save();
        $file = $request->video;


        $file->move(public_path().'/videos/recordings/', $filename);
      return response()->json($recording);
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
