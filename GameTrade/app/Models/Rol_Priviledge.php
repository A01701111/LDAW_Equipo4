<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;

class Rol_Priviledge
{
    public static function getRol($email){

        $token = session('token');

        $response = Http::withToken($token)->post('http://127.0.0.1:8080/api/rol',[
            'email' => $email,
        ]);

        return ($response->status() == 200) ? $response->json() : "";
    }
}
