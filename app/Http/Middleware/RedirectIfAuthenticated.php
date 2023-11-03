<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->type_id == 3) {
                // Si el usuario es del tipo 3 y está autenticado, verifica si el correo está verificado
                if (!Auth::user()->hasVerifiedEmail()) {
                    // Si el correo no está verificado, redirige a la página de verificación
                    return redirect('/emailverify');
                } else {
                    return redirect('/admin/home');
                }
            } else {
                return redirect('/admin/profile');
            }
        }

        return $next($request);
    }
}
