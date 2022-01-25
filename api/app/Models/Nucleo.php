<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    use HasFactory;
    protected $fillable = [
        'crea',
        'tlf',
        'dir',
        'nombre'
    ];

    public function mallas()
    {
        return $this->hasMany(MallaCurricular::class, 'nucleo', 'id');
    }

    public function usuarios()
    {
        return $this->hasMany(User::class, 'nucleo', 'id');
    }
}
