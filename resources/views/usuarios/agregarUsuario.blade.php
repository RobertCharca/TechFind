@extends('layouts.usuarioPlantilla')
@section('contenido')
    <h3>Agregar nuevo usuario</h3>
    <form action="/usuario/insertarUsuario" method="post">
        @csrf
        <!--Nombres-->
        <div class="row gy-2 gx-3 align-items-center">
            <label>Nombres</label>
            <div class="col-sm-3">
                <label class="visually-hidden" for="specificSizeInputName">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Jane Doe">
            </div>
            <div class="col-sm-3">
                <label class="visually-hidden" for="specificSizeInputName">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Denver">
            </div>
            <div class="col-sm-3">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
            </div>
        </div>
        <!--Correo y password-->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <!--ubicacion-->
        <div class="row g-3">
            <label>Ubicacion</label>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="Pais" aria-label="State" name="pais">
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="Ciudad" aria-label="State" name="ciudad">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
