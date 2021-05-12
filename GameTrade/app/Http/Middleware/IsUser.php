<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser{

    public function handle(Request $request, Closure $next){

        if ($request->session()->get('rol') != 1) {

            return redirect('/');

        } 
        
        return $next($request);
    }

}
