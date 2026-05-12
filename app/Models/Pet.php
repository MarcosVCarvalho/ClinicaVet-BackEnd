<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Importe a Trait
use Illuminate\Database\Eloquent\Model;

class Pet extends Model // Certifique-se que o nome da classe está correto
{
    use HasFactory; // 2. Use a Trait dentro da classe

    // Seus outros códigos (fillable, relacionamentos, etc)
    protected $fillable = ['nome', 'data_nascimento', 'user_id'];
}