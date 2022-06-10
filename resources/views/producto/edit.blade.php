@extends('layouts.plantillabase')
@section('contenido')
    <h2>EDITAR PRODUCTO</h2>
    <form action="/productos/update/{{ $producto->_id }}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type=text" class="form-control" name="nombre_producto" value="{{$producto->nombre_producto}}" >
        </div>
        <div class="mb-3">
            <label " class="form-label">Descripcion</label>
            <input type=text" class="form-control" name="descripcion"  value="{{$producto->descripcion}}"  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Fecha de creación</label>
            <input type=text" class="form-control" name="fecha_creacion"  value="{{$producto->fecha_creacion}}" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
