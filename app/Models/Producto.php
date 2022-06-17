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
        'fecha_creacion',
        'negocio_id',
    ];
    public function negocios(){
        return $this->belongsTo(Negocio::class,'negocio_id','_id');
    }
}
