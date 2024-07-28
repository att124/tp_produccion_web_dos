@extends('componentes.layout')

@section('titulo','Provincias')

@section('contenido')

<h1 class="oferta">Lista de provincias: </h1>

<div class="container">
    @if(session('completado'))
    <div class="alert alert-success">
        {{ session('completado') }}
    </div>
    @endif

    <a href="{{ route('provincias.create') }}" class="btn btn-primary mb-3">Agregar provincia</a>

    <table class="table table-striped table-bordered">
        <caption>Tabla de provincias</caption>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($provincias as $provincia)
        <tr>
            <td>{{ $provincia->NombreProvincia }}</td>
            <td>@if ($provincia->visible == 1)

                habilitada

            @else

                Deshabilitada

            @endif</td>
            <td>
                <a href=" {{ route('provincias.edit', $provincia->id) }} " class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="{{ route('provincias.destroy', $provincia->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    @if ($provincia->visible == 1)

                    <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
                    @else
                    <button type="submit" class="btn btn-danger btn-sm">Habilitar</button>
                    @endif
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No hay provincias aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
