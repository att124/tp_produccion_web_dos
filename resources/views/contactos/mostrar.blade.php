@extends('componentes.layout')

@section('titulo',$contacto->titulo )

@section('contenido')

<main>

    <div class="container">

        <h1 class="oferta"> Titulo: {{ $contacto->titulo }} </h1>

        <h2 class="oferta"> Asunto: {{ $contacto->asunto }} </h2>

        <h3 class="titulodescripcion">Consulta:</h3>
        <div class="card p-4 colorcontacto">
        <p class="itemDescripcion margenescontacto colortextocontacto">{{$contacto->consulta}}</p>
        </div>

        <h3 class="titulodescripcion">Respuesta:</h3>
        <div class="card p-4 colorcontacto">
        <p class="itemDescripcion margenescontacto colortextocontacto">{{$contacto->respuesta}}</p>
        </div>

        <div class="centrado espaciobtnvolver">
            <a href="{{ route('users.show', Auth::user()->id) }}" class="btn btn-primary mb-3 tamanobtnvolver">Volver</a>
        </div>


    </div>

    <p class="espaciado">Electra emporium</p>

</main>

@endsection
