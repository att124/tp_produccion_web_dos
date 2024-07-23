@extends('componentes.layout')


@section('titulo','Electra emporium')



@section('contenido')


<h1 class="oferta">Busqueda realizada: {{$query}} </h1>

<h2 class="oferta">Productos:</h2>
@if($productos->isEmpty())
<p class="itemDescripcion">No hay productos que coincidan con {{$query}}</p>
@else


<div class="container">
    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <article class="card cardtamano">
                    <img src="{{ asset('storage/' . $producto->imagen1) }}" alt="{{ $producto->titulo }}" width="300" height="300" class="rounded img-fluid mx-auto">
                    <h2 class="itemtitulo">{{ $producto->titulo }}</h2>
                    <p class="itemDescripcion">Marca: {{ $producto->marca }}</p>
                    <p class="itemDescripcion">Precio: ${{ $producto->precio }}</p>
                    <a href="{{route('productos.mostrar' , $producto->id)}}" class="btn btn-primary ver-mas-btn">Ver más</a>
                </article>
            </div>
        @endforeach
    </div>
</div>
@endif



<div class="centrado espaciobtnvolver">
    <a href="{{ route('index') }}" class="btn btn-primary mb-3 tamanobtnvolver">Volver</a>
</div>



<p class="contenidoDespues">Agregar algo mas.</p>

@endsection
