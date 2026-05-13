<?php

namespace Database\Seeders;

use App\Models\Tutor;
use App\Models\Pet;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tutor::factory(5)->HasPets(1)->create();
    }
}
