@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Administración Usuarios</div>
        
        <div class="card-body">

            @if ( session('notification'))
                <div class="alert alert-success">
                    <ul>
                        {{ session('notification') }}
                    </ul>
                </div>
            @endif

            @if ( count( $errors ) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" value="{{ old('password') }}">
            </div>            
            <div class="form-group">
                <button class="btn btn-primary">Registrar usuario</button>
            </div>                        
        </form>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>E-mail</th>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user )
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <a href="/usuarios/{{$user->id}}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="/usuarios/{{$user->id}}/eliminar" class="btn btn-danger btn-sm" title="Dar de baja"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
