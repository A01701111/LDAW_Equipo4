<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TeamController extends Controller{

    public function index(Request $request, $name){

        $file = public_path().'/json/team.json';

        if ($fileContents = file_get_contents($file)){
            $team = json_decode($fileContents,true);
        }
        return $team[$name];
    } 
}