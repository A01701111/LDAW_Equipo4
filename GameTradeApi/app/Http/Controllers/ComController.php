<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ComController extends Controller{

    public function index($name){

        $comments =  Review::where('ID_Videojuego',$name)->orderBy('id', 'DESC')->get();

        return $comments;
    } 

    public function addComment(Request $request){

        $user = User::where('email', $request->email)->get('id')->first();
        

        Review::create([
        
            'Contenido'=>$request->content,
            'ID_User'=> $user['id'],
            'ID_Videojuego'=> $request->game,
            
        ]);
    } 
}
