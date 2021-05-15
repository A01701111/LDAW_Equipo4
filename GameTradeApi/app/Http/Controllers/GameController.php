<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index($id){
   
        $games =  Videogame::where('ID_Title', $id)->get();

        return $games;

    } 

    public function game($id){
   
        $games =  Videogame::where('id', $id)->get()->first();

        return $games;

    }  
    
}