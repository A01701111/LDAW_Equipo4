<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;

class CreateTitle{

    public static function register($name, $link){

        $token = session('token');

        $response = Http::withToken($token)->post('http://127.0.0.1:8080/api/add-title',[
            'name' => $name,
            'link' => $link,
        ]);

        return ($response->status() == 200);
    }

}