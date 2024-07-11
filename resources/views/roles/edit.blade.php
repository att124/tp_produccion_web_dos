@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')


<h1 class="oferta">Edicion de roles</h1>

<a href="{{ route('roles.index')}}">Inicio de roles</a>

<form action="{{ route('roles.update', $rol->id )}}" method="POST">
@method('PUT') <!-- Modifica el metodo a put. -->
@csrf

<label for="nombre">Nombre del rol: </label>

<input type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" required/>

<button type="submit">Modificar</button>


</form>
<p class="contenidoDespues">Lista de roles de usuarios.</p>
@endsection
