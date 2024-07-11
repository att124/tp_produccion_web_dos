@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')

<h1 class="oferta">Lista de roles: </h1>

<a href="{{ route('roles.create') }}">Crear nuevo rol</a>

<table>


    <caption>Tabla de roles</caption>

    @forelse ($roles as $rol)
    <tr><td>{{ $rol->nombre }}</tr></td>
    @empty

    <tr><td>No hay roles aún.</td></tr>

    @endforelse

</table>


<p class="contenidoDespues">Lista de roles de usuarios.</p>

@endsection
