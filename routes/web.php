<?php

use App\Http\Controllers\TutorController;
use App\Http\Controllers\AgendamentoController;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;



Route::resource('pets', PetsController::class);
Route::resource('/tutores',TutorController::class);
Route::resource('/agendamentos', AgendamentoController::class,);