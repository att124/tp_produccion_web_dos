<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        {

            $categorias = Categoria::all();


            $fk_categoria = $request->input('fk_categoria');


            if ($fk_categoria) {
                $productos = Producto::where('fk_categoria', $fk_categoria)->get();
            } else {
                $productos = Producto::all();
            }

            return view('productos.index', compact('productos', 'categorias'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('productos.create', compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'titulo' => ['required', 'string', 'max:45'],
            'precio' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'marca' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
            'imagen1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen2' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen3' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen4' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'fk_categoria' => ['required']
        ]);

        $imagen1 = $request->file('imagen1')->store('imgs', 'public');
        $imagen2 = $request->file('imagen2')->store('imgs', 'public');
        $imagen3 = $request->file('imagen3') ? $request->file('imagen3')->store('imgs', 'public') : null;
        $imagen4 = $request->file('imagen4') ? $request->file('imagen4')->store('imgs', 'public') : null;


        Producto::create([
            'titulo' => $validated['titulo'],
            'precio' => $validated['precio'],
            'stock' => $validated['stock'],
            'marca' => $validated['marca'],
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3,
            'imagen4' => $imagen4,
            'fk_categoria' => $validated['fk_categoria']
        ]);

        return redirect()->route('productos.index')->with('completado', 'producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
