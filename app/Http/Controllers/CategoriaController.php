<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\ComentarioNegocio;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias=Categoria::ALL();
        return view('categoria.index')->with('categorias',$categorias);
    }
    public function create(){
        return view('categoria.create');
    }
    public function insert(Request $request){
        $categoria= new Categoria();
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect('/categorias');
    }

    public function edit($id)
    {
       //echo $id;
        $categoria =Categoria::find($id);
       // dd($categoria);
       return view('categoria.edit')->with('categoria', $categoria);
    }
    public function update(Request $request ,$id)
    {
        //echo $id;
        $categoria =Categoria::find($id);
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion =$request->descripcion;
        $categoria->save();
        return redirect('/categorias');
    }

    public function delete(Request $request ,$id)
    {
        //echo $id;
        $categoria =Categoria::find($id);
        $categoria->delete();
        return redirect('/categorias');
    }

    public function prueba()
    {
        return $negocios = ComentarioNegocio::ALL();
    }
}
