<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
Route::resource('pets', PetsController::class);

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::with('tutor')->get();
        return view('pets.index', compact('pets'));
    }
}
