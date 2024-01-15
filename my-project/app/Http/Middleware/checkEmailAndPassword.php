<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkEmailAndPassword
{
    public function handle($request, Closure $next)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Check if both email and password are provided
        if ($email && $password) {
            return $next($request);
        } else {
            // Redirect to the error route using the route's name
            return redirect()->route('errorAcces.index'); // Si no coincide con ningún caso, redirigir a la ruta de error
        }
        return $next($request);
    }
}

