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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo usuario
                </div>
                <div class="card-body">
                    <form action="{{ url('usuarios') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Rol</label>
                            <select class="form-control" name="rol">
                                @foreach ($roles as $key => $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="justify-content-end">
                            <input type="submit" value="Enviar" class="btn btn-success">
                            <a href="{{url('usuarios')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection