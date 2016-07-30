<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        if (session('uid')) {
            return $next($request);
        }

        session(['redirectUrl'=> isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null]);  
        return redirect('/admin');
    }

    
}


