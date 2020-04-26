@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear producto
                </div>
                <div class="card-body">
                    <form action="{{url('clientes/'.$cliente->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PATCH')}}
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="">Documento</label>
                            <input type="number" class="form-control" name="numeroC" value="{{$cliente->numeroC}}">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="correo" value="{{$cliente->correo}}">
                        </div>
                        <div class="form-group">
                            <label for="">Editar</label>
                            <input type="text" class="form-control" name="direccion" value="{{$cliente->direccion}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Modificar</button>
                        <a href="{{url('clientes')}}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection