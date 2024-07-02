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
            <a class="nav-link active espaciadoA" aria-current="page" href="{{ route('index')}}">   <img src="{{ asset('imgs/LogoElectra.png') }}" alt="Logo del ecommerce" width="300" height="70" class="espaciadoA"></a>
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
                        <a class="nav-link espaciadoA" href="{{ route('inicio_sesion') }}">Iniciar sesión</a>
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
</header>
