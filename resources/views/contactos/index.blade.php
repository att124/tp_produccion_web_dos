@extends('componentes.layout')

@section('titulo','Panel Admin')

@section('contenido')

<h1 class="oferta">Lista de consultas: </h1>


<div class="container">

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <caption>Tabla de categorias</caption>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($contactos as $contacto)


        <tr>
            <td><a href="#">{{ $contacto->titulo }}</a></td>
            <td>{{$contacto->user->email}}</td>
            <td>{{$contacto->asunto}}</td>
            <td>
                @if ($contacto->estado == 0)

                    Sin responder

                @else

                    Respondido.

                    @endif



                </td>
                <td>
                    @if ($contacto->estado == 0)

                    <a href="{{ route('contactos.edit', $contacto->id) }}" class="btn btn-warning btn-sm">Responder</a>

                    @endif
                    <form method="POST" action="{{ route('contactos.delete', $contacto) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Cambiar estado</button>
                    </form>
                </td>
            </tr>


            @empty
            <tr>
                <td colspan="5">No hay ninguna consulta.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
