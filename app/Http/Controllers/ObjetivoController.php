<?php

namespace App\Http\Controllers;

use App\Models\Objetivo;
use Illuminate\Http\Request;

class ObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetivo = Objetivos::paginate(1);
        return view ('backend.objetivo.index', compact('objetivo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.objetivo.create');
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
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function show(Objetivo $objetivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Objetivo $objetivo)
    {
        $objetivo = Objetivo::findOrFail($id);
        return view('backend.objetivo.edit', compact('objetivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objetivo $objetivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objetivo $objetivo)
    {
        //
    }
}
