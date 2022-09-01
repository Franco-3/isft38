@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')
    
<div class="container my-4">
    
    <div class="card">
        <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por Dia/Hora</h5>
    <div class="card-body">

    <form class="row g-3 d-flex justify-content-center">
        
        
        <div class="col-md-5">
        <label for="" class="form-label"></label>
        <input type="datetime-local" class="form-control" id="">
        </div>
        
    </form>


    <div class="d-grid gap-2 col-5 my-4 mx-auto">
        <button class="btn btn-outline-dark" type="button">Consultar</button>
    </div>
</div>

@endsection