@extends('layouts.plantillabase')
@section('contenido')
    Productos
    <a href="productos/create" type="button" class="btn btn-success m-2">Nuevo Producto</a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de creación</th>
            <th scope="col">Nombre del Negocio</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach($productos as $producto )
            <tr>
                <td> {{$producto->nombre_producto}}</td>
                <td> {{$producto->descripcion}} </td>
                <td>{{$producto->fecha_creacion}}</td>
                <td>{{$producto->negocios->descripcion}}</td>
                <td><a href="productos/{{$producto->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="productos/{{$producto->_id}}/delete" type="button" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
