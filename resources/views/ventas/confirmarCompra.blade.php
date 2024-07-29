@extends('componentes.layout')

@section('titulo', 'Confirmar Compra')

@section('contenido')

<main class="ColorPag">

    <h1 class="oferta">Confirmar Compra</h1>

    <h2 class="oferta">Resumen de la Compra</h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carritoCompras as $id => $producto)
                <tr>
                    <td>{{ $producto['titulo'] }}</td>
                    <td>${{ $producto['precio'] }}</td>
                    <td>{{ $producto['cantidad'] }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('ventas.finalizarCompra') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="direccion">Dirección de Envío</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono de Contacto</label>
                <input type="number" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="centrado">
                <img src="{{asset('imgs/Visalogo.png')}}" alt="Logo de visa" width="100" class="imgsventa" height="70">
                <img src="{{asset('imgs/MasterCardLogo.png')}}" alt="Logo de masterCard" class="imgsventa" width="100" height="70">
            </div>

            <div class="form-group">
                <label for="titular">Titular de tarjeta</label>
                <input type="text" class="form-control" id="telefono" name="titular" required>
            </div>

            <div class="form-group">
                <label for="nrotarjeta">Número de tarjeta</label>
                <input type="text" class="form-control" id="telefono" name="nrotarjeta" required>
            </div>

            <div class="centrado espaciobtnvolver">
                <button type="submit" class="btn btn-success tamanobtnvolver2">Confirmar Compra</button>
            </div>



        </form>
    </div>

    <p class="espaciado">Electra emporium</p>

</main>
    @endsection
