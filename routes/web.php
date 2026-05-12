<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetsController;


Route::get('/', function ($id = "oi") {
    return view('welcome');
})->name( 'home' );

Route::get('/user/{user}',[UserController::class, 'show']);
Route::get('/users/',[UserController::class, 'index']);
Route::get('/pets/',[PetsController::class, 'index']);