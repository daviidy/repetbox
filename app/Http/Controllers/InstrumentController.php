<?php

namespace App\Http\Controllers;

use App\Instrument;
use Auth;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $instruments = Instrument::orderby('id', 'asc')->paginate(100);
            return view('users.admin.instruments.index', ['instruments' => $instruments,]);
        }
        else {
            return redirect('home');
        }

    }


    public function indexFront()
    {
        if (Auth::check()) {
            $instruments = Instrument::orderby('id', 'asc')->paginate(100);
            return view('studioPlan', ['instruments' => $instruments,]);
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
            return view('users.admin.instruments.create');
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
            $instrument = Instrument::create($request->all());
            return redirect('/admin/instruments')->with('status', 'L\'offre a été ajoutée avec succès');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show(Instrument $instrument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function edit(Instrument $instrument)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.instruments.edit', ['instrument' => $instrument,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrument $instrument)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $instrument->update($request->all());
            return redirect('/admin/instruments')->with('status', 'L\'offre a été modifiée avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrument $instrument)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $instrument->delete();
            return redirect('/admin/instruments')->with('status', 'L\'offre a été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }
}
