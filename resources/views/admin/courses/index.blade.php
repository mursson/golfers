@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Course Management</div>
        
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
                <label for="HoleCount">Hole Count</label>
                <input type="text" name="HoleCount" class="form-control" value="{{ old('HoleCount') }}">
            </div>
            <div class="form-group">
                <label for="Par">Par</label>
                <input type="text" name="Par" class="form-control" value="{{ old('Par') }}">
            </div>
            <div class="form-group">
                <label for="Rating">Rating</label>
                <input type="text" name="Rating" class="form-control" value="{{ old('Rating') }}">
            </div>
            <div class="form-group">
                <label for="BogeyRating">Bogey Rating</label>
                <input type="text" name="BogeyRating" class="form-control" value="{{ old('BogeyRating') }}">
            </div>
     
            <div class="form-group">
                <button class="btn btn-primary">Add Course</button>
            </div>                        
        </form>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Hole Count</th>
                <th>Par</th>
                <th>Rating</th>
                <th>Bogey Rating</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $courses as $course )
                <tr>
                    <td>{{ $course->Name }}</td>
                    <td>{{ $course->HoleCount }}</td>
                    <td>{{ $course->Par }}</td>
                    <td>{{ $course->Rating }}</td>
                    <td>{{ $course->BogeyRating }}</td>
                    <td>
                        <a href="/courses/{{ $course->id }}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="/courses/{{ $course->id }}/eliminar" class="btn btn-danger btn-sm" title="Dar de baja"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
