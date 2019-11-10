@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Editar usuario</div>
        
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
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña <em>(Solo si desesa modificar)</em></label>
                <input type="text" name="password" class="form-control" value="{{ $user->password }}">
            </div>            
            <div class="form-group">
                <button class="btn btn-primary">Guardar usuario</button>
            </div>                        
        </form>
        </div>
        <!--
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Proyecto</th>
                <th>Nivel</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Proyecto A</td>
                    <td>N1</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="" class="btn btn-danger btn-sm" title="Dar de baja"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            </tbody>
        </table>        
        -->
    </div>
</div>

@endsection
