<?php

namespace App\Http\Controllers;

use App\Style;
use Auth;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $styles = Style::orderby('id', 'asc')->paginate(100);
            return view('users.admin.styles.index', ['styles' => $styles,]);
        }
        else {
            return redirect('home');
        }

    }


    public function indexFront()
    {
        if (Auth::check()) {
            $styles = Style::orderby('id', 'asc')->paginate(100);
            return view('studioPlan', ['styles' => $styles,]);
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
            return view('users.admin.styles.create');
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
            $style = Style::create($request->all());
            return redirect('/admin/styles')->with('status', 'L\'offre a été ajoutée avec succès');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function show(Style $style)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function edit(Style $style)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.styles.edit', ['style' => $style,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Style $style)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $style->update($request->all());
            return redirect('/admin/styles')->with('status', 'L\'offre a été modifiée avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function destroy(Style $style)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $style->delete();
            return redirect('/admin/styles')->with('status', 'L\'offre a été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }
}
