<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Negocio;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Models\ComentarioProducto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('negocios')->get();
        return view('producto.index')->with('productos', $productos);
    }

    public function create()
    {
        $negocios = Negocio::all();
        return view('producto.create')->with('negocios',$negocios);
    }

    public function insert(Request $request)
    {
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_creacion = $request->fecha_creacion;
        $producto->negocio_id = $request->negocio_id;
        $producto->save();
        return redirect('/productos');
    }
    public function edit($id)
    {
        $producto =Producto::find($id);
        $negocios =Negocio::all();
        // dd($categoria);
        return view('producto.edit')->with('producto', $producto)->with('negocios',$negocios);
    }
    public function update(Request $request ,$id)
    {
        //echo $id;
        $producto =Producto::find($id);
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_creacion = $request->fecha_creacion;
        $producto->negocio_id = $request->negocio_id;
        $producto->save();
        return redirect('/productos');
    }

    public function delete(Request $request ,$id)
    {
        //echo $id;
        $producto =Producto::find($id);
        $producto->delete();
        return redirect('/productos');
    }
    public function prueba(){
        $productos=Producto::with('negocios')->get();
        dd($productos);
    }
    public function export()
    {
        return Excel::download(new ProductosExport, 'productos.xlsx');
    }

    public function exportPDF()
    {
        $productos = Producto::with('negocios')->get();
        $pdf = PDF::loadView('producto.pdf',['productos'=>$productos]);
        return $pdf->download('productos.pdf');
    }



    public function pro_from_bsn($id){
        $productos = Producto::where('negocio_id',$id)->get();
        return $productos;
    }
    public function one_pro($id){
        $productos = Producto::with('negocios')->where('_id',$id)->get();
        return $productos;
    }
    public function pro_com($id){
        $comentarios = ComentarioProducto::with('usuarios')->where('producto_id',$id)->get();
        return $comentarios;
    }
    public function post_com(Request  $request){
        $coment = new ComentarioProducto();
        $file_name = time().'_'.$request->imagen->getClientOriginalName();
        $file_path = $request->file('imagen')->storeAs('uploads', $file_name,'public');
        $coment->usuario_id = $request->input('usuario_id');
        $coment->producto_id = $request->input('producto_id');
        $coment->subtema = $request->input('subtema');
        $coment->valoracion = $request->input('valoracion');
        $coment->texto_comentario = $request->input('descripcion');
        $coment->imagen = "http://localhost:8000/storage/uploads/".$file_name;
        $coment->save();
        return '{"msg":"actualizado"}';
    }
    public function agregar(Request $request){

        $product = new Producto();

        $file_name = time().'_'.$request->imagen->getClientOriginalName();
        $file_path = $request->file('imagen')->storeAs('uploads', $file_name,'public');
        $product->nombre_producto=$request->input('nombre_producto');
        $product->descripcion=$request->input('descripcion');
        $product->negocio_id=$request->input('negocio_id');
        $product->imagen = "http://localhost:8000/storage/uploads/".$file_name;
        $product->save();
        return '{"msg":"añadido"}';
    }
}
