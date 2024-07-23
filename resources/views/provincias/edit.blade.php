@extends('componentes.layout')

@section('titulo',"edicion de: {{ $provincia->NombreProvincia }}")


@section('contenido')

<h1 class="oferta">Edición de {{ $provincia->NombreProvincia }}</h1>

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


    <form action="{{ route('provincias.update', $provincia->id) }}" method="POST" class="form-group formulariotamano">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="NombreProvincia" class="form-label">Nombre de la categoria:</label>
            <input type="text" name="NombreProvincia" id="NombreProvincia" value="{{ old('NombreProvincia',$provincia->NombreProvincia) }}" class="form-control tamanoinput" required>
        </div>

        <div class="centrado">
            <button type="submit" class="btn btn-success tamanobtnvolver">Modificar</button>
            <a href="{{ route('provincias.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>
        </div>
    </form>
</div>


<p class="espaciado">Electra emporium</p>



@endsection
