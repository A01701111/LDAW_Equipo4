<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewUser extends Controller
{
    public function index(Request $request){
        // dd($request->all());

        User::create([
        
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'ID_Rol'=> 1,
            'Username'=>$request->username,
            
        ]);

    } 

    public function find($id){
        // dd($request->all());

        $user = User::where('id', $id)->get('Username')->first();
        
        // $response = $user->Username;

        return $user ;

    } 
    
}
