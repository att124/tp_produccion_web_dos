@extends('componentes.layout')

@section('titulo','Edicion de categoria')

@section('contenido')

<h1 class="oferta">Edición de {{ $categoria->Categoria }}</h1>

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


    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="form-group formulariotamano formucolor">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="Categoria" class="form-label">Nombre de la categoria:</label>
            <input type="text" name="Categoria" id="Categoria" value="{{ $categoria->Categoria }}" class="form-control tamanoinput" required>
        </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success tamanobtnvolver">Modificar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
        </div>
    </form>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
