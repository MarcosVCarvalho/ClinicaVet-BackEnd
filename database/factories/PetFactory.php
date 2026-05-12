<?php

namespace Database\Factories;

use App\Models\Pet; // Verifique se seu model é Pet
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory // O nome da classe deve ser igual ao do arquivo
{
    protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'data_nascimento' => fake()->date(),
            'user_id' => \App\Models\User::all()->random()->id, 
            'especie' => fake()->randomElement(['Cachorro', 'Gato', 'Hamster', 'Cavalos']),
        ];
    }
}