<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias')); // Agregar un categorias.index para el panel de administrador quiza.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.crear');  // Formulario de creacion de Categorias
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Categoria' => ['required', 'string', 'max:45' ,'regex:/^[a-zA-Z\s]*$/'],
        ]);

        Categoria::create($validated);

        return redirect()->route('categorias.index')->with('completado', 'Categoría creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {

        $productos = $categoria->productos()->where('visible', 1)->get();

        return view('categorias.mostrar', compact('categoria','productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'Categoria' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
            'visible' => ['required', 'boolean']
        ]);

        $categoria->update($validated);

        return redirect()->route('categorias.index')->with('completado', 'Categoría actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        if ($categoria->visible == 1){


            $categoria->update(['visible' => false]);

            return redirect()->route('categorias.index')->with('completado', 'Categoría deshabilitada.');

        } else {


            $categoria->update(['visible' => true]);

            return redirect()->route('categorias.index')->with('completado','Categoría habilitada');

        }


    }
}
