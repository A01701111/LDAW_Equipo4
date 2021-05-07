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
Route::get('/sign-up',[RegisterController::class,'index'])->name('register');
Route::get('/login',[RegisterController::class,'login_view']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/team',[RegisterController::class,'success'])->middleware('auth');

Route::post('/iniciar',[AuthController::class,'login']);

Route::get('/cerrar',[AuthController::class,'logout'])->name('logout')->middleware('auth');

