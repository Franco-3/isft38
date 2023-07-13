@extends('backend.layouts.main')

@section('title', 'Turnos')

@section('content')
    <h1>Gestión de Turnos para Inscripción</h1>
    <div>
        @if (Session::has('status'))
            <div class="alert alert-success">{{ Session('status') }}</div>
        @endif
    </div>
    <div class="card">
        <div class="links card-body">
        {{ Form::open(['route' => 'mail.store', 'files' => true]) }}
        @csrf

        
        <div class="row">
            <div class="col-md-6">
<div class="form-group">
            
            <div class="col-md-2" >
                {{ Form::label('dni', 'DNI', ['class' => 'control-label']) }}
            </div>
            <div class="col-md-6" >
                {{ Form::number('dni', old('dni'), ['class' => 'form-control', 'placeholder' => 'Ingrese tu número de DNI', 'class' => 'no-spinner' ]) }}
                @error('dni')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
        </div>
        <div class="form-group">
        <div class="col-md-2" >
            {{ Form::label('apellido', 'Apellido', ['class' => 'control-label']) }}
        </div>  
        <div class="col-md-6" >
            {{ Form::text('apellido', old('apellido'), ['class' => 'form-control', 'placeholder' => 'Ingrese tu apellido']) }}
            @error('apellido')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
            
        </div>
        <div class="form-group">
        <div class="col-md-2" >
            {{ Form::label('nombre', 'Nombres', ['class' => 'control-label']) }}
            </div>
            <div class="col-md-6" >
            {{ Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Ingrese tus nombres']) }}
            @error('nombres')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
            
        </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
        <div class="col-md-2" >
            {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
            </div>
            <div class="col-md-6" >
            {{ Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Ingrese tu email']) }}
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
            
        </div>
        <div class="form-group">
        <div class="col-md-2" >
             {{ Form::label('carrera', 'Carrera', ['class' => 'control-label']) }}
            </div>
            <div class="col-md-6" >
             {{ Form::select('carrera', 
                [ '0' => "Analista de sistemas", '1' => "Logística", '2' => "Seguridad e Higiene", '3' => "Administración Contable"]
                , null, ['class' => 'form-control', 'placeholder' => 'Seleccione una carrera']) }}
            @error('carrera')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
           
           <div class="container card md-4"></div>
        </div>
        <div class="form-group">
        <div class="col-md-2" >
            {{ Form::label('fecha', 'Fecha', ['class' => 'control-label']) }}
	    </div>
        <div class="col-md-4" >
        {{ Form::date('fecha', null, ['class' => 'form-select']) }}
            @error('fecha')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
           
        </div>
            </div>
        </div>

        
        
        
        <div class="form-group">
            <div class="col-md-2" >
            {{ Form::label('turno', 'Turno', ['class' => 'control-label']) }}
            </div>
            <div class="col-md-3" >
            {{ Form::select('turno', 
                [ '0' => "17:45", '1' => "18:15", '2' => "18:45", '3' => "19:15"]
                , null, ['class' => 'form-control', 'placeholder' => 'Seleccione Turno']) }}
            @error('turno')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
        </div>
        

    </div>
    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
    {!! Form::close() !!}
    </div>

    
    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Test mail 2</button></div>

    <hr>

    </div> <!-- /container -->
    
@endsection