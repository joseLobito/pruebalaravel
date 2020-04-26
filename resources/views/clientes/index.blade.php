@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="">
                Busqueda de Cliente
                <form class="navbar-form navbar-left" action="{{url('clientes/{cliente}')}}" method="get">

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Buscar nombre">
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Buscar</button>
                </form>

            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    listado de empleados
                    <a href="{{ url('clientes/create') }}" class="btn btn-success btn-sm float-right">Nuevo Cliente</a>
                </div>
                <div class="card-body">
                    <div class="aler alert-success">{{ session('Mensaje')}}</div>
                    @if(session('Mensaje'))
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>direccion</th>
                                <th>Actions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $empleado)
                            <tr>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->numeroC}}</td>
                                <td>{{$empleado->correo}}</td>
                                <td>{{$empleado->direccion}}</td>
                                <td>
                                    <form action="{{url('clientes/'.$empleado->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">Eliminar</button>

                                    </form>
                                </td>
                                <td>
                                    <a href="{{ url('clientes/'.$empleado->id.'/edit')}}" class="btn btn-warning btn-sm">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer">
                    Bienvend@ {{auth()->user()->name}}

                </div>
            </div>
        </div>
    </div>
    {{$clientes->links()}}
</div>

@endsection