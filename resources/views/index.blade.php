@extends('componentes.layout')

@section('titulo','Inicio')

@section('contenido')


@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif

    <main class="ColorPag">

        <div id="bordegris">
        <h1 class="oferta" id="titulodecoracion">Electra Emporium</h1>
        </div>
        <section>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                            <img src="{{ asset('imgs/Eslogan_carrousel.png') }}" alt="Imágen de productos electra emporium" width="1300" height="450" class="img-fluid mx-auto ">
                     </div>

              <div class="carousel-item">
              <a href="#">
                <img src="{{ asset('imgs/collage1.jpg') }}" alt="Imágen de productos" width="1300" height="450" class="img-fluid mx-auto">
              </a>

            </div>
            <div class="carousel-item">
              <a href="#">

                  <img src="{{asset('imgs/collage2.png')}}" alt="Imágen" width="1300" height="450" class="img-fluid mx-auto">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section>

<h2 class="oferta">Ofertas</h2>

<div class="container-fluid">

    <div class="row">

        <div class="col-6 centrado">

            <img src="{{ asset('imgs/Ofertas_electrodomesticos.png')}}" alt="Imágen" width="600" height="300" class="img-fluid">

        </div>



        <div class="col-6 centrado">

            <img src="{{asset ('imgs/telesofertas.png')}}" alt="Imágen" width="600" height="300" class="img-fluid">

        </div>

    </div>
</div>


</section>


<section>

    <h2 class="oferta" id="margensuperiorindex"> Destacados </h2>



    @if($productos->isEmpty())
    <p class="itemDescripcion">No hay productos en esta categoría.</p>
    @else


    <div class="container">
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <article class="card cardtamano mrgcard">
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

</section>

<section id="Imgcontacto">

<h2 class="oferta"> Contactanos </h2>

<div class="row">

<div class="col-12 centrado">

    <img src="{{ asset('imgs/bannerC.jpg') }}" alt="Imágen de contacto" width="1000" height="300" class="img-fluid espimg2">

</div>



</div>



</section>
</main>

@endsection
