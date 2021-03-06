<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MallaCurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'pnf',
        'nucleo',
        'modalidad',
        'periodos',
        'trayectos'
    ];

    public function pnf()
    {
        return $this->belongsTo(Pnf::class, 'pnf', 'id');
    }

    public function nucleo()
    {
        return $this->belongsTo(Nucleo::class, 'nucleo', 'id');
    }
}
