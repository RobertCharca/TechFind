@extends('layouts.plantillabase')
@section('contenido')
    <h2>NUEVO PRODUCTO</h2>
    <form action="/productos/insert" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type=text" class="form-control" name="nombre_producto" >
        </div>
        <div class="mb-3">
            <label " class="form-label">Descripcion</label>
            <input type=text" class="form-control" name="descripcion" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Fecha de creación</label>
            <input type=text" class="form-control" name="fecha_creacion" >
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
