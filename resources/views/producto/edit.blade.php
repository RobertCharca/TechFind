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
        <div class="mb-3">
            <label  class="form-label">Negocio</label>
            <select class="form-select" aria-label="Default select example" name="negocio_id">
                <option value='{{$producto->negocio_id}}' selected>{{$producto->negocios->nombre_negocio}}</option>
                @foreach($negocios as $negocio)
                    <option value='{{$negocio->_id}}'>{{$negocio->nombre_negocio}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
