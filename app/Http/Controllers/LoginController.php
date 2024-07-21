<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'contraseña');



        if (Auth::attempt($credentials)) {



            return redirect()->intended('index');
        }

        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }
}
