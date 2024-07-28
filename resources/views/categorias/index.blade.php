@extends('componentes.layout')

@section('titulo','Categorias')

@section('contenido')

<h1 class="oferta">Categorias</h1>


<div class="container">

    <a href="{{ route('categorias.crear') }}" class="btn btn-primary mb-3">Crear nueva categoria</a>

    <table class="table table-striped table-bordered">
        <caption>Tabla de categorias</caption>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categorias as $categoria)
        <tr>
            <td><a href="{{route('categorias.mostrar',$categoria->id)}}">{{ $categoria->Categoria }}</a></td>
            @if ($categoria->visible == 1)
            <td>

                Habilitada.

            </td>

            @else

            <td>
                 Deshabilitada.

            </td>

            @endif
            <td>
                <a href="{{route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="{{route('categorias.delete', $categoria->id)}}" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    @if ($categoria->visible == 1)

                    <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>

                    @else

                    <button type="submit" class="btn btn-danger btn-sm">Habilitar</button>

                    @endif
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No hay ninguna categoria.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

@endsection
