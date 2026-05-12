<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    //Relacionamento: 1:1
    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }

    //Relacionamento: 1:N
    //public function consultas()
    //{
    //    return $this->hasMany(Consulta::class);
    //}

}
