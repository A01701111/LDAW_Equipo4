<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;
use App\Models\GetTitles;
use App\Models\Advice;
use App\Models\CreateTitle;

class TitleController extends Controller {

    public function dashboard(Request $request)
    {
        $titulos = GetTitles::index();
        
        return view("dashboard", ["titulos" => $titulos]);
    }

    public function landing(Request $request)
    {
        $titulos = GetTitles::index();

        $advice = Advice::index();

        return view("landing", ["titulos" => $titulos], ["advice" => $advice]);
    }

    public function portal(Request $request)
    {
        $titulos = GetTitles::index();

        return view("admin.portal", ["titulos" => $titulos]);
    }

    public function agregar(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'name' => 'required',
        ]);
    
        $name = $request->name;

        $link = $request->link;
    
        if(CreateTitle::register($name, $link)){
            $titulos = GetTitles::index();
            return view("admin.portal", ["titulos" => $titulos]);

        }else{

            return redirect('/admin-add')->with('error', 'Error al crear titulo');

        }

    }

    public function find(Request $request)
    {

        $titulos = GetTitles::findTitle($request->name);

        $rol = session('rol');

        if ($rol == 1) {

            return view("dashboard", ["titulos" => $titulos]);

        }else{
            
            return view("admin.portal", ["titulos" => $titulos]);
        }
        
    }

    public function delete($id)
    {

        $titulos = GetTitles::removeTitle($id);

        $titulos = GetTitles::index();
        
        return redirect('/admin');
        
    }



}