@extends('layouts.plantillabase')
@section('contenido')
    <h2>Editar Categoría</h2>
    <form action="/categorias/update/{{ $categoria->_id }}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre Categoría</label>
            <input type="text" class="form-control" name="nombre_categoria" value="{{$categoria->nombre_categoria}}" >
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion"  value="{{$categoria->descripcion}}"  >
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
