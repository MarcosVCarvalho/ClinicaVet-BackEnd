<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function ($id = "oi") {
    return view('welcome');
})->name( 'home' );

Route::get('/user/{user}',[UserController::class, 'show']);
Route::get('/users/',[UserController::class, 'index']);