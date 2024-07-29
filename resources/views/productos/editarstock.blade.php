@extends('componentes.layout')


@section('titulo','Electra emporium')


@section('contenido')

<main class="ColorPag">

    <div class="container mt-5">
        <h1 class="tituloProducto">Detalles del producto</h1>



        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('storage/' . $producto->imagen1) }}" class="rounded img-fluid bordesimagenes" alt="{{$producto->titulo}}">
        </div>

        <div class="card p-4 border-dark">
                <h2 id="bordetitulo">{{$producto->titulo}}</h2>
                <p class="texto"><strong>Categoria:</strong> {{$producto->categoria->Categoria}}</p>
                <p class="texto"><strong>Marca:</strong> {{$producto->marca}}</p>
                <p class="texto"><strong>Stock:</strong> {{$producto->stock}}</p>
                <p class="texto"><strong>Precio:</strong> ${{$producto->precio}}</p>
            </div>

            <h2 class="oferta">Incrementar stock:</h2>
            <div class="centrado">

                <form action="{{ route('producto.stock', $producto)}}" class="bordesformulario" method="post" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <label for="stock" class="labelstock">Incrementar en:</label>
                    <div class="centrado">
                        <input type="number" name="stock" value="sotck" min="1" class="inputdecoracion">
                    </div>

                    <div class="centrado">
                        <button type="submit" class="btn btn-success">Incrementar Stock</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-primary mb-3 margenesbtn">Volver</a>
                    </div>
                </form>

            </div>
            <p class="espaciado">Electra emporium</p>
        </div>
    </main>
        @endsection
