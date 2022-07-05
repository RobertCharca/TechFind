<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioNegocio extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'negocio_id',
        'subtema',
        'valoracion',
        'texto_comentario',
        'imagen',
    ];
    public function negocios(){
        return $this->hasOne(Negocio::class,'negocio_id','_id');
    }
    public function usuarios(){
        return $this->belongsTo(Usuario::class,'usuario_id','_id');
    }
}
