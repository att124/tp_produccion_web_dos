@extends('componentes.layout')

@section('titulo','Usuarios')

@section('contenido')

<h1 class="oferta">Lista de Usuarios: </h1>

<div class="container">

    <table class="table table-striped table-bordered">
        <caption>Tabla de usuarios</caption>
        <thead>
            <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Mail</th>
            <th>DNI</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
        <tr>
            <td><a href="{{route('usuarios.show', $usuario->id)}}">{{ $usuario->usuario }}</a></td>
            <td>{{ $usuario->datosUsuario->nombre}}</td>
            <td>{{$usuario->datosUsuario->apellido}}</td>
            <td>{{$usuario->datosUsuario->mail}}</td>
            <td>{{$usuario->datosUsuario->dni}}</td>
            <td>
            @if ($usuario->Activo == 1)

            Activo

            @else

            Baneado

            @endif</td>
            <td>
                <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    @if ($usuario->Activo == 1)

                    <button type="submit" class="btn btn-danger btn-sm">Banear</button>

                    @else

                    <button type="submit" class="btn ColorBotonVerde btn-sm">Desbloquear</button>

                    @endif

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

<p class="contenidoDespues">Lista de usuarios.</p>

@endsection
