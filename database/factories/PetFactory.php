<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'especie' => fake()->randomElement(['cachorro', 'gato', 'outros']),
            'sexo' => fake()->randomElement(['M', 'F']),
            'idade'   => fake()->numberBetween(1, 15),
            'peso'    => fake()->randomFloat(2, 1, 40),
            
            'tutor_id' => Tutor::factory(),
        ];
    }
}