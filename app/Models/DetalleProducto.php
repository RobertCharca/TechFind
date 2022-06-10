<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class DetalleProducto extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'categoria_id',
        'imagenes',
    ];
}
