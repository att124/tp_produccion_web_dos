@extends('componentes.layout')

@section('titulo','Roles')

@section('contenido')

<h1 class="oferta">Creación de roles</h1>

<div class="centrado">


    <form action="{{ route('roles.store') }}" method="POST" class="form-group formulariotamano formucolor">

        @csrf <!-- Proteccion -->

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del rol:</label>
            <input type="text" name="nombre" id="nombre" class="form-control tamanoinput" required>
        </div>

        <div class="centrado">


            <button type="submit" class="btn btn-success tamanobtnvolver">Creacion</button>
            <a href="{{ route('roles.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>

        </div>

</form>
</div>



<p class="espaciado">Electra emporium</p>

@endsection
