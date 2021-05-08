<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
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
Route::get('/sign-up',[RegisterController::class,'index'])->name('register')->middleware('guest');

Route::get('/login',[RegisterController::class,'login_view'])->middleware('guest');

Route::get('/',function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/success',[RegisterController::class,'success'])->middleware('auth');

Route::post('/iniciar',[AuthController::class,'login']);

Route::get('/cerrar',[AuthController::class,'logout'])->name('logout')->middleware('auth');

/*
Notas de emilio:
el archivo de register controller tiene la ruta en caso de exit
puse que dashboard sea la principal y modifique el middlware de guest ese ya checa si existe un token
cuando se hace login te manda dashboard eso se cambia en el controlador de autenticacion
tambien cuando se usa el autenticador de guest y se falla te manda a dashboard tengo que cambiar eso
para que te mande a la landing page
*/