<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioNegocio extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'negocio_id',
        'usuario_id',
        'valoracion',
        'texto_comentario',
        'imagen',
    ];
    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuario_id','_id');
    }
    public function negocio(){
        return $this->belongsTo(Negocio::class,'negocio_id','_id');
    }
}
