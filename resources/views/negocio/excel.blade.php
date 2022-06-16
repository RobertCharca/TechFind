<table>
    <thead>
    <tr>
        <th>Nombre del negocio</th>
        <th>Descripción</th>
        <th>Hora de atención</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Pais</th>
        <th>Correo electrónico</th>
        <th>Propietario</th>
        <th>Categoria</th>
        <th>Creado el</th>
        <th>Acutalizado el</th>
    </tr>
    </thead>
    <tbody>

    @foreach($negocios as $negocio )
        <tr>
            <td>{{$negocio->nombre_negocio}}</td>
            <td>{{$negocio->descripcion}}</td>
            <td>{{$negocio->hora_atencion}}</td>
            <td>{{$negocio->direccion}}</td>
            <td>{{$negocio->ciudad}}</td>
            <td>{{$negocio->pais}}</td>
            <td>{{$negocio->correo_electronico}}</td>
            <td>{{$negocio->usuarios->username}}</td>
            <td>{{$negocio->categorias->nombre_categoria}}</td>
            <td>{{$negocio->fecha_creacion}}</td>
            <td>{{$negocio->fecha_actualizacion}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
