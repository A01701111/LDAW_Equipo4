<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;

class Authentication {

    public static function getToken($email, $password, $device){

        $response = Http::post('http://127.0.0.1:8080/api/sanctum/token',[
            'email' => $email,
            'password' => $password,
            'device_name' => $device
        ]);
        
        return ($response->status() == 200) ? $response->json() : "";
    }

}