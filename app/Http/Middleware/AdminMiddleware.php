<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
    
        if (!Auth::user())
        {
            //this is not admin or user =>is guest
            return redirect()->guest('login')->with(['message' => 'You should login.']);
        } 
        elseif (Auth::user()->level == 1)
        {
            return $next($request);
             //here put the Home Page for admin 
            return redirect('admin.home');
        } else
        {
            //for the error
            abort(404);
        }
        
        
        
          
    }

    
   

}
