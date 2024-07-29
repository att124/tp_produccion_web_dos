


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
                        <ul class="dropdown-menu bg-pink">
                            @forelse ($categorias as $categoria)
                            <li><a href="{{route('categorias.mostrar',$categoria->id)}}" class="dropdown-item hoverdropitems">{{$categoria->Categoria}}</a></li>
                            @empty
                            <li class="dropdown-item">No hay categorias</li>
                            @endforelse
                        </ul>
                    </li>

                      <!-- Laravel verifica si el enlace que se encuentra activo es 'contacto' en caso de ser verdadero devuelve 'activo' y falso '' -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }} espaciadoA hovernav" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>


                    @if (Auth::check())


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle espaciadoA hovernav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>

            <ul class="dropdown-menu bg-pink">
                    <li class="nav-item">
                        <a href="{{ route('users.show', Auth::user()->id) }}" class="dropdown-item hoverdropitems">Perfil </a>
                    </li>


                    <li class="nav-item">
                        <a class="dropdown-item {{ Request::is('contactos/create') ? 'active' : '' }}  hoverdropitems hovernav" href="{{route ('contactos.create')}}">Contacto</a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item hoverdropitems">Cerrar sesión</button>
                        </form>
                    </li>
            </ul>
                    @else


                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login') ? 'active' : '' }} espaciadoA hovernav" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>


                    @endif




                    <li class="nav-item"> <a class="nav-link {{ Request::is('carrito.index') ? 'active' : '' }} espaciadoA hovernav" href="{{route('carrito.index')}}">Carrito</a></li>

                    @auth


                    @if (Auth::user()->fk_rol == 1)
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle espaciadoA hovernav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administradores
                        </a>
                        <ul class="dropdown-menu bg-pink">
                            <li><a class="dropdown-item hoverdropitems" href="{{route('roles.index')}}">Roles</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{route('contactos.index')}}">Consultas</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{route('categorias.index')}}">Categorias</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{ route('users.index') }}">Usuarios</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{route('productos.index')}}">Lista de productos</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{route('provincias.index')}}">  Lista de provincias</a></li>
                            <li><a class="dropdown-item hoverdropitems" href="{{route('ventas.index')}}">  Lista de ventas</a></li>
                        </ul>
                    </li>
                    @endif
                    @endauth

                </ul>
                <form class="d-flex" role="search" action="{{ route('productos.buscar') }}" method="get">
                    @csrf
                    <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


