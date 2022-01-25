<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pnf extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre'
    ];

    public function mallas()
    {
        return $this->hasMany(MallaCurricular::class, 'pnf', 'id');
    }

    public function usuarios()
    {
        return $this->hasMany(User::class, 'pnf', 'id');
    }
}
