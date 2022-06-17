<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Negocio extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        'nombre_negocio',
        'descripcion',
        'hora_atencion',
        'pais',
        'ciudad',
        'direccion',
        'imagen_portada',
        'imagen_negocio',
        'correo_electronico',
        'fecha_creacion',
        'fecha_actualizacion',
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class,'categoria_id','_id');
    }

    public function usuarios(){
        return $this->belongsTo(Usuario::class,'usuario_id','_id');
    }
    public function productos(){
        return $this->hasMany(Producto::class,'producto_id','_id');
    }
}
