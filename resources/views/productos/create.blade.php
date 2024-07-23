@extends('componentes.layout')

@section('titulo','Productos')

@section('contenido')

<h1 class="oferta">Crear nuevo producto</h1>

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

    <form action="{{route('productos.store')}}" method="POST" class="form-group formulariotamano" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Nombre del producto:</label>
            <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" class="form-control tamanoinput" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio del producto:</label>
            <input type="number" name="precio" id="precio" value="{{old('precio')}}" class="form-control tamanoinput" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock del producto</label>
            <input type="number" name="stock" id="stock" value="{{old('stock')}}" class="form-control tamanoinput" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca del producto</label>
            <input type="text" name="marca" id="marca" value="{{old('marca')}}" class="form-control tamanoinput" required>
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripción: </label>
            <textarea name="descripcion" id="descripcion" value="{{old('descripcion')}}" class="form-control tamanoinput" required> </textarea>
        </div>
        <div class="mb-3">
            <label for="especificaciones">Especificaciones tecnicas: </label>
            <textarea name="especificacion" id="especificacion" value="{{old('especificacion')}}" class="form-control tamanoinput" required> </textarea>
        </div>

        <div class="mb-3">
            <label for="imagen1">Imagen1: </label>
            <input type="file" name="imagen1" id="imagen1" class="form-control tamanoinput">
        </div>
        <div class="mb-3">
            <label for="imagen2">Imagen2: </label>
            <input type="file" name="imagen2" id="imagen2" class="form-control tamanoinput">
        </div>
        <div class="mb-3">
            <label for="imagen3">Imagen3 (No obligatoria): </label>
            <input type="file" name="imagen3" id="imagen3" class="form-control tamanoinput">
        </div>
        <div class="mb-3">
            <label for="imagen4">Imagen4 (No obligatoria): </label>
            <input type="file" name="imagen4" id="imagen4" class="form-control tamanoinput">
        </div>

        <div class="mb-3">

            <label for="fk_categoria">Categoria:</label>
            <select name="fk_categoria" id="fk_categoria" class="form-control">
            @forelse ($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ request('id') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->Categoria }}
            </option>
            @empty
            <option value="">No hay categorias disponibles</option>
            @endforelse

        </select>

</div>

        <div class="centrado">


            <button type="submit" class="btn btn-success tamanobtnvolver">Creacion</button>
            <a href="{{ route('productos.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>

        </div>

</form>
</div>



<p class="espaciado">Electra emporium</p>

@endsection
