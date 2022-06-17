<!DOCTYPE html>
<html>
    <head>
        <title>Datos del usuario</title>
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Username</th>
                <th>Email</th>
                <th>Pais</th>
                <th>Ciudad</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellidos }}</td>
                    <td>{{ $usuario->nombre_usuarios }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->pais }}</td>
                    <td>{{ $usuario->ciudad }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
