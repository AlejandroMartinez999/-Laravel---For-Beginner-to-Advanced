<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Excluir la ruta 'unavailable' del middleware
        if ($request->route()->getName() === 'unavailable') {
            return $next($request);
        }

        // Aplicar la validación del middleware
        if ($request->has('auth') && $request->auth == 1) {
            return $next($request);
        }

        // Redirección si no se cumple la validación
        return redirect()->route('unavailable');
    }
}
