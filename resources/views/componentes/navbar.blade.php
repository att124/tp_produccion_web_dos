


    <nav class="navbar navbar-expand-lg bg-pink paddingNavbar">
        <div class="container-fluid colornav">
            <a class="nav-link active espaciadoA " aria-current="page" href="{{ route('index')}}">   <img src="{{ asset('imgs/LogoElectra.png') }}" alt="Logo del ecommerce" width="300" height="70" class="espaciadoA"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle espaciadoA hovernav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            @forelse ($categorias as $categoria)
                            <li><a href="{{route('categorias.mostrar',$categoria->id)}}" class="dropdown-item">{{$categoria->Categoria}}</a></li>
                            @empty
                            <li class="dropdown-item">No hay categorias</li>
                            @endforelse
                        </ul>
                    </li>
                    <li class="nav-item">
                        <!-- Laravel verifica si el enlace que se encuentra activo es 'contacto' en caso de ser verdadero devuelve 'activo' y falso '' -->
                        <a class="nav-link {{ Request::is('contacto') ? 'active' : '' }} espaciadoB hovernav" href="{{route ('contacto')}}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }} espaciadoA hovernav" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('inicio_sesion') ? 'active' : '' }} espaciadoA hovernav" href="{{ route('inicio_sesion') }}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle espaciadoA hovernav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administradores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('roles.index')}}">Roles</a></li>
                            <li><a class="dropdown-item" href="{{route('categorias.index')}}">Categorias</a></li>
                            <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Usuarios</a></li>
                            <li><a class="dropdown-item" href="{{route('productos.index')}}">Lista de productos</a></li>
                            <li><a class="dropdown-item" href="{{route('provincias.index')}}">  Lista de provincias</a></li>
                        </ul>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


