<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next){


        if ($request->session()->has('token')) {

            return redirect('/dashboard');

        }
        
        return $next($request);
    }
}
