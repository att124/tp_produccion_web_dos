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
        $validacion = $request ->validate([
            'titulo' => ['required', 'string', 'max:45'],
            'precio' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'marca' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
            'descripcion' => ['required', 'string'],
            'especificacion' => ['required', 'string'],
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
            'titulo' => $validacion['titulo'],
            'precio' => $validacion['precio'],
            'stock' => $validacion['stock'],
            'marca' => $validacion['marca'],
            'descripcion' => $validacion['descripcion'],
            'especificacion' => $validacion['especificacion'],
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3,
            'imagen4' => $imagen4,
            'fk_categoria' => $validacion['fk_categoria']
        ]);

        return redirect()->route('productos.index')->with('completado', 'producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.mostrar', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {

        $categorias = Categoria::all();

       return view('productos.edit',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $validacion = $request ->validate([
            'titulo' => ['required', 'string', 'max:45'],
            'precio' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'marca' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
            'descripcion' => ['required', 'string'],
            'especificacion' => ['required', 'string'],
            'imagen1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen2' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen3' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imagen4' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'fk_categoria' => ['required']
        ]);
        if ($request->hasFile('imagen1')) {
            $imagen1 = $request->file('imagen1')->store('imgs', 'public');
            $producto->imagen1 = $imagen1;
        }
        if ($request->hasFile('imagen2')) {
            $imagen2 = $request->file('imagen2')->store('imgs', 'public');
            $producto->imagen2 = $imagen2;
        }
        $imagen3 = $request->hasFile('imagen3') ? $request->file('imagen3')->store('imgs', 'public') : $producto->imagen3;
        $imagen4 = $request->hasFile('imagen4') ? $request->file('imagen4')->store('imgs', 'public') : $producto->imagen4;


        $producto->update([
            'titulo' => $validacion['titulo'],
            'precio' => $validacion['precio'],
            'stock' => $validacion['stock'],
            'marca' => $validacion['marca'],
            'descripcion' => $validacion['descripcion'],
            'especificacion' => $validacion['especificaciones'],
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3,
            'imagen4' => $imagen4,
            'fk_categoria' => $validacion['fk_categoria']
        ]);
        return redirect()->route('productos.index')->with('completado', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Producto $producto)
    {

        $producto->delete();

       return redirect()->route('productos.index')->with('producto eliminado','El producto ha sido eliminado');

    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');

        $productos = Producto::where('titulo', 'LIKE', "%{$query}%")->get();

        return view('productos.resultados', compact('productos','query'));

    }




}
