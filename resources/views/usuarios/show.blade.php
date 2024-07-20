@extends('componentes.layout')

@section('titulo', 'Panel de usuario')

@section('contenido')

<div class="container">

    <h1 class="oferta">Panel del usuario: {{ $usuario->usuario }} </h1>

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

    <td>{{ $usuario->datosUsuario->nombre }}</td>
    <td>{{ $usuario->datosUsuario->apellido }}</td>
    <td>{{ $usuario->datosUsuario->mail }}</td>
    <td>{{ $usuario->datosUsuario->dni }}</td>
    <td>{{ $usuario->datosUsuario->localidad}}</td>
    <td>{{ $usuario->datosUsuario->calle}}</td>
    <td>{{ $usuario->datosUsuario->altura}}</td>
    <td>
        @if ($usuario->datosUsuario->piso != null)

        {{ $usuario->datosUsuario->piso }}

        @else

        El usuario no registró ningún piso

        @endif</td>

    </tbody>

</table>


<div class="centrado">
    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-success tamanobtnvolver">Editar</a>
    <a href="{{ route('index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
</div>

<p id="margeneselectra">Electra emporium</p>

</div>
@endsection
