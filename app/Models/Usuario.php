<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'nombre_usuarios',
        'email',
        'password',
        'pais',
        'ciudad',
    ];
}
