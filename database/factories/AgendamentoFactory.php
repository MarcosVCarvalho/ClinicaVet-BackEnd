<?php

namespace Database\Factories;

use App\Models\Agendamento;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pet;
use App\Models\Tutor;


/**
 * @extends Factory<Agendamento>
 */
class AgendamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => Pet::factory(), 
            'data_horario' => fake()->randomElement(['08:00', '09:00', '10:30', '13:30', '14:00', '15:30', '16:00']),
            'servico' => fake()->randomElement(['banho', 'tosa', 'banho e tosa']),
            'status' => fake()->randomElement(['agendado', 'em andamento', 'concluido']),
            'valor' => fake()->randomElement([40.00, 50.00, 65.00, 80.00]),
            'observacoes' => fake()->optional(0.5)->randomElement([
                'Pet bravo, cuidado ao secar', 
                'Alergia a shampoo de coco', 
                'Dono pediu para caprichar no perfume',
                'Tosa higiênica incluída'
            ])
        ];
    }
}
