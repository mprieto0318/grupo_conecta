@extends('adminlte::page')

@section('title', 'EDITAR REGISTRO')

@section('content_header')
    <h1>EDITAR REGISTRO</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
@endif

<div class="card">
  <div class="card-body">
    <p class="h4">Asignar Roles</p>
    <p class="form-control">{{ $data->name }}</p>

    {!! Form::model($data, ['route' => ['users.update', $data], 'method' => 'put']) !!}
      <p class="h5">Listado de Roles</p>
      
      @foreach ($roles as $role)
        <div>
          
          <label>
            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
            {{$role->name}}
          </label>
        </div>
      @endforeach

      {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2']) !!}
    {!! Form::close() !!}
  </div>
</div>

{{-- 
<form action="/users/{{$data->id}}" method="POST">
  <!-- La directiva "method" es para especificar que la peticion es una actualización  -->
  @method('PUT')

  <!-- La directiva "csrf" es obligatoria para enviar el formulario -->
  @csrf   

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$data->id}}">
  </div>

  

  <div class="mb-3">
    <a hre="/users" class="btn btn-secundary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
  </div>

  
</form> --}}
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop