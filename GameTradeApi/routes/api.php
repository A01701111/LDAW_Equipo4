<?php

use App\Http\Controllers\TitleController;
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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NewUser;
use App\Http\Controllers\RolController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ComController;

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return ["token" => $user->createToken($request->device_name)];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/games/{name}', [TeamController::class, "index"]);

Route::post('/newuser', [NewUser::class, "index"]);

Route::middleware('auth:sanctum')->get('/getuser/{id}', [NewUser::class, "find"]);

Route::get('/get-titles', [TitleController::class, "index"]);

Route::middleware('auth:sanctum')->post('/add-title', [TitleController::class, "addTitle"]);

Route::middleware('auth:sanctum')->post('/rol', [RolController::class, "index"]);

Route::middleware('auth:sanctum')->get('/videogames/{id}', [GameController::class, "index"]);

Route::middleware('auth:sanctum')->get('/game/{id}', [GameController::class, "game"]);

Route::middleware('auth:sanctum')->post('/rmtitle/{id}', [TitleController::class, "destroy"]);

Route::get('/find-title/{name}', [TitleController::class, "search"]);

Route::middleware('auth:sanctum')->get('/comments/{name}', [ComController::class, "index"]);

Route::middleware('auth:sanctum')->post('/comment', [ComController::class, "addComment"]);

Route::middleware('auth:sanctum')->post('/add-game', [GameController::class, "addGame"]);
