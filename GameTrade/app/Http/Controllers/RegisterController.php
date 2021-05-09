<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateUser;
use App\Models\Authentication;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.register');
    }
    public function login_view()
    {
        return view('auth.login');
    }
    public function success()
    {
        return view('dashboard');
    }
    public function create(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'username' => 'required',
            'name' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        $username = $request->username;
        $name = $request->name;

        if (CreateUser::register($email, $password, $username, $name)) {

            $device = $request->header('User-Agent', 'default');

            if ($token = Authentication::getToken($email, $password, $device)) {
                $request->session()->regenerate();
                $request->session()->put('token', $token['token']);
                return redirect('/success');
            }
        }

        return redirect('/sign-up')->with('error', 'Fallo signUp');
        
    }
}
