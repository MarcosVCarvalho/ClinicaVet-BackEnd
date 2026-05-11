<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('pets', function (Blueprint $table) {
        $table->id();
        // Seguindo o padrão Laravel, usamos user_id
        $table->foreignUlid('user_id')
              ->constrained('users') // Garanta que o nome da tabela de usuários seja 'users'
              ->onDelete('cascade');
              
        $table->string('nome');
        $table->string('especie'); // Ex: Cachorro, Gato
        $table->string('raca')->nullable(); // Aceita vazio para vira-latas
        $table->date('data_nascimento')->nullable();
        $table->decimal('peso', 5, 2)->nullable(); // Suporta até 999.99 kg
        $table->enum('sexo', ['M', 'F', 'Indeterminado']);
        
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
