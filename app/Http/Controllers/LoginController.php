<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    //
    public function login (Request $request) {
        $usuario = Usuario::where('usuario', $request->usuario)
            ->where('password', $request->password)->first();
        if ($usuario){
            return response([
                'mensaje'=>'Usuario validado correctamente',
                'usuario'=>$usuario
            ]);
        }
        else{
            return response([
                'mensaje'=>'Usuario o clave incorrectos'
            ]);
        }
    }
}
