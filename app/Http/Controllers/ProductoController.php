<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Negocio;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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
}
