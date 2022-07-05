<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioProducto extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'usuario_id',
        'valoracion',
        'texto_comentario',
        'imagen',
    ];
    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuario_id','_id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class,'producto_id','_id');
    }
}
