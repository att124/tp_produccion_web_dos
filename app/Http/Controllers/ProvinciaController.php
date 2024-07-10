<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $provincias = Provincia::all();

       return view('provincia.index',compact('provincias')); // compact devuelve un array asociativo con las provincias.


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provincia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Provincia' => 'required|string|max:45',
        ]);

        Provincia::create($validated);

        return redirect()->route('provincia.index')->with('completado', 'Provincia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provincia $provincia)
    {
        return view('provincia.show', compact('provincia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provincia $provincia)
    {
        return view('provincia.edit', compact('provincia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provincia $provincia)
    {
        $validated = $request->validate([
            'Provincia' => 'required|string|max:45',
        ]);

        $provincia->update($validated);

        return redirect()->route('provincia.index')->with('completado', 'Provincia actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provincia $provincia)
    {
        $provincia->delete();

        return redirect()->route('provincia.index')->with('completado', 'Provincia eliminada exitosamente.');
    }
}
