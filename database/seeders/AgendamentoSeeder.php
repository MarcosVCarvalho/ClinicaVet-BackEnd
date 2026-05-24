<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use App\Models\Pet;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = Pet::all();
        if ($pets->isEmpty()) {
            $this->command->info('Nenhum pet encontrado.');
            return;
        }

        foreach ($pets as $pet) {
            // Cria entre 1 e 3 agendamentos falsos para esse pet específico
            Agendamento::factory(rand(1, 3))->create([
                'pet_id' => $pet->id
            ]);
        }

    }
}
