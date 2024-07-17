@extends('componentes.layout')


@section('titulo','Electra emporium')



@section('contenido')

<div class="container">


    <h1 class="oferta">Detalles del producto</h1>


    <div class="row">

        <div class="col-6 imgcentrada" ><img src="{{ asset('storage/' . $producto->imagen1) }}" class="rounded img-fluid mx-auto" alt="{{$producto->titulo}}"></div>

        <div class="col-6 bordesproduct">

            <h2 class="oferta">{{$producto->titulo}}</h2>

            <p class="itemDescripcion">Categoria: {{$producto->categoria->Categoria}}</p>

            <p class="itemDescripcion">Marca: {{$producto->marca}}</p>

            <p class="itemDescripcion">Precio: ${{$producto->precio}}</p>

            <a href="#" class="btn btn-primary ver-mas-btn centradobtncompra">Comprar</a>

        </div>

    </div>

    <section>

       <p> imagenes: </p>

    </section>

<section>

    <p>Descripcion: </p>

</section>

<section>

    <p>Especificaciones técnicas:</p>

</section>

</div>


    @endsection
