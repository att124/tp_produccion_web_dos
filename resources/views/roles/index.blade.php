@extends('componentes.layout')

@section('titulo','Roles')

@section('contenido')

<main class="ColorPag">

    <h1 class="oferta">Lista de roles: </h1>

    <div class="container">
        <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Crear nuevo rol</a>

        <table class="table table-striped table-bordered">
            <caption>Tabla de roles</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $rol)
                <tr>
                    <td><a href="{{ route('roles.mostrar', $rol->id)}}">{{ $rol->nombre }}</a></td>
                    <td>
                        <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="{{ route('roles.borrar', $rol->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">No hay roles aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

</main>
@endsection
