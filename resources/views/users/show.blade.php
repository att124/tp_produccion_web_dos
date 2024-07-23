@extends('componentes.layout')

@section('titulo', 'Panel de usuario')

@section('contenido')

<div class="container">

    <h1 class="oferta">Panel del usuario: {{ $user->name }} </h1>

    @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif


    <table class="table table-striped table-bordered tablausuario">
        <caption>Datos Personales: </caption>

        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Mail</th>
            <th>Dni</th>
            <th>Localidad</th>
            <th>Calle</th>
            <th>Altura</th>
            <th>Piso</th>
        </thead>

<tbody>

    <td>{{ $user->name }}</td>
    <td>{{ $user->datosUsuario->apellido }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->datosUsuario->dni }}</td>
    <td>{{ $user->datosUsuario->localidad}}</td>
    <td>{{ $user->datosUsuario->calle}}</td>
    <td>{{ $user->datosUsuario->altura}}</td>
    <td>
        @if ($user->datosUsuario->piso != null)

        {{ $user->datosUsuario->piso }}

        @else

        El usuario no registró ningún piso

        @endif</td>

    </tbody>

</table>


<div class="centrado">
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success tamanobtnvolver">Editar</a>
    <a href="{{ route('index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
</div>

<p id="margeneselectra">Electra emporium</p>

</div>
@endsection
