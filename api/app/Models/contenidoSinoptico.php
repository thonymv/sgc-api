<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenidoSinoptico extends Model
{
    use HasFactory;

    protected $table = 'contenido_sinopticos';

    protected $fillable = [
        'malla',
        'unidad_curricular',
        'trayecto',
        'creditos',
        'densidad',
        'hora_academica',
        'htea',
        'htei',
        'tipo',
        'thte',
        'saberes',
        'estrategias',
        'recursos',
        'evaluacion',
        'referencias',
    ];
    public function malla()
    {
        return $this->belongsTo(MallaCurricular::class, 'malla', 'id');
    }
}
