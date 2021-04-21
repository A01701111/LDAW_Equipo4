<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('team/{name}', function ($name) {

    $file = public_path().'/json/team.json';

    if ($fileContents = file_get_contents($file)){
        $team = json_decode($fileContents,true);
    }

    return $team[$name];
});
