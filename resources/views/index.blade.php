@include('componentes.navbar')

    <main class="ColorPag">

        <div id="bordegris">
        <h1 class="oferta" id="titulodecoracion">Ofertas</h1>
        </div>
        <section>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <a href="#">
                            <img src="https://fakeimg.pl/1300x450/?text=Hello1" alt="Imágen de una porción de Sacher" width="1300" height="450" class="img-fluid mx-auto ">
                        </a>
              </div>

              <div class="carousel-item">
              <a href="#">
                <img src="https://fakeimg.pl/1300x450/?text=Hello2" alt="Imágen de un almuerzo típico de Austria" width="1300" height="450" class="img-fluid mx-auto">
              </a>

            </div>
            <div class="carousel-item">
              <a href="#">

                  <img src="https://fakeimg.pl/1300x450/?text=Hello3" alt="Imágen de un postre típico de Austria" width="1300" height="450" class="img-fluid mx-auto">
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

<h2 class="oferta">Novedades</h2>

<div class="container-fluid">

    <div class="row">

        <div class="col-6 centrado">

            <img src="https://fakeimg.pl/600x300/?text=Hello1" alt="Imágen" width="600" height="300" class="img-fluid">

        </div>



        <div class="col-6 centrado">

            <img src="https://fakeimg.pl/600x300/?text=Hello1" alt="Imágen" width="600" height="300" class="img-fluid">

        </div>

    </div>
</div>


</section>


<section>

    <h2 class="oferta">Lo mas vendido </h2>

<div class="row">

  <div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
        <h2 class="itemtitulo">Elemento 8</h2>
        <p class="itemDescripcion">DESCRIPCIÓN 8</p>
        <p class="itemDescripcion">Precio</p>
    </article>
</div>

<div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
        <h2 class="itemtitulo">Elemento 8</h2>
        <p class="itemDescripcion">DESCRIPCIÓN 8</p>
        <p class="itemDescripcion">Precio</p>
    </article>
</div>

<div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
        <h2 class="itemtitulo">Elemento 8</h2>
        <p class="itemDescripcion">DESCRIPCIÓN 8</p>
    </article>
</div>

</div>

<h3 class="oferta"> Productos destacados </h3>

<div class="row">

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
            <h2 class="itemtitulo">Elemento 8</h2>
            <p class="itemDescripcion">DESCRIPCIÓN 8</p>
        </article>
    </div>

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
            <h2 class="itemtitulo">Elemento 8</h2>
            <p class="itemDescripcion">DESCRIPCIÓN 8</p>
        </article>
    </div>

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/300x200/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid mx-auto">
            <h2 class="itemtitulo">Elemento 8</h2>
            <p class="itemDescripcion">DESCRIPCIÓN 8</p>
        </article>
    </div>

</div>


</section>

<section id="Imgcontacto">

<h2 class="oferta"> Contactanos </h2>

<div class="row">

<div class="col-12 centrado">

    <img src="https://fakeimg.pl/1000x300/?text=Hello1" alt="Imágen" width="1000" height="300" class="img-fluid espimg2">

</div>



</div>



</section>
</main>

@include('componentes.footer')
