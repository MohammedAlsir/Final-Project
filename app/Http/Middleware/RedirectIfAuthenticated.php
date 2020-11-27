<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check())
        {
            //return redirect('/home');
            if(Auth::user()->level == 1)
            {
                return redirect('admin');
            } 
            elseif(Auth::user()->level == 2)
            {
                return redirect('user');    
            }
            else
                abort(404);

        }

        return $next($request);
    }
}
