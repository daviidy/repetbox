<?php

namespace App\Http\Controllers;

use App\Skill;
use Auth;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $skills = Skill::orderby('id', 'asc')->paginate(100);
            return view('users.admin.skills.index', ['skills' => $skills,]);
        }
        else {
            return redirect('home');
        }

    }


    public function indexFront()
    {
        if (Auth::check()) {
            $skills = Skill::orderby('id', 'asc')->paginate(100);
            return view('studioPlan', ['skills' => $skills,]);
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
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.skills.create');
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

        if (Auth::check() && Auth::user()->isAdmin()) {
            $skill = Skill::create($request->all());
            return redirect('/admin/skills')->with('status', 'L\'offre a été ajoutée avec succès');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.skills.edit', ['skill' => $skill,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $skill->update($request->all());
            return redirect('/admin/skills')->with('status', 'L\'offre a été modifiée avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $skill->delete();
            return redirect('/admin/skills')->with('status', 'L\'offre a été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }
}
