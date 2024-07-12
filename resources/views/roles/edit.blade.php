@extends('componentes.layout')

@section('titulo','Roles')

@section('contenido')

<h1 class="oferta">Edición de roles</h1>

<div class="centrado">
    <form action="{{ route('roles.update', $rol->id) }}" method="POST" class="form-group formulariotamano">
        @method('PUT') <!-- Modifica el método a PUT -->
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del rol:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" class="form-control tamanoinput" required>
        </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success tamanobtnvolver">Modificar</button>
            <a href="{{ route('roles.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
        </div>
    </form>
</div>

<p class="contenidoDespues">Lista de roles de usuarios.</p>

@endsection
