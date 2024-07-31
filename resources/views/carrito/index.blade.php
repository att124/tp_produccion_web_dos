@extends('componentes.layout')

@section('titulo','Carrito')

@section('contenido')

<h1 class="oferta">Carrito</h1>

<h2 class="oferta">Artículos</h2>

<div class="container">

    @if(session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    @forelse($carritoCompras as $id => $producto)
        <table class="table centrarelementostabla">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <div class="col-md-6 d-flex justify-content-center mb-4">
                        <img src="{{ asset('storage/' . $producto['imagen1']) }}" width="150" height="100" class="rounded img-fluid bordesimagenes" alt="{{$producto['titulo']}}">
                    </div></td>
                    <td>{{ $producto['titulo'] }}</td>
                    <td>${{ $producto['precio'] }}</td>
                    <td>${{ $producto['precio'] * $producto['cantidad'] }}</td>
                    <td>
                        <form action="{{ route('carrito.update', $id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <input type="number" name="cantidad" value="{{ $producto['cantidad'] }}" min="1">
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </form>
                        <form action="{{ route('carrito.destroy', $id)}}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    @empty
        <p class="centrado espaciado espacioParrafoCarrito">El carrito está vacío.</p>
    @endforelse

    @if($carritoCompras)
    <form action="{{route('ventas.confirmarCompra')}}" method="get">
        <button type="submit" class="btn btn-success tamanobtnvolver2">Comprar</button>
    </form>
    @endif

    <p class="espaciado" id="espacioextra">Electra emporium</p>

</div>

@endsection
