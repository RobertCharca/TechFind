<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class detalleNegocio extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        'telefono',
        'redes_sociales',
    ];
}
