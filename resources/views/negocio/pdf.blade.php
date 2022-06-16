<!DOCTYPE html>
<html>
<head>
    <title>Negocios</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nombre del negocio</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Pais</th>
        <th>Correo electrónico</th>
        <th>Propietario</th>
        <th>Categoria</th>
    </tr>
    </thead>
    <tbody>

    @foreach($negocios as $negocio )
        <tr>
            <td>{{$negocio->nombre_negocio}}</td>
            <td>{{$negocio->direccion}}</td>
            <td>{{$negocio->ciudad}}</td>
            <td>{{$negocio->pais}}</td>
            <td>{{$negocio->correo_electronico}}</td>
            <td>{{$negocio->usuarios->username}}</td>
            <td>{{$negocio->categorias->nombre_categoria}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
