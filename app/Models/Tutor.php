<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tutores';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
    ];


    //Relacionamento: 1:N com Pet
    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
