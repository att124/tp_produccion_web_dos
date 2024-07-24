@extends('componentes.layout')


@section('titulo','Acerca de nosotros')


@section('contenido')

<main class="ColorPag">

    <h1 class="oferta"  id="titulodecoracion">Acerca de nosotros</h1>

    <section>

        <div class="row centrado">

            <div class="col-8" ><h2 class="itemDescripcion espacioini">Electra Emporium</h2><p class="itemDescripcion margenesLaterales">Nos dedicamos a ofrecer lo último en tecnología y productos electrónicos. Nuestra objetivo es proporcionar a nuestros clientes dispositivos innovadores y de alta calidad que mejoren su vida diaria.</p></div>
            <div class="col-4 centrado">  <img src="{{ asset('imgs/nosotros2.jpg') }}" alt="Imagen" class="rounded img-fluid mx-auto margenesimg parrafoletras bordesimgsabout margininferior" width="500" height="300"></div>

        </div>



    </section>


    <section>

        <h2 class="tituloabout">Orígenes</h2>

        <div class="row">
            <div class="d-none d-sm-block d-md-block d-xxl-none">
                <div class="col-sm-12 col-md-12 centrado"><img src="{{ asset('imgs/nosotros1.jpg') }}" alt="Imagen" class="mx-auto img-fluid bordesimgsabout" width="1000" height="300"></div>
      </div>

      <div class="col-xxl-3 pd-0 d-none d-xxl-block">   <img src="{{ asset('imgs/nosotros4.jpg') }}" alt="Imagen" class="mx-auto img-fluid bordesimgsabout" width="300" height="500">      </div>

      <div class="col-md-12 col-lg-12 col-xxl-6"> <h2 class="subtituloabout espaciadoabout"> Electra Emporium:</h2>   <p class="itemDescripcion espaciadoabout">Electra Emporium nació en 2005 en la sala de estar de Javier Rodríguez. Empezó vendiendo televisores, ofreciendo productos de alta calidad y un servicio al cliente excepcional. Su enfoque en la satisfacción del cliente rápidamente atrajo la atención de su comunidad.</p>

       <p class="itemDescripcion espaciadoabout">El negocio creció rápidamente, expandiéndose más allá de los televisores para incluir una variedad de dispositivos electrónicos. En 2008, Javier abrió la primera tienda física de Electra Emporium en el centro de la ciudad, convirtiéndose en un punto de referencia para los entusiastas de la tecnología.</p>

        <p class="itemDescripcion espaciadoabout">Hoy, Electra Emporium es una empresa reconocida con varias sucursales y una sólida presencia en línea, ofreciendo una amplia gama de productos electrónicos. La pasión y el compromiso de Javier continúan siendo el motor que impulsa el éxito y la innovación de la empresa.</p>
        </p></div>

      <div class="col-xxl-3 pd-0 d-none d-xxl-block">      <img src="{{ asset('imgs/nosotros5.jpg') }}" alt="Imagen" class="img-fluid float-end bordesimgsabout" width="300" height="500">          </div>

      <div class="d-none d-sm-block d-md-block d-xxl-none">
          <div class="col-sm-12 col-md-12 centrado"><img src="{{ asset('imgs/nosotros1.jpg') }}" id="imagenresponsive" alt="Imagen" class="mx-auto img-fluid bordesimgsabout" width="1000" height="300"></div>
        </div>

    </div>











    <div class="row">

        <div class="col-12">

            <img src="{{ asset('imgs/nosotros3.jpg') }}" alt="Imagen" class="mx-auto img-fluid margenesimg parrafoletras bordesimgsabout" id="imagenabout" width="1500" height="350">

        </div>
    </div>





</section>
</main>

@endsection


