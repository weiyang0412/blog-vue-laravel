<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('blogs', BlogController::class);
Route::apiResource('register', RegisterController::class);
Route::apiResource('login', LoginController::class);

// Route::controller(AuthController::class)->group(function(){
//     Route::post('login', 'login');
//     Route::post('register', 'register');
// });