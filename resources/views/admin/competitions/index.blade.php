@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Competition Management</div>
        
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
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" value="{{ old('Name') }}">
            </div>
            <div class="form-group">
                <label for="Type">Type</label>
                <input type="text" name="Type" class="form-control" value="{{ old('Type') }}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Add Competition</button>
            </div>                        
        </form>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $competitions as $competition )
                <tr>
                    <td>{{ $competition->Name }}</td>
                    <td>{{ $competition->Type }}</td>
                    <td>
                        <a href="/competitions/{{ $competition->id }}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="/competitions/{{ $competition->id }}/eliminar" class="btn btn-danger btn-sm" title="Dar de baja"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
