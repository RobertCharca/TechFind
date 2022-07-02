<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Negocio;
use App\Exports\NegociosExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class NegocioController extends Controller
{
    public function index()
    {
        $negocios = Negocio::with('categorias', 'usuarios')->get();
        return view('negocio.index')->with('negocios', $negocios);
    }

    public function create(){
        $categorias = Categoria::all();
        $usuarios = Usuario::all();
        return view('negocio.create')->with('categorias',$categorias)->with('usuarios',$usuarios);
    }

    public function insert(Request $request){
        $negocio= new Negocio();
        $negocio->nombre_negocio = $request->nombre_negocio;
        $negocio->descripcion = $request->descripcion;
        $negocio->hora_atencion = $request->hora_atencion;
        $negocio->direccion = $request->direccion;
        $negocio->ciudad = $request->ciudad;
        $negocio->pais = $request->pais;
        $negocio->correo_electronico = $request->correo_electronico;
        $negocio->categoria_id = $request->categoria_id;
        $negocio->usuario_id = $request->usuario_id;
        $negocio->save();
        return redirect('/negocios');
    }

    public function edit($id)
    {
        //echo $id;
        $categorias = Categoria::all();
        $usuarios = Usuario::all();
        $negocio =Negocio::find($id);
        // dd($categoria);
        return view('negocio.edit')->with('negocio', $negocio)->with('categorias',$categorias)->with('usuarios',$usuarios);
    }

    public function update(Request $request ,$id)
    {
        //echo $id;
        $negocio =Negocio::find($id);
        $negocio->nombre_negocio = $request->nombre_negocio;
        $negocio->descripcion = $request->descripcion;
        $negocio->hora_atencion = $request->hora_atencion;
        $negocio->direccion = $request->direccion;
        $negocio->ciudad = $request->ciudad;
        $negocio->pais = $request->pais;
        $negocio->correo_electronico = $request->correo_electronico;
        $negocio->categoria_id = $request->categoria_id;
        $negocio->usuario_id = $request->usuario_id;
        $negocio->save();
        return redirect('/negocios');
    }
    public function delete(Request $request ,$id)
    {
        //echo $id;
        $negocio =Negocio::find($id);
        $negocio->delete();
        return redirect('/negocios');
    }
    public function export()
    {
        return Excel::download(new NegociosExport, 'negocios.xlsx');
    }

    public function exportPDF()
    {
        $negocios = Negocio::with('categorias', 'usuarios')->get();
        $pdf = PDF::loadView('negocio.pdf',['negocios'=>$negocios]);
        return $pdf->download('negocios.pdf');
    }
    public function negvue($id){
        $negocios = Negocio::with('categorias', 'usuarios')->where('usuario_id',$id)->get();
        return $negocios;
    }
    public function negvuemain(){
        $negocios = Negocio::with('categorias', 'usuarios')->get();
        return $negocios;
    }
    public function store(Request $request){
        $negocio = new Negocio();

        $negocio->nombre_negocio = $request->input('nombre');
        $negocio->descripcion = $request->input('descripcion');
        $negocio->hora_atencion = $request->input('hora_atencion');
        $negocio->direccion = $request->input('direccion');
        $negocio->categorias_id = $request->input('categoria_id');
        $negocio->usuario_id = $request->input('usuario_id');
        $negocio->save();
        return '{"msg": "creado", "result": '.$negocio.'}';

    }
    public function destroy($_id){
        $res = Negocio::destroy($_id);
        return '{"id":"'.$_id.'","msg":"eliminado"}';
    }
    public function one($id){
        $negocios = Negocio::with('categorias', 'usuarios')->where('_id',$id)->get();
        return $negocios;
    }
    public function vueactua(Request $request)
    {
        $id = $request->input('_id');
        $negocio = Negocio::where('_id',$id)
        ->update([
            'nombre_negocio' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'hora_atencion' => $request->input('hora_atencion'),
            'direccion' => $request->input('direccion'),
            'categoria_id' => $request->input('categoria_id'),
            'usuario_id' => $request->input('usuario_id'),
        ]);

        return '{"msg":"actualizado"}';
    }
}
