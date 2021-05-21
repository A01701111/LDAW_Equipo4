<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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

    public function addGame(Request $request){

        $user = User::where('email', $request->email)->get('id')->first();
        
        Videogame::create([
        
            'ID_Title'=>$request->title,
            'ID_User'=>$user['id'],
            'Descripcion'=>$request->desc,
            'Consola'=>$request->consola,
            'Estado_Fisico'=>$request->estado,
            
        ]);

    } 
    
}