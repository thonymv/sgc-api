<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'correo',
        'nombre2',
        'apellido',
        'apellido2',
        'ci',
        'estatus',
        'pnf',
        'nucleo',
        'tlf_movil',
        'tlf_local',
        'nacimiento',
        'usuario',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
