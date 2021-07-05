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

Route::get('/register/{name}', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/whereabouts/{user}', [\App\Http\Controllers\WhereaboutsController::class, 'index']);
Route::get('/whereabouts/{user}/{uuid}', [\App\Http\Controllers\WhereaboutsController::class, 'show']);
