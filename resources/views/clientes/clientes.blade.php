@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">


            <div class="card">

                <div class="card-header">
                    Cliente encontrado
                    <a href="{{url('clientes')}}" class="btn btn-success btn-sm float-right">Regresar</a>
                </div>
                <div class="card-body">

                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>direccion</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $empleado)
                            <tr>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->numeroC}}</td>
                                <td>{{$empleado->correo}}</td>
                                <td>{{$empleado->direccion}}</td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer">



                </div>
            </div>
        </div>
    </div>
</div>
@endsection