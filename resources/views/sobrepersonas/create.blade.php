@extends('layouts.app2')
@section('titulo','listado de personas')
@section('contenido')
<br>
<h3 class="text-center">crear persona</h3>
<form action="/personas" method = "POST" enctype="multipart/form-data"><!-- lista nombre de docente con imagen-->

    @csrf {{-- csrf : Es una protección contra ataques malintencionados--}}
    @if ($errors->any())
        @foreach ($errors->all() as $alerta )
            <div class="alert alert-danger" role="alert">
                <ul>
                    <li>{{$alerta}}</li>
                </ul>
            </div>
        @endforeach
    @endif
    <div class="form-group">
        <label for="name" >Ingrese su nombre</label>
        <input id="name" class="form-control" type="varchar" name="name">
    </div>
    <div class="form-group">
        <label for="document_type" >tipo de documento</label>
        <input id="" class="form-control" type="varchar" name="document_type">
    </div>
    <div class="form-group">
        <label for="identification_number" >numero identificacion</label>
        <input id="" class="form-control" type="varchar" name="identification_number">
    </div>
    <div class="form-group">
        <label for="user_rol" >rol</label>
        <input id="" class="form-control" type="varchar" name="user_rol">
    </div>
    <div class="form-group">
        <label for="email" >email</label>
        <input id="" class="form-control" type="varchar" name="email">
    </div>
    <div class="form-group">
        <label for="phone_number" >telefono</label>
        <input id="" class="form-control" type="integer" name="phone_number">
    </div>
    <div class="form-group">
        <label for="state" >state</label>
        <input id="" class="form-control" type="varchar" name="state">
    </div>
    <button class="btn btn-dark" type="submit">Crear</button>
</form>
@endsection

<!--
    'name','document_type','identification_number','user_rol','email','phone_number','state'
-->
