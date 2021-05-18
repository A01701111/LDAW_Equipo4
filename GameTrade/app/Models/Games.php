<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;


class Games{

    public static function index($id){

        $token = session('token'); 

        $response = Http::withToken($token)->get('http://127.0.0.1:8080/api/videogames/'.$id);

        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function getGame($id){

        $token = session('token'); 

        $response = Http::withToken($token)->get('http://127.0.0.1:8080/api/game/'.$id);

        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function getUname($id){

        $token = session('token'); 

        $response = Http::withToken($token)->get('http://127.0.0.1:8080/api/getuser/'.$id);


        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function getComments($id){

        $token = session('token'); 

        $response = Http::withToken($token)->get('http://127.0.0.1:8080/api/comments/'.$id);

        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function addComment($content, $game){

        $token = session('token'); 

        $email = session('email'); 

        $response = Http::withToken($token)->post('http://127.0.0.1:8080/api/comment',[
            'content' => $content,
            'email' => $email,
            'game' => $game,
        ]);

        return ($response->status() == 200);

    }
}