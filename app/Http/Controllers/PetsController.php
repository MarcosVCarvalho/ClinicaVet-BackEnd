<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets', [
            'pets' => $pets,
        ]);
    }
}
