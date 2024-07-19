@extends('componentes.layout')

@section('titulo','Usuarios')

@section('contenido')

<h1 class="oferta">Lista de roles: </h1>

<div class="container">
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear nuevo rol</a>

    <table class="table table-striped table-bordered">
        <caption>Tabla de roles</caption>
        <thead>
            <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Mail</th>
            <th>DNI</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
        <tr>
            <td><a href="#">{{ $usuario->usuario }}</a></td>
            <td>{{ $usuario->datosUsuario->nombre}}</td>
            <td>{{$usuario->datosUsuario->apellido}}</td>
            <td>{{$usuario->datosUsuario->mail}}</td>
            <td>{{$usuario->datosUsuario->dni}}</td>
            <td>{{$usuario->Activo}}</td>
            <td>
                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="#" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">No hay usuario aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="contenidoDespues">Lista de roles de usuarios.</p>

@endsection
