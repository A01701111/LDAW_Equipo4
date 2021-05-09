<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;

class CreateUser{

    public static function register($email, $password, $username, $name){


        $response = Http::post('http://127.0.0.1:8080/api/newuser',[
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'name' => $name,
        ]);

        return ($response->status() == 200);
    }

}