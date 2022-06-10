@extends('layouts.plantillabase')
@section('contenido')
    Categorias
    <br>
    <a href="categorias/create"><button type="button" class="btn btn-primary">Crear Categoría</button></a>
    </br>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->_id}}</td>
                <td>{{$categoria->nombre_categoria}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td><a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="categorias/{{$categoria->_id}}/delete" type="button" class="btn btn-danger">Eliminar</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection
