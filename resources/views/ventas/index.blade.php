@extends('componentes.layout')

@section('titulo','Roles')

@section('contenido')

<main class="ColorPag">

    <h1 class="oferta">Lista de ventas: </h1>

    <div class="container">

        <table class="table table-striped table-bordered">
            <caption>Tabla de ventas</caption>
            <thead>
                <tr>
                    <th>Número de pedido</th>
                    <th>producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Usuario:</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ventas as $venta)
                <tr>
                    <td>{{$venta->fk_pedido}}</td>
                    <td>{{$venta->producto->titulo}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->precio}}</td>

                    <td><a href="{{route('users.show', $venta->pedido->fk_user)}}">{{$venta->pedido->user->email}}</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No hay ventas aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>

<p class="espaciado">Electra emporium</p>

</main>
@endsection
