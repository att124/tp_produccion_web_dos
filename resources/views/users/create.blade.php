@extends('componentes.layout')

@section('titulo, Registro de usuario')


@section('contenido')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1 class="oferta">Registro de usuario</h1>

<div class="centrado">

<form action="{{route('users.store')}}" method="POST" class="form-group formulariotamano">

@csrf

<label for="email">Email: </label>
<input type="text" name="email" id="email"  class="form-control tamanoinput" required>

<label for="password">Password:</label>
<input type="password" name="password" id="password"  class="form-control tamanoinput" required>

<label for="name">Nombre:</label>
<input type="text" name="name" id="name"  class="form-control tamanoinput" required>

<label for="apellido">Apellido:</label>
<input type="text" name="apellido" id="apellido"  class="form-control tamanoinput" required>

<label for="dni">DNI:</label>
<input type="number" id="dni" name="dni"  class="form-control tamanoinput" required>

<label for="localidad">Localidad: </label>
<input type="text" id="localidad" name="localidad"  class="form-control tamanoinput" required>

<label for="calle">Calle: </label>
<input type="text" id="calle" name="calle"  class="form-control tamanoinput" required>

<label for="altura">Altura</label>
<input type="number" id="altura" name="altura"  class="form-control tamanoinput" required>


<label for="piso">Piso</label>
<input type="text" id="piso" name="piso"  class="form-control tamanoinput">

<div class="mb-3">

    <label for="fk_provincia">Provincia:</label>
    <select name="fk_provincia" id="fk_provincia" class="form-control">
    @forelse ($provincias as $provincia)
    <option value="{{ $provincia->id }}"> {{ $provincia->NombreProvincia }} </option>
    @empty
    <option value="">No hay provincias en la base de datos.</option>
    @endforelse

</select>
</div>

<div class="centrado">


    <button type="submit" class="btn btn-success tamanobtnvolver">Crear</button>
    <a href="{{ route('login') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>

</div>

</form>

</div>


<p id="margeneselectra">Electra emporium</p>

@endsection
