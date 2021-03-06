<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Donatur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'donatur') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'penerima') {
            return redirect('/penerima');
        }
        else {
            return redirect('/login');
        }
    }
}
