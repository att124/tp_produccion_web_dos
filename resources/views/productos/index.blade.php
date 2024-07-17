@extends('componentes.layout')

@section('titulo','Productos')

@section('contenido')

<h1 class="oferta">Lista de productos</h1>


@if(session('completado'))
    <div class="alert alert-success">
        {{ session('completado') }}
    </div>
@endif


<div class="container">

    <a href="{{route('productos.create')}}" class="btn btn-primary mb-3">Crear un nuevo producto</a>


      <form action="{{ route('productos.index') }}" method="GET" class="mb-3">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <select name="fk_categoria" class="form-control">
                    <option value="">Todas las Categorías</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ request('id') == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->Categoria }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>



    <table class="table table-striped table-bordered">
        <caption>Tabla de categorias</caption>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($productos as $producto)
        <tr>
            <td><a href="{{route('productos.mostrar', $producto->id)}}">{{ $producto->titulo }}</a></td>
            <td><a href="{{route('categorias.mostrar',$producto->categoria->id)}}">{{$producto->categoria->Categoria}}</a></td>
            <td>{{$producto->marca}}</td>
            <td>${{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            <td>
                <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="{{route('productos.delete', $producto->id)}}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No hay ningun producto en esta categoria.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="contenidoDespues">Lista de productos.</p>

@endsection
