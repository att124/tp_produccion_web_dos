@extends('componentes.layout')

@section('titulo','Inicio de sesion')

@section('contenido')

<main>

    <!--<h1 class="oferta text-center mt-5">Login</h1>
    -->
    <div class="centrado">
        <img src="{{asset('imgs/LogoElectra.png')}}" alt="Logo de electra emporiun" width="300" height="70" class="LogoEspacio">
    </div>

    @if(session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <form action="{{ route('login')}}" method="post" class="border p-5 cc">
                        @csrf
                        <div class="form-group">
                            <label for="usuario" class="espacioini letrasini">Usuario:</label>
                            <div class="centrado">
                                <input type="text" id="usuario" name="usuario" class="form-control espacioini tamanoinp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contraseña" class="espacioini letrasini">Contraseña:</label>
                            <div class="centrado">
                                <input type="password" id="contraseña" name="contraseña" class="form-control espacioini tamanoinp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 padding-izquierda">
                                <button type="submit" class="btn btn-primary btn-block botonTamano">Ingresar</button>
                            </div>
                            <div class="col-12  col-lg-6 padding-derecha registrarse">

                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-block botonTamano registrarse">Registrarse</a>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 text-center mt-3">
                    <a href="{{route('contacto')}}">¿Necesitas ayuda?</a>
                </div>
            </div>
        </div>
    </section>

</main>




<p class="espaciado">Electra emporium</p>

@endsection
