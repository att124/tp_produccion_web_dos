@extends('componentes.layout')

@section('titulo','Agregar Provincia')

@section('contenido')

<h1 class="oferta">Agregar provincia</h1>

<div class="centrado">
    <form action="{{ route('provincias.store') }}" method="POST" class="form-group formulariotamano formucolor">
        @csrf <!-- Protección -->

        <div class="mb-3">
            <label for="NombreProvincia" class="form-label">Provincia:</label>
            <input type="text" name="NombreProvincia" id="NombreProvincia" class="form-control tamanoinput" required />
        </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success">Agregar provincia</button>
            <a href="{{ route('provincias.index') }}" class="btn btn-primary mb-3 margenesbtn">Volver</a>
        </div>
    </form>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
