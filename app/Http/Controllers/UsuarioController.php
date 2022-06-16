<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Exports\UsuarioExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class UsuarioController extends Controller
{
    //
    public function index(){
        $usuarios = Usuario::All();
        return view('usuarios.usuarioTable')->with('usuarios', $usuarios);
    }

    public function agregarUsuario(){
        return view('usuarios.agregarUsuario');
    }

    public function insertarUsuario(Request $request){
        //dd($request);
        $usuario = new Usuario();
        $usuario->nombre = $request->get('nombre');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->username = $request->get('username');
        $usuario->email = $request->get('email');
        $usuario->password = $request->get('password');
        $usuario->pais = $request->get('pais');
        $usuario->ciudad = $request->get('ciudad');

        $usuario->save();
        return redirect('usuario');
    }

    public function actualizarUsuario($id){
        $usuario = Usuario::find($id);
        //dd($usuarioedit);
        return view('usuarios.actualizarUsuario')->with('usuarios', $usuario);
    }

    public function updateUsuario(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->pais = $request->pais;
        $usuario->ciudad = $request->ciudad;

        $usuario->save();
        return redirect('/usuario');
    }

    public function eliminarUsuario(Request $request ,$id){
        //echo $id;
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuario');
    }

    public function export()
    {
        return Excel::download(new UsuarioExport, 'usuarios.xlsx');
    }

    public function createPDF(){
        $usuarios = Usuario::all();
        $pdf = PDF::loadView('pdf.usuarioPdf', [
            'usuarios' => $usuarios
        ]);
        // download PDF file with download method
        return $pdf->download('usuarios.pdf');
    }

}
