<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles')); // Falta agregar la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create'); // Un formulario para crear más roles.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
        ]);


                Rol::create($validacion);


                return redirect()->route('roles.index')->with('completado', 'Rol creado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        return view('roles.mostrar', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
         // Mostrar el formulario de edición
         return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {

        $validacion = $request->validate([
            'nombre' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
        ]);


        $rol->update($validacion); // Metodo de eloquent, no es el metodo update propio del controlador.


        return redirect()->route('roles.index')->with('completado', 'Rol actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {

         $rol->delete();


         return redirect()->route('roles.index')->with('completado', 'Rol eliminado exitosamente.');
    }
}
