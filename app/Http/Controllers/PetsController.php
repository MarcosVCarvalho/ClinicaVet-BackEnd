<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Tutor;
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

    public function create(){
        $tutores = Tutor::orderBy('nome')->get();
        return view('pets.create', compact('tutores'));
    }

    public function show(Pet $pet){
        return view('pets.show', compact('pet'));
    }

    public function store(Request $request)
{
    $dados = $request->validate([
        'nome' => 'required|max:255',
        'especie' => 'required|max:255',
        'raca' => 'nullable|max:255',
        'idade' => 'nullable|integer',
        'sexo' => 'nullable|max:20',
        'peso' => 'nullable|numeric',
        'tutor_id' => 'required|exists:tutores,id'
    ]);

    Pet::create($dados);

    return redirect()
        ->route('pets.index')
        ->with('success', 'Pet cadastrado com sucesso!');
}
}
