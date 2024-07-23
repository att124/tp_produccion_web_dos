@extends('componentes.layout')


@section('titulo','Electra emporium')



@section('contenido')


<h1 class="oferta">Categoria: {{$categoria->Categoria}} </h1>

<h2 class="oferta">Productos en esta categoría:</h2>
@if($categoria->productos->isEmpty())
<p class="itemDescripcion">No hay productos en esta categoría.</p>
@else


<div class="container">
    <div class="row">
        @foreach ($categoria->productos as $producto)
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



<p class="espaciado">Electra emporium</p>

@endsection
