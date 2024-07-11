@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')


<h1 class="oferta">Creacion de roles</h1>

<a href="{{ route('roles.index')}}">Inicio de roles</a>

<form action=" {{ route('roles.store') }}" method="POST">

@csrf <!-- Proteccion -->

<label for="nombre">Nombre del rol: </label>

<input type="text" name="nombre" id="nombre"  required/>

<button type="submit">Creacion</button>


</form>
<p class="contenidoDespues">Lista de roles de usuarios.</p>
@endsection
