@extends('layouts.plantillabase')
@section('contenido')
    Negocios
    <a href="negocios/create" type="button" class="btn btn-info m-2">Nuevo Negocio</a>
    <a href="negocios/export" type="button" class="btn btn-success m-2">Descargar Excel</a>
    <a href="negocios/exportPDF" type="button" class="btn btn-danger m-2">Descargar PDF</a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre del negocio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Dirección</th>
            <th scope="col">Ubicación</th>
            <th scope="col">Correo electrónico</th>
            <th scope="col">Propietario</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach($negocios as $negocio )
            <tr>
                <td>{{$negocio->nombre_negocio}}</td>
                <td>{{$negocio->descripcion}}</td>
                <td>{{$negocio->direccion}}</td>
                <td>{{$negocio->ciudad}}, {{$negocio->pais}}</td>
                <td>{{$negocio->correo_electronico}}</td>
                <td>{{$negocio->usuarios}}</td>
                <td>{{$negocio->categorias->nombre_categoria}}</td>
                <td><a href="negocios/{{$negocio->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="negocios/{{$negocio->_id}}/delete" type="button" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
