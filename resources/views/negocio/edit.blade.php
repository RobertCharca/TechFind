@extends('layouts.plantillabase')
@section('contenido')
    <h2>EDITAR NEGOCIO</h2>
    <form action="/negocios/update/{{ $negocio->_id }}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type=text" class="form-control" name="nombre_negocio" value="{{$negocio->nombre_negocio}}" >
        </div>
        <div class="mb-3">
            <label " class="form-label">Descripcion</label>
            <input type=text" class="form-control" name="descripcion" value="{{$negocio->descripcion}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Horario de atención</label>
            <input type=text" class="form-control" name="hora_atencion" value="{{$negocio->hora_atencion}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Dirección</label>
            <input type=text" class="form-control" name="direccion" value="{{$negocio->direccion}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Ciudad</label>
            <input type=text" class="form-control" name="ciudad" value="{{$negocio->ciudad}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Pais</label>
            <input type=text" class="form-control" name="pais" value="{{$negocio->pais}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Correo Electrónico</label>
            <input type=text" class="form-control" name="correo_electronico" value="{{$negocio->correo_electronico}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Categoría</label>
            <select class="form-select" aria-label="Default select example" name="categoria_id">
                <option value='{{$negocio->categoria_id}}' selected>{{$negocio->categorias->nombre_categoria}}</option>
                @foreach($categorias as $categoria)
                    <option value='{{$categoria->_id}}'>{{$categoria->nombre_categoria}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">Propietario</label>
            <select class="form-select" aria-label="Default select example" name="usuario_id">
                <option value='{{$negocio->usuario_id}}' selected>{{$negocio->usuarios->username}}</option>
                @foreach($usuarios as $usuario)
                    <option value='{{$usuario->_id}}'>{{$usuario->username}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
