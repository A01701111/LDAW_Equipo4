<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;


class GetTitles{

    public static function index(){

        $response = Http::get('http://127.0.0.1:8080/api/get-titles');

        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function findTitle($name){

        $response = Http::get('http://127.0.0.1:8080/api/find-title/'.$name);

        return ($response->status() == 200) ? $response->json() : "";
    }

    public static function removeTitle($id){

        $token = session('token'); 

        $response =  Http::withToken($token)->post('http://127.0.0.1:8080/api/rmtitle/'.$id);

        return ($response->status() == 200);
    }
}