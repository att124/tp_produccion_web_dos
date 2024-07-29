<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    private $SessionCarrito = 'carrito';

    public function index()
    {
        $carritoCompras = session()->get($this->SessionCarrito, []);
        return view('carrito.index', compact('carritoCompras'));
    }

    public function store(Request $request)
    {
        $producto = Producto::findOrFail($request->id);

        $carritoCompras = session()->get($this->SessionCarrito, []);

        if (isset($carritoCompras[$producto->id])) {
            $carritoCompras[$producto->id]['cantidad'] += 1;
        } else {
            $carritoCompras[$producto->id] = [
                'titulo' => $producto->titulo,
                'precio' => $producto->precio,
                'imagen1' => $producto->imagen1,
                'cantidad' => 1
            ];
        }

        session()->put($this->SessionCarrito, $carritoCompras);

        return redirect()->route('carrito.index')->with('mensaje', 'Producto agregado al carrito.');
    }



    public function update(Request $request, $id)
    {

        $carritoCompras = session()->get($this->SessionCarrito, []);

        $producto = Producto::findOrFail($request->id);

        $cantidadDeseada = 1;

        if (isset($carritoCompras[$producto->id])) {

            $carritoCompras[$id]['cantidad'] = $request->input('cantidad');

            $cantidadDeseada = $carritoCompras[$id]['cantidad'];

        }


        if (isset($carritoCompras[$id])) {

            $carritoCompras[$id]['cantidad'] = $request->input('cantidad');

            if ($cantidadDeseada > $producto->stock){

                $carritoCompras[$id]['cantidad'] = 1;
                return redirect()->route('carrito.index')->with('mensaje', 'No hay suficiente stock para agregar este producto al carrito.');
            }

            if ($carritoCompras[$id]['cantidad'] < 1) {
                $carritoCompras[$id]['cantidad'] = 1;
            }


            session()->put($this->SessionCarrito, $carritoCompras);
        }


        return redirect()->route('carrito.index')->with('mensaje', 'Cantidad actualizada.');
    }




    public function destroy($id)
{

    $carritoCompras = session()->get($this->SessionCarrito, []);


    if (isset($carritoCompras[$id])) {

        unset($carritoCompras[$id]);


        session()->put($this->SessionCarrito, $carritoCompras);
    }


    return redirect()->route('carrito.index')->with('mensaje', 'Producto eliminado del carrito.');
}

}
