<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next){


        if ($request->session()->has('token')) {

            if ($request->session()->get('rol') == 1) {

                return redirect('/dashboard');

            }else{

                return redirect('/admin');
            }

        }
        
        return $next($request);
    }
}
