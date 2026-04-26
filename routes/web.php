<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('usuarios')->group(function (){
    Route::get('/edit',function() {
        return 'edit';
    });
    Route::get('/create',function() {
        return 'create';
    });
});

Route::get('/{id?}', function ($id = "oi") {
    return $id;
});

Route::get('/user/{user}', function (User $user) {
    return dd($user);
});
