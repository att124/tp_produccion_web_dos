@extends('componentes.layout')


@section('titulo','Roles')



@section('contenido')

<h1 class="oferta">Lista de roles: </h1>

<a href="{{ route('roles.create') }}">Crear nuevo rol</a>

<table>


    <caption>Tabla de roles</caption>

    @forelse ($roles as $rol)
    <tr>
        <td><a href="{{ route('roles.mostrar', $rol->id)}}">{{ $rol->nombre }}</a></td>
        <td><a href="{{ route('roles.edit', $rol->id) }}">Editar</a></td>
        <td><form method="POST" action="{{route('roles.borrar', $rol->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form></td></tr>
    @empty

    <tr><td>No hay roles aún.</td></tr>

    @endforelse

</table>


<p class="contenidoDespues">Lista de roles de usuarios.</p>

@endsection
