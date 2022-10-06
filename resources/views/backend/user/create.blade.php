@extends('backend.layouts.main')
@section('title', 'Usuarios')
@section('content')
<div class="Inicio">
  <h1 class="TextoInicio">Nuevo Usuario</h1>
</div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'users.store', 'files' => true]) }}
  @csrf  
    <div class="form-group">
          {{ Form::label("name", 'Nombre', ['class' => 'control-label']) }}
          {{Form::text("name", old("name"), ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("email", 'Email', ['class' => 'control-label']) }}
          {{Form::text("email", old("email"), ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>    
    <div class="form-group">
          {{ Form::label("telefono", 'Teléfono', ['class' => 'control-label']) }}
          {{Form::text("telefono", old("telefono"), ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('telefono')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>      
    <div class="form-group">
          {{ Form::label("rol", 'Rol', ['class' => 'control-label']) }}
          {{Form::select("rol", $rol, 'Alumno', ["class" => "form-control", "placeholder" => ""]) }}                       
          @error('rol')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    <div class="form-group">
          {{ Form::label("password", 'Password', ['class' => 'control-label']) }}
          {{Form::password("password", ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    <div class="form-group">
          {{ Form::label("password-confirm", 'Confirm Password', ['class' => 'control-label']) }}
          {{Form::password("password_confirmation", ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('password-confirm')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    </br><button type="submit" class="btn btn-success form-control">{{__('noticias.guardar')}}</button>
{!!Form::close()!!}
@endsection