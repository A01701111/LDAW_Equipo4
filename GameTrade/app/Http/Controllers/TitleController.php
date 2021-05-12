<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;
use App\Models\GetTitles;

class TitleController extends Controller {

    public function dashboard(Request $request)
    {
        $titulos = GetTitles::index();

        return view("dashboard", ["titulos" => $titulos]);
    }

    public function landing(Request $request)
    {
        $titulos = GetTitles::index();

        return view("landing", ["titulos" => $titulos]);
    }


}