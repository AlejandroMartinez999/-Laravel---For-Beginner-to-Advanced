<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $allowedCountries
        $country= [
            'us',
            'uk',
            'in',
            'mx'
        ];

        // Verifica si el país está en la lista
        // if (!in_array(strtolower($request->input('country')), $allowedCountries)) {
        //     return redirect()->route('unavailable'); // Redirect if the country is not allowed
        // }

        if(in_array($request->country,$country)&& request()->is('unavailable')){
            return redirect()->route('unavailable');
        }
        return $next($request); // Pass the request to the next middleware

    }
}
