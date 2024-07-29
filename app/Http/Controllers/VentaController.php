<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class VentaController extends Controller
{
    public function confirmarCompra()
    {
        $carritoCompras = session()->get('carrito', []);
        return view('ventas.confirmarCompra', compact('carritoCompras'));
    }

    public function finalizarCompra(Request $request)
    {
        try {

            $carritoCompras = session()->get('carrito', []);

            if (empty($carritoCompras)) {
                return redirect()->route('index')->with('mensaje', 'El carrito está vacío');
            }

            $request->validate([
                'direccion' => 'required|string|max:40',
                'telefono' => 'required',
                 'titular' => 'required|string|max:50',
                'nrotarjeta' => 'required|string|max:16',
            ]);

            $tarjeta = Crypt::encryptString($request->nrotarjeta);

            $pedido = Pedido::create([
                'fk_user' => Auth::id(),
                'fecha_pedido' => now(),
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
            ]);


            foreach ($carritoCompras as $id => $producto) {
                Venta::create([
                    'fk_pedido' => $pedido->id,
                    'fk_producto' => $id,
                    'cantidad' => $producto['cantidad'],
                    'precio' => $producto['precio'] * $producto['cantidad'],
                    'titular' => $request->titular,
                    'nrotarjeta' => $tarjeta,
                ]);

                $productoSelec = Producto::findOrFail($id);

                $cantidadNueva = $productoSelec->stock - $producto['cantidad'];

                $productoSelec->update(['stock' => $cantidadNueva]);

            }



            session()->forget('carrito');

            return redirect()->route('index')->with('mensaje', 'Compra Realizada');
        } catch (\Exception $e) {


            return redirect()->route('index')->with('mensaje', 'Error al finalizar la compra');
        }
    }

    public function index(){

        $ventas = Venta::all();


        return view('ventas.index',compact('ventas'));

    }


}
