<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sign-up',[RegisterController::class,'index'])->middleware('guest')->name('register');

Route::post('/createuser',[RegisterController::class,'create'])->middleware('guest');

Route::get('/login',[RegisterController::class,'login_view'])->middleware('guest');

Route::get('/',[TitleController::class,'landing']);

Route::get('/dashboard',[TitleController::class,'dashboard'])->middleware('auth')->middleware('user');

Route::get('/admin',[TitleController::class,'portal'])->middleware('auth')->middleware('admin');

Route::get('/admin-add',function () {

    return view('admin.agregar');

})->middleware('auth')->middleware('admin');

Route::post('/agregar-titulo',[TitleController::class,'agregar'])->middleware('auth')->middleware('admin');


Route::post('/iniciar',[AuthController::class,'login']);

Route::get('/cerrar',[AuthController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/game-info/{id}/{title}',[GameController::class,'index']);

Route::get('/videogames/{id}/{title}',[GameController::class,'videogames'])->middleware('auth');

Route::get('/home',function () {

    return view('landing');

})->middleware('guest');

Route::get('/buscar',[TitleController::class,'find'])->middleware('auth');

Route::get('/eliminar/{id}',[TitleController::class,'delete'])->middleware('auth')->middleware('admin');

Route::post('/comentar/{id}',[GameController::class,'comment'])->middleware('auth')->middleware('user');



/*
Notas de emilio:
el archivo de register controller tiene la ruta en caso de exit
puse que dashboard sea la principal y modifique el middlware de guest ese ya checa si existe un token
cuando se hace login te manda dashboard eso se cambia en el controlador de autenticacion
tambien cuando se usa el autenticador de guest y se falla te manda a dashboard tengo que cambiar eso
para que te mande a la landing page
*/