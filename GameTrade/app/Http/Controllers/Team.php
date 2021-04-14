<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suport\Facedes\Http;

class Team extends Controller
{
    function emilio(){

        return Http::get('http://127.0.0.1:8080/api/team/emilio')->body();

    }
}
