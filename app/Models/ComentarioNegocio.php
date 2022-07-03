<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ComentarioNegocio extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'valoracion',
        'texto_comentario',
        'imagen',
    ];
    public function negocios(){
        return $this->hasOne(Negocio::class,'negocio_id','_id');
    }
}
