<?php

namespace App\Models;

use App\Observers\AgendamentoObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;

class Agendamento extends Model 
{
    use HasFactory, SoftDeletes;
    protected $table = 'agendamento';
    protected $fillable = [
        'pet_id',
        'data_horario',
        'valor',
        'servico',
        'status',
        'observacoes',

    ];

    //Relacionamento: 1:1 com Pet
    public function pet(){
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
