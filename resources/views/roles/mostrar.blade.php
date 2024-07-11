@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')

<a href="{{ route('roles.index') }}">Lista de roles</a>

<h1 class="oferta">Rol: </h1>

<p>nombre del rol: {{ $rol->nombre }}</p>

<p>ID del rol: {{ $rol->id }}</p>

<p class="contenidoDespues">Agregar algo mas.</p>

@endsection
