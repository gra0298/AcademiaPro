@extends('layouts.app2')
@section('titulo','listado de personas')
@section('contenido')
<br>
<h3> listado de usuarios del sistema</h3>
    {{--  Con foreach hago el recorrido al array enviado. $cursito    --}}
    <div class="row">
    @foreach ( $persona as $alias )
        <div class="col-sm">
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">

                <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <a href="/personas/{{$alias->id}}" class="btn btn-dark">Ver mas</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
