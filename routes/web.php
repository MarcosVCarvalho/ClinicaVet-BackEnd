<?php

use App\Http\Controllers\TutorController;
use App\Http\Controllers\AgendamentoController;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;


Route::get('/', function ($id = "oi") {
    return view('welcome');
})->name( 'home' );


Route::get('/pets/',[PetsController::class, 'index']);
Route::get('/tutores/',[TutorController::class, 'index']);
Route::get('/agendamentos/',[AgendamentoController::class, 'index']);