<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Agendamento;

class Pet extends Model
{
    use HasFactory, SoftDeletes;

    protected $tabel = 'tutores';
    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'idade',
        'sexo',
        'peso',
        'tutor_id'
    ];

    //Relacionamento: 1:1 com Tutor
    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }

    //Relacionamento: 1:N com Agendamentos
    public function agendamento()
    {
        return $this->hasMany(Agendamento::class);
    }

}
