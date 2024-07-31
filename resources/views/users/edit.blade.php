@extends('componentes.layout')

@section('titulo', $user->name)


@section('contenido')


<h1 class="oferta">Edición de  {{$user->name}} </h1>
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


    <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-group formulariotamano formucolor">
        @method('PUT')
        @csrf

    <div class="mb-3">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ old('apellido',$user->datosusuario->apellido) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="dni">DNI:</label>
        <input type="number" id="dni" name="dni" value="{{ old('apellido',$user->datosusuario->dni) }}"  class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="localidad">Localidad: </label>
        <input type="text" id="localidad" name="localidad" value="{{ old('apellido',$user->datosusuario->localidad) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="calle">Calle: </label>
        <input type="text" id="calle" name="calle" value="{{ old('apellido',$user->datosusuario->calle) }}"  class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="altura">Altura</label>
        <input type="number" id="altura" name="altura" value="{{ old('apellido',$user->datosusuario->altura) }}" class="form-control tamanoinput" required>
    </div>

    <div class="mb-3">
        <label for="piso">Piso</label>
        <input type="number" id="piso" name="piso" value="{{ old('apellido',$user->datosusuario->piso) }}"  class="form-control tamanoinput">
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
            <a href="{{ route('users.show',$user->id) }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
        </div>
    </form>
</div>


<p class="espaciado">Electra emporium</p>



@endsection
