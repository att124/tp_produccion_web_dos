@extends('componentes.layout')


@section('titulo','Electra emporium')



@section('contenido')

<div class="container mt-5">
    <h1 class="tituloProducto">Detalles del producto</h1>

    <div class="row centrado2">
        <div class="col-md-6 d-flex justify-content-center mb-4">
            <img src="{{ asset('storage/' . $producto->imagen1) }}" class="rounded img-fluid bordesimagenes" alt="{{$producto->titulo}}">
        </div>
        <div class="col-md-6">
            <div class="card p-4 border-dark">
                <h2 id="bordetitulo">{{$producto->titulo}}</h2>
                <p class="texto"><strong>Categoria:</strong> {{$producto->categoria->Categoria}}</p>
                <p class="texto"><strong>Marca:</strong> {{$producto->marca}}</p>
                <p class="texto"><strong>Precio:</strong> ${{$producto->precio}}</p>
                <form action="{{ route('carrito.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $producto->id }}">

                    <button type="submit" class="btn btn-primary btn-block btncomprar">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12"><h3 class="tituloimagenesproducto">Imágenes del producto</h3></div>
    <section class="mt-5 bordeseccionimgs">
        <div class="row">
            <div class="col-md-4 mb-4 centrado">
                @if ($producto->imagen2 == null)
                    <p class="imgmargeninferior">No hay imagen disponible</p>
                @else
                    <img src="{{ asset('storage/' . $producto->imagen2) }}" class="rounded img-fluid imgmargeninferior bordesimagenes" alt="Imagen del producto">
                @endif
            </div>
            <div class="col-md-4 mb-4 centrado">
                @if ($producto->imagen3 == null)
                    <p class="imgmargeninferior">No hay imagen disponible</p>
                @else
                    <img src="{{ asset('storage/' . $producto->imagen3) }}" class="rounded img-fluid imgmargeninferior bordesimagenes" alt="Imagen del producto">
                @endif
            </div>
            <div class="col-md-4 mb-4 centrado">
                @if ($producto->imagen4 == null)
                    <p class="imgmargeninferior">No hay imagen disponible</p>
                @else
                    <img src="{{ asset('storage/' . $producto->imagen4) }}" class="rounded img-fluid imgmargeninferior bordesimagenes" alt="Imagen del producto">
                @endif
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h3 class="titulodescripcion">Descripción</h3>
        <div class="card p-4 border-dark">
            <div>{{$producto->descripcion}}</div>
        </div>
    </section>

    <section class="mt-5">
        <h3 class="titulodescripcion">Especificaciones técnicas</h3>
        <div class="card p-4 border-dark">
            <div>{{$producto->especificacion}}</div>
        </div>
    </section>
</div>

<p id="margeneselectra">Electra emporium</p>

    @endsection
