<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AutorizacionPerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = $request->route('user');

        if (Auth::check() && (Auth::id() == $user->id) || $user->fk_rol!=1) {
            return $next($request);
        }

        return redirect()->route('index')->with('error', 'No tienes permiso para acceder a esta página.');

    }
}
