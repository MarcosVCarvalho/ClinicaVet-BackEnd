<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('telefone');
            
            //estrutura provisoria de Endereço
            $table->string('endereco');

            $table->softDeletes(); // Para não apagar os dados permanentemente
            $table->timestamps();  // Cria created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tutores');
    }
};