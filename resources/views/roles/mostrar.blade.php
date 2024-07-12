@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')


<h1 class="oferta">Rol: </h1>

<p class="itemDescripcion">nombre del rol: {{ $rol->nombre }}</p>

<p class="itemDescripcion">ID del rol: {{ $rol->id }}</p>

<div class="centrado espaciobtnvolver">
    <a href="{{ route('roles.index') }}" class="btn btn-primary mb-3 tamanobtnvolver">Volver</a>
</div>



<p class="contenidoDespues">Agregar algo mas.</p>

@endsection
