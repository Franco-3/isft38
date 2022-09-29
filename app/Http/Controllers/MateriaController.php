<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Carrera;
use App\Models\Anio;
use App\Models\Profesor;
use App\Models\Programa;
use App\Models\DB;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('backend.materia.index', compact('materias'));
    }
    public function create()
    {
        //$materias = Materia::pluck('descripcion','id');
        $anios = Anio::pluck('anio', 'id');
        $carreras = Carrera::pluck('descripcion', 'id');
        $profesores = Profesor::pluck('nombre', 'id');
        return view('backend.materia.create', compact('anios','carreras','profesores'));
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
            ['descripcion' => 'required',
            'carrera_id' => 'required',
            'anio_id' => 'required'
            ]
         );
        $materia = new Materia(); 
        $materia->descripcion = $request->input('descripcion');
        $materia->carrera_id = $request->input('carrera_id');
        $materia->anio_id = $request->input('anio_id');
        $materia->save();

       $request->session()->flash('status', 'Se guardó correctamente la materia '. $materia->descripcion);
       return redirect()->route('materia.create'); 
    }

    /**
     *             <a href="{{ route('materia.show', ['materia' => $materia->id ]) }}" class="btn btn-info"><img src="{{ asset('svg/show.svg') }}"  width="20" height="20" alt="Mostrar" title="Mostrar"></a> 
     *       <a href="{{ route('materia.edit', ['materia' => $materia->id ]) }}" class="btn btn-primary"><img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar"></a>             
    *        <button type="submit" name="borrar{{$materia->id}}" class="btn btn-danger" onclick="if (!confirm('Está seguro de borrar la materia?')) return false;"><img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar"></button>
     * Display the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materias = materia::findOrFail($id);
        $anios = Anio::pluck('anio', 'id');
        $carreras = Carrera::pluck('descripcion', 'id');
        $programas = Programa::pluck('ruta', 'id');
        return view('backend.materia.edit', compact('materias', 'anios','carreras','programas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {
        $materia = materia::findOrFail($id);
        $validatedData = $request->validate(
            ['descripcion' => 'required',
            'carrera_id' => 'required',
            'anio_id' => 'required'
            ]
         );
        $materia->descripcion = $request->input('descripcion');
        $materia->carrera_id = $request->input('carrera_id');
        $materia->anio_id = $request->input('anio_id');
        $materia->save($validatedData);  
        return redirect()->route('materia.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $materia = materia::findOrFail($id);    
         $materia->delete();
         return redirect()->route('materia.index');
    }
}
