@extends('backend.layouts.main')
@section('title', 'Profesores')
@section('content')

<style>
    .Inicio {
        text-align: center;
        margin: 20px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
        position: relative;
    }
</style>
<div class="Inicio">
<div style="position:absolute;top:0;left:30px;cursor:pointer;">
        <a href="{{ route('profesor.index'); }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
        </a>
    </div>
  <h1 class="TextoInicio">Editar profesor</h1>
</div>

  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">

  

{{ Form::model($profesor, [ 'method' => 'put' , 'route' => ['profesor.update', $profesor->id],  'files' => true]) }}

  @csrf <!-- {{ csrf_field() }} -->

  <div class="form-group row">
    <div class="col-sm-10">
        {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text("nombre", old("nombre"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        @error('nombre')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
        {{ Form::label("apellido", 'Apellido', ['class' => 'control-label']) }}
        {{ Form::text("apellido", old("apellido"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        @error('apellido')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
  
    </div>

    </br><button type="submit" style="width: 83%;" class="btn btn-primary">Guardar cambios</button>
</div>
{!!Form::close()!!}
@endsection