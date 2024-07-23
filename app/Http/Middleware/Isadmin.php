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
            return redirect('index');
        }

        // Verifica si el usuario es administrador o usuario
        $isAdmin = $user->fk_rol == 1;
        $isUser = $user->fk_rol == 2;


        if ($role === 'administrador' && !$isAdmin) {
            return redirect('index');
        }


        if ($role === 'user' && !$isUser) {
            return redirect('users.index');
        }

        return $next($request);
    }
}
