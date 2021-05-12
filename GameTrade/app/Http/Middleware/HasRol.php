<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasRol{
    public function handle(Request $request, Closure $next){

        if ($request->session()->get('rol') != 2) {

            return redirect('/');

        } 
        
        return $next($request);
    }
}
