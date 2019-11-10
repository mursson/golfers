@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Edit Course</div>
        
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
                <input type="text" name="Name" class="form-control" value="{{$course->Name}}">
            </div>
            <div class="form-group">
                <label for="HoleCount">Hole Count</label>
                <input type="text" name="HoleCount" class="form-control" value="{{$course->HoleCount}}">
            </div>
            <div class="form-group">
                <label for="Par">Par</label>
                <input type="text" name="Par" class="form-control" value="{{$course->Par}}">
            </div>
            <div class="form-group">
                <label for="Rating">Rating</label>
                <input type="text" name="Rating" class="form-control" value="{{$course->Rating}}">
            </div>
            <div class="form-group">
                <label for="BogeyRating">Bogey Rating</label>
                <input type="text" name="BogeyRating" class="form-control" value="{{$course->BogeyRating}}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Edit Course</button>
            </div>                        
        </form>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Par</th>
                <th>Distance</th>
                <th>Handicap</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $holes as $hole )
                <tr>
                    <td>{{$hole->Number}}</td>
                    <td>{{$hole->Par}}</td>
                    <td>{{$hole->Distance}}</td>
                    <td>{{$hole->Handicap}}</td>
                    <td>
                        <a href="/courses/{{ $course->id }}/hole/{{ $hole->id }}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
</div>

@endsection
