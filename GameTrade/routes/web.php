<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/team', function () {
    return view('team');
});