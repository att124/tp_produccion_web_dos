<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        $user = Auth::user();

        if (!$user) {
            return redirect('/login');
        }

        // Verifica si el usuario es administrador o usuario
        $isAdmin = $user->fk_rol == 1;
        $isUser = $user->fk_rol == 2;

        // Si se espera un administrador y el usuario no es uno, redirige
        if ($role === 'administrador' && !$isAdmin) {
            return redirect('index'); // Redirige a una página de inicio si el usuario no es admin
        }

        // Si se espera un usuario y el usuario es un administrador, redirige
        if ($role === 'user' && !$isUser) {
            return redirect('users.index'); // Redirige a una página de administración si el usuario es admin
        }

        return $next($request);
    }
}
