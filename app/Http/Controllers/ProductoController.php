<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::All();
        return view('producto.index')->with('productos', $productos);
    }

    public function create()
    {
        return view('producto.create');
    }

    public function insert(Request $request)
    {
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_creacion = $request->fecha_creacion;
        $producto->save();
        return redirect('/productos');
    }
    public function edit($id)
    {
        //echo $id;
        $producto =Producto::find($id);
        // dd($categoria);
        return view('producto.edit')->with('producto', $producto);
    }
    public function update(Request $request ,$id)
    {
        //echo $id;
        $producto =Producto::find($id);
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_creacion = $request->fecha_creacion;
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
}
