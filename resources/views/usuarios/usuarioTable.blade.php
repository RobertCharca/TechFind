@extends('layouts.usuarioPlantilla')
@section('contenido')
    <a href="usuario/agregarUsuario" type="button" class="btn btn-success">Nuevo Usuario</a>

    <table class="table table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Pais</th>
                <th scope="col">Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->username}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->password}}</td>
                    <td>{{$usuario->pais}}</td>
                    <td>{{$usuario->ciudad}}</td>
                    <td><a href="usuario/{{$usuario->_id}}/actualizarUsuario" type="button" class="btn btn-warning">Editar</a></td>
                    <td><a href="usuario/{{$usuario->_id}}/eliminarUsuario" type="button" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

