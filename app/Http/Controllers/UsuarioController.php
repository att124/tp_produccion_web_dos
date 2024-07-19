<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Datousuario;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $usuarios =  Usuario::all();

        return view('usuarios.index',compact('usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $provincias = Provincia::all();

        return view('usuarios.create',compact('provincias'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validacion = $request->validate([

            //Tabla usuarios

            'usuario' => 'required|string|max:45|unique:usuarios,usuario',
            'contrasena' => 'required|string|max:45',

            //Tabla datosusuario


            'nombre' => 'required|string|max:45',
            'apellido' => 'required|string|max:45',
            'mail' => 'required|string|email|max:45|unique:datousuarios,mail',
            'dni' => 'required|integer|unique:datousuarios,dni',
            'localidad' => 'required|string|max:45',
            'calle' => 'required|string|max:45',
            'altura' => 'required|string|max:45',
            'piso' => 'nullable|integer',
            'fk_provincia' => 'required|integer|exists:provincias,id',
        ]);



        try {
        $datosUsuario = Datousuario::create([
            'nombre' => $validacion['nombre'],
            'apellido' => $validacion['apellido'],
            'mail' => $validacion['mail'],
            'dni' => $validacion['dni'],
            'localidad' => $validacion['localidad'],
            'calle' => $validacion['calle'],
            'altura' => $validacion['altura'],
            'piso' => $validacion['piso'],
            'fk_provincia' => $validacion['fk_provincia'],
        ]);


        $usuario = Usuario::create([
            'Usuario' => $validacion['usuario'],
            'Contraseña' => bcrypt($validacion['contrasena']),
            'fk_datos_usuario' => $datosUsuario->id,
        ]);


     return redirect()->route('usuarios.index')->with('message', 'Usuario creado con éxito');

    } catch (\Illuminate\Database\QueryException $e) {

        return redirect()->back()->withErrors(['error' => 'Error en la base de datos: ' . $e->getMessage()]);

    } catch (\Exception $e) {

        return redirect()->back()->withErrors(['error' => 'Error inesperado: ' . $e->getMessage()]);
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
