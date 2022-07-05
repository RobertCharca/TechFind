<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Exports\UsuarioExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Models\ComentarioNegocio;
use App\Models\ComentarioProducto;

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
    public function comments_business($id){
        $comentarios = ComentarioNegocio::with('usuario','negocio')->where('usuario_id',$id)->get();
        return $comentarios;
    }
    public function comments_products($id){
        $comentarios = ComentarioProducto::with('usuario','producto')->where('usuario_id',$id)->get();
        return $comentarios;
    }
    public function getonebsn($id){
        $usuarios = Usuario::where('_id',$id)->get();
        return $usuarios;
    }
    public function editar(Request $request,$id){

        $usuario =Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->username = $request->input('username');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->pais = $request->input('pais');
        $usuario->ciudad = $request->input('ciudad');
        $usuario->imagen = $request->input('imagen');
        $file_name = time().'_'.$request->imagen->getClientOriginalName();
        $file_path = $request->file('imagen')->storeAs('uploads', $file_name,'public');
        $usuario->imagen = "http://localhost:8000/storage/uploads/".$file_name;
        $usuario->save();
        return '{"msg":"actualizado"}';
    }
    public function allUsers(){
        $usuarios = Usuario::all();
        return $usuarios;
    }

}
