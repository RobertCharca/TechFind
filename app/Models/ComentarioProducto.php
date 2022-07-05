<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioProducto extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'producto_id',
        'valoracion',
        'texto_comentario',
        'imagen',
        'subtema'
    ];
    public function productos(){
        return $this->belongsTo(Producto::class,'producto_id','_id');
    }
    public function usuarios(){
        return $this->belongsTo(Usuario::class,'usuario_id','_id');
    }

}
