<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;


class Producto extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'negocio_id',
    ];
}
