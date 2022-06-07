<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioProducto extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'valoracion',
        'texto_comentario',
        'imagen',
    ];
}
