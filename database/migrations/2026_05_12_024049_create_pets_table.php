<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('especie',['cachorro','gato','outros']);
            $table->string('raca')->nullable();
            $table->integer('idade')->nullable();
            $table->enum('sexo', ['M', 'F']); 
            $table->decimal('peso', 5, 2)->nullable();
            
            $table->foreignId('tutor_id')->constrained('tutores')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};