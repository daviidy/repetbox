<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Skill;
use App\Instrument;
use App\Style;
use Image;

class UserController extends Controller
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
        //
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            $styles = Style::orderby('id', 'asc')->paginate(100);
            $instruments = Instrument::orderby('id', 'asc')->paginate(100);
            $skills = Skill::orderby('id', 'asc')->paginate(100);
            return view('users.default.edit', ['user' => $user,
                                              'styles' => $styles,
                                              'skills' => $skills,
                                              'instruments' => $instruments
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
          if (Auth::check()) {
              $user->update($request->all());
              if ($request->instruments_id) {
                foreach($request->instruments_id as $instrument_id)
                      {
                          $instrument_found = Instrument::find($instrument_id);
                          if ($user->instruments->contains($instrument_found->id)) {
                              continue;
                          }
                          else {
                              $user->instruments()->attach($instrument_found);
                          }

                      }
              }
              if ($request->styles_id) {
                foreach($request->styles_id as $style_id)
                      {
                          $style_found = Style::find($style_id);
                          if ($user->styles->contains($style_found->id)) {
                              continue;
                          }
                          else {
                              $user->styles()->attach($style_found);
                          }

                      }
              }
              $skills = Skill::orderby('id', 'asc')->paginate(100);

                foreach ($skills as $skill) {
                  if ($request->has($skill->id)) {
                    $value = $request[$skill->id];
                    if ($user->skills->contains($skill->id)) {
                        continue;
                    }
                    else {
                        $user->skills()->attach($skill, ['value' => $value]);
                    }
                  }

                }



              return redirect('/members/'.$user->id.'/edit')->with('status', 'Votre profil a été modifié avec succès');
          }
          else {
              return redirect('home');
          }
    }


    //upload avatar with ajax
    public function uploadAvatar(Request $req)
    {
              $user = User::find($req->id_user);
              $user->update($req->all());

                $image = $req->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/images/users/' . $filename));
                $user->image = $filename;
                $user->save();


          return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
