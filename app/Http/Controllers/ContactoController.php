<?php

namespace App\Http\Controllers;
use App\Models\Contacto;


use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $contactos = Contacto::all();



        return view('contactos.index',compact('contactos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('contactos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $validacion = $request->validate([
            'titulo' => ['required', 'string', 'max:45' ,'regex:/^[a-zA-Z\s]*$/'],
            'asunto' => ['required', 'string'],
            'consulta' => ['required','string', 'max:200'],
            'fk_user' => ['required'],
        ]);

        Contacto::create($validacion);

        return redirect()->route('contactos.create')->with('mensaje', 'Consulta enviada.');



    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {

        return view('contactos.mostrar', compact('contacto'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        return view('contactos.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {

        $validacion = $request->validate([

            'respuesta' => ['required','string', 'max:200']

        ]);


        $contacto->update($validacion);

        if ($contacto->estado == false){

            $contacto->update(['estado' => true]);

        }


        return redirect()->route('contactos.index')->with('mensaje','Se le ha respondido al usuario');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {

        if ($contacto->estado == false){

            $contacto->update(['estado' => true]);

        } else {

            $contacto->update(['estado' => false]);

        }

        return redirect()->route('contactos.index')->with('mensaje','Se ha cambiado el estado');

    }
}
