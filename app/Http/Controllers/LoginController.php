<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    //
    public function login (Request $request) {
        $usuario = Usuario::where('email', $request->email)
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

    public function registro(Request $request){
        $new_usuario = new Usuario();

        $new_usuario->nombre = $request->input('nombre');
        $new_usuario->apellidos = $request->input('apellidos');
        $new_usuario->username = $request->input('username');
        $new_usuario->email = $request->input('email');
        $new_usuario->password = $request->input('password');
        $new_usuario->pais = $request->input('pais');
        $new_usuario->ciudad = $request->input('ciudad');

        $new_usuario->save();
        return '{"msg":"usuario registrado", "result":'.$new_usuario.'}';
    }

}
