<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
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
        $modulo = Modulo::all();
        return view('backend.modulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'horainicio' => ['required'],
                'horafin' => ['required'],
                'duracion' => ['required']
            ]
        );

        $modulo = new Modulo();

        $modulo->horainicio = $request->input('horainicio');
        $modulo->horafin = $request->input('horafin');
        $modulo->duracion = $request->input('duracion');
        $modulo->save();
        $request->session()->flash('status', 'Se guardó correctamente el módulo');
        return redirect()->route('modulo.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(Modulo $modulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = Modulo::findOrFail($id);
        return view('backend.modulo.edit', compact('modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modulo = Modulo::findOrFail($id);

        $validateData = $request->validate(
            [
                'horainicio' => ['required'],
                'horafin' => ['required'],
                'duracion' => ['required']
            ]
        );

        $modulo->horainicio = $request->input('horainicio');
        $modulo->horafin = $request->input('horafin');
        $modulo->duracion = $request->input('duracion');
        $modulo->save();
        $request->session()->flash('status', 'Se guardó correctamente el módulo');
        return redirect()->route('modulo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulo $modulo)
    {
        //
    }
}
