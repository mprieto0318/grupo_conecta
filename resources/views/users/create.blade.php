@extends('adminlte::page')

@section('title', 'CREAR REGISTRO')

@section('content_header')
    <h1>CREAR REGISTRO</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
  <!-- La directiva "csrf" es obligatoria para enviar el formulario -->
  @csrf   

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">precio</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>

  <div class="mb-3">
    <a hre="/articulos" class="btn btn-secundary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
  </div>

  
</form>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
@stop