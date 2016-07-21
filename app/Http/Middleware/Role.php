<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {   
        if (Auth::user()->role == $role)
        {
            return $next($request);
        }
        else
        {
            echo 'Acceso denegado, no tienes suficientes permisos';
        }
        
    }
}
