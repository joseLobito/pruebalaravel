@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Registrar Cliente

                </div>
                <div class="card-body">
                    ....
                    <form action="{{ url('clientes')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Docuemento</label>
                            <input type="text" class="form-control" name="numeroC">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="correo">
                        </div>
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input type="text" class="form-control" name="direccion">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{url('clientes')}}" class="btn btn-danger">Cancelar</a>

                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection