<?php

namespace App\Http\Controllers;


use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Datousuario;
use App\Models\Provincia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provincias = Provincia::all();
        return view('users.create', compact('provincias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            // Tabla users
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:2',



            // Tabla datosusuario
            'apellido' => 'required|string|max:45',
            'dni' => 'required|integer|unique:datousuarios,dni',
            'localidad' => 'required|string|max:45',
            'calle' => 'required|string|max:45',
            'altura' => 'required|string|max:45',
            'piso' => 'nullable|integer',
            'fk_provincia' => 'required|integer|exists:provincias,id',
        ]);

        try {
            $datosUsuario = Datousuario::create([
                'apellido' => $validation['apellido'],
                'dni' => $validation['dni'],
                'localidad' => $validation['localidad'],
                'calle' => $validation['calle'],
                'altura' => $validation['altura'],
                'piso' => $validation['piso'],
                'fk_provincia' => $validation['fk_provincia'],
            ]);

            $user = User::create([
                'name' => $validation['name'],
                'email' => $validation['email'],
                'password' => bcrypt($validation['password']),
                'fk_datos_usuario' => $datosUsuario->id,
            ]);

            return redirect()->route('users.index')->with('mensaje', 'Usuario creado');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors(['error' => 'error de bdd: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Rol::all();
        return view('users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validacion = $request->validate([

            'apellido' => ['required', 'string', 'max:45', 'regex:/^[a-zA-Z\s]*$/'],
            'dni' => ['required', 'integer', 'unique:datousuarios,dni,' . $user->datosUsuario->id],
            'localidad' => ['required', 'string', 'max:45'],
            'calle' => ['required', 'string', 'max:45'],
            'altura' => ['required', 'string', 'max:45'],
            'piso' => ['nullable', 'integer'],
            'fk_provincia' => ['required', 'integer', 'exists:provincias,id'],
        ]);

            return redirect()->route('users.index')->with('mensaje', 'Usuario actualizado');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->Activo == true){



            $user->update(['Activo' => false]);

            return redirect()->route('users.index',compact('user'))->with('mensaje','Se le ha quitado accesos al usuario');

        } else {

           $user->update(['Activo' => true]);

            return redirect()->route('users.index',compact('user'))->with('mensaje','Se le ha quitado la sancion al usuario');

        }
    }
}

