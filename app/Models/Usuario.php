<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'username',
        'email',
        'password',
        'pais',
        'ciudad',
    ];
    public function negocios(){
        return $this->hasMany(Negocio::class,'usuario_id','_id');
    }
}
