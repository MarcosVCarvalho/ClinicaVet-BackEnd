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
        Schema::create('agendamento', function (Blueprint $table) {
            $table->id();
            //relacionamento com o pet
            $table->foreignId('pet_id')->constrained('pets')->onDelete('cascade');
            $table->dateTime('data_horario');
            $table->decimal('valor',8,2);
            $table->enum('servico', ['Banho', 'Tosa', 'Banho e Tosa', 'Outros']);
            $table->enum('status', ['agendado', 'em andamento', 'concluido']);
            $table->text('observacoes')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamento');
    }
};
