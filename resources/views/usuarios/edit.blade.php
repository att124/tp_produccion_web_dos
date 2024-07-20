@extends('componentes.layout')

@section('titulo', $usuario->usuario)


@section('contenido')

<h1 class="oferta">Edición de  {{$usuario->usuario}} </h1>

<div class="centrado">


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="form-group formulariotamano">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre',$usuario->datosusuario->nombre) }}" class="form-control tamanoinput" required>
        </div>

    <div class="mb-3">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ old('apellido',$usuario->datosusuario->apellido) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="mail">Mail: </label>
        <input type="text" name="mail" id="mail" value="{{ old('apellido',$usuario->datosusuario->mail) }}"  class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="dni">DNI:</label>
        <input type="number" id="dni" name="dni" value="{{ old('apellido',$usuario->datosusuario->dni) }}"  class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="localidad">Localidad: </label>
        <input type="text" id="localidad" name="localidad" value="{{ old('apellido',$usuario->datosusuario->localidad) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="calle">Calle: </label>
        <input type="text" id="calle" name="calle" value="{{ old('apellido',$usuario->datosusuario->calle) }}"  class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="altura">Altura</label>
        <input type="number" id="altura" name="altura" value="{{ old('apellido',$usuario->datosusuario->altura) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="piso">Piso</label>
        <input type="number" id="piso" name="piso" value="{{ old('apellido',$usuario->datosusuario->piso) }}"  class="form-control tamanoinput">
    </div>

    <div class="mb-3">

        <label for="fk_provincia">Provincia:</label>
        <select name="fk_provincia" id="fk_provincia" class="form-control">
        @forelse ($provincias as $provincia)
        <option value="{{ $provincia->id }}">  {{ $provincia->NombreProvincia }} </option>
        @empty
        <option value="">No hay provincias en la base de datos.</option>
        @endforelse

    </select>
    </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success tamanobtnvolver">Modificar</button>
            <a href="{{ route('usuarios.show',$usuario->id) }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
        </div>
    </form>
</div>


<p class="contenidoDespues">Agregar algo mas.</p>



@endsection
