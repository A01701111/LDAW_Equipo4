<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GamesController extends Controller{
    public function index(Request $request){

        $file = public_path().'/json/team.json';

        if ($fileContents = file_get_contents($file)){
            $team = json_decode($fileContents,true);
        }
        $name="emilio";
        return $team[$name];
    } 
}