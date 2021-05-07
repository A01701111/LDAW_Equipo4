<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Authentication;


class AuthController extends Controller 
{
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        $device = $request->header('User-Agent', 'default');

        if ($token = Authentication::getToken($email, $password, $device)) {
            $request->session()->regenerate();
            $request->session()->put('token', $token['token']);
            return redirect('/team');
        }

        return redirect('/login')->with('error', 'Email o contraseña incorrectos');
    }

    public function logout(Request $request){

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    
    }
}
