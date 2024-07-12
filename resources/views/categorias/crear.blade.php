@extends('componentes.layout')

@section('titulo','Creación de categoría')

@section('contenido')

<h1 class="oferta">Creación de categorías</h1>

<div class="centrado">
    <form action="{{ route('categorias.store') }}" method="POST" class="form-group formulariotamano">
        @csrf <!-- Protección -->

        <div class="mb-3">
            <label for="Categoria" class="form-label">Nombre de la categoría:</label>
            <input type="text" name="Categoria" id="Categoria" class="form-control tamanoinput" required />
        </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success">Crear categoría</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary mb-3 margenesbtn">Volver</a>
        </div>
    </form>
</div>

<p class="contenidoDespues">Lista de categorías existentes.</p>

@endsection
