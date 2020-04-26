@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">

                <div class="card-header">
                    Usuario encontrado
                    <a href="{{url('usuarios')}}" class="btn btn-success btn-sm float-right">Regresar</a>

                </div>
                <div class="card-body">

                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>


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