@extends('layouts.plantillabase')
@section('contenido')
    <h2>Crear categoria</h2>
    <br>
    <form action="/categorias/insert" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Categoria" name="nombre_categoria">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Descripcion</label>
            <input type="text"class="form-control" id="exampleFormControlInput2" name="descripcion" placeholder="Descripción">
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
@endsection
