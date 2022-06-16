@extends('layouts.plantillabase')
@section('contenido')
    <h2>NUEVO NEGOCIO</h2>
    <form action="/negocios/insert" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type=text" class="form-control" name="nombre_negocio" >
        </div>
        <div class="mb-3">
            <label " class="form-label">Descripcion</label>
            <input type=text" class="form-control" name="descripcion" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Horario de atención</label>
            <input type=text" class="form-control" name="hora_atencion" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Dirección</label>
            <input type=text" class="form-control" name="direccion" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Ciudad</label>
            <input type=text" class="form-control" name="ciudad" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Pais</label>
            <input type=text" class="form-control" name="pais" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Correo Electrónico</label>
            <input type=text" class="form-control" name="correo_electronico" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Categoría</label>
            <select class="form-select" aria-label="Default select example" name="categoria_id">
                <option selected>-Seleccione su categoría-</option>
                @foreach($categorias as $categoria)
                <option value='{{$categoria->_id}}'>{{$categoria->nombre_categoria}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">Propietario</label>
            <select class="form-select" aria-label="Default select example" name="usuario_id">
                <option selected>-propietario-</option>
                @foreach($usuarios as $usuario)
                    <option value='{{$usuario->_id}}'>{{$usuario->username}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
