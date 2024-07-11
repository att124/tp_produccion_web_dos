@extends('componentes.layout')


@section('titulo','Roles')


@section('contenido')

<table>

    <h1 class="oferta">Categorias</h1>

    <a href="{{ route('categorias.crear')}}">Crear</a>

    <caption>Tabla de categorias</caption>

    @forelse ($categorias as $categoria)
    <tr>
        <td><a href="#">{{$categoria->Categoria}}</a></td>
        <td><a href="#">Editar</a></td>
        <td><form method="POST" action="#">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form></td></tr>
    @empty

    <tr><td>No hay ninguna categoria.</td></tr>

    @endforelse

</table>


<p class="contenidoDespues">Lista de categoria de usuarios.</p>

@endsection
