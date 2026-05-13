<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;

class Agendamento extends Model 
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_pet',
        'data_horario',
        'valor',
        'servico',
        'status',
        'observacoes',

    ];

    //Relacionamento: 1:1 com Pet
    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}
