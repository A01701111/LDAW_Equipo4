<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;


class Advice{

    public static function index(){

        $response = Http::get('https://api.adviceslip.com/advice');

        return ($response->status() == 200) ? $response->json() : "";
    }
}