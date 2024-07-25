@extends('componentes.layout')

@section('titulo','Users')

@section('contenido')

<h1 class="oferta">Lista de Usuarios: </h1>

<div class="container">

    @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif

    <table class="table table-striped table-bordered">
        <caption>Tabla de usuarios</caption>
        <thead>
            <tr>
            <th>Email</th>
            <th>Rol:</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td><a href="{{route('users.show', $user->id)}}">{{ $user->email }}</a></td>
            <td>
                    @if ($user->fk_rol == 1)

                    Administrador

                    @elseif ($user->fk_rol == 2)

                    Usuario

                    @else

                    rol desconocido.

                    @endif


            </td>
            <td>{{ $user->name}}</td>
            <td>{{$user->datosUsuario->apellido}}</td>
            <td>{{$user->datosUsuario->dni}}</td>
            <td>
            @if ($user->Activo == 1)

            Activo

            @else

            Baneado

            @endif</td>
            <td>
                <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
        @if ($user->fk_rol != 1)

                @if ($user->Activo == 1)

                <button type="submit" class="btn btn-danger btn-sm">Banear</button>

                @else

                <button type="submit" class="btn ColorBotonVerde btn-sm">Desbloquear</button>

                @endif
        @else

 El usuario es Administrador

 @endif
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No hay usuario aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
