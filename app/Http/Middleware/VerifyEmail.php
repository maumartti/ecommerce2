<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyEmail
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            Auth::logout(); // Cerrar la sesión si el correo no está verificado
            return redirect('/email/verify'); // Redirige a la página de verificación
        }

        return $next($request);
    }
}
