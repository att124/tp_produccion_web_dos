<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">

    <title>Inicio</title>


</head>
<body>
<header class="ColorPag">


    <nav class="navbar navbar-expand-lg bg-pink paddingNavbar">
        <div class="container-fluid colornav">
            <a class="nav-link active espaciadoA" aria-current="page" href="#">   <img src="https://fakeimg.pl/300x70/?text=Hello1" alt="Logo del ecommerce" width="300" height="70" class="espaciadoA"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle espaciadoA" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Categoria1</a></li>
                            <li><a class="dropdown-item" href="#">Categoria2</a></li>
                            <li><a class="dropdown-item" href="#">Categoria3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link espaciadoB" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link espaciadoA" href="#">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link espaciadoA" href="#">Registrarse</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main>

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
                <img src="https://fakeimg.pl/1300x450/?text=Hello1" alt="Imágen de un almuerzo típico de Austria" width="1300" height="450" class="img-fluid mx-auto">
              </a>

            </div>
            <div class="carousel-item">
              <a href="#">

                  <img src="https://fakeimg.pl/1300x450/?text=Hello1" alt="Imágen de un postre típico de Austria" width="1300" height="450" class="img-fluid mx-auto">
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

            <img src="https://fakeimg.pl/600x300/?text=Hello1" alt="Imágen de una porción de Sacher" width="600" height="300" class="img-fluid">

        </div>



        <div class="col-6 centrado">

            <img src="https://fakeimg.pl/600x300/?text=Hello1" alt="Imágen de una porción de Sacher" width="600" height="300" class="img-fluid">

        </div>

    </div>
</div>


</section>


<section>

    <h2 class="oferta">Lo mas vendido </h2>

<div class="row">

  <div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
        <h2>Elemento 8</h2>
        <p>DESCRIPCIÓN 8</p>
    </article>
</div>

<div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
        <h2>Elemento 8</h2>
        <p>DESCRIPCIÓN 8</p>
    </article>
</div>

<div class="d-none d-lg-block col-lg-4">
    <article class="card">
        <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
        <h2>Elemento 8</h2>
        <p>DESCRIPCIÓN 8</p>
    </article>
</div>

</div>

<h3 class="oferta"> Productos destacados </h3>

<div class="row">

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
            <h2>Elemento 8</h2>
            <p>DESCRIPCIÓN 8</p>
        </article>
    </div>

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
            <h2>Elemento 8</h2>
            <p>DESCRIPCIÓN 8</p>
        </article>
    </div>

    <div class="d-none d-lg-block col-lg-4">
        <article class="card">
            <img src="https://fakeimg.pl/500x400/?text=8" alt="foto 8" width="300" height="200" class="rounded img-fluid">
            <h2>Elemento 8</h2>
            <p>DESCRIPCIÓN 8</p>
        </article>
    </div>

</div>


</section>

</main>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
