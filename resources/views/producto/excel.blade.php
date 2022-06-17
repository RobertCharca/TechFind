<table>
    <thead>
    <tr>
        <th>Nombre del producto</th>
        <th>Descripción</th>
        <th>Fecha creación</th>
        <th>Nombre del Negocio</th>
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