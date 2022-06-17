<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nombre del producto</th>
        <th>Descripcion</th>
        <th>Fecha de creación</th>
        <th>Nombre del negocio</th>
    </tr>
    </thead>
    <tbody>

    @foreach($productos as $producto )
        <tr>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->fecha_creacion}}</td>
            <td>{{$producto->negocios->nombre_negocio}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>