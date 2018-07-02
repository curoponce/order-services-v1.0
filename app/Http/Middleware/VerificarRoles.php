<?php

namespace App\Http\Middleware;

use Closure;

class VerificarRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) //$role
    {   

        //dd($role);

        /*$roles = func_get_args();

        $roles = array_slice($roles, 2);*/

        $roles = array_slice(func_get_args(), 2);

        //dd($roles);

        if (auth()->user()->hasRoles($roles))
        {
            return $next($request); 
        }
        
        
        return redirect()->route('dashboard');
    }
}
