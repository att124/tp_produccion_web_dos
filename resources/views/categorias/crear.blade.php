@extends('componentes.layout')


@section('titulo','Creacion de categoria')


@section('contenido')

<h1 class="oferta">Creacion de categorias</h1>

<a href="{{route('categorias.index')}}">Inicio de categoria</a>

<form action="{{route('categorias.store')}}" method="POST">

@csrf <!-- Proteccion -->

<label for="Categoria">Nombre de la categoria: </label>

<input type="text" name="Categoria" id="Categoria"  required/>

<button type="submit">Crear</button>


</form>

<p class="contenidoDespues">Lista de roles de usuarios.</p>

@endsection
