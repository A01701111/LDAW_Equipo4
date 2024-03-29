<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Title::get();
    }

    public function addTitle(Request $request){

        DB::table('titles')->insert([

            'Nombre'=> $request->name,
            'Link'=> $request->link,
            
        ]);

    } 

    public function search($name){
   
        $games =  Title::where('Nombre','LIKE','%'.$name.'%')->get();

        return $games;

    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Title::where('id', $id)->delete();
    
    }
}
