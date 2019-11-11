@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Edit match</div>
        
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
                <label for="Date">Date</label>
                <input type="text" name="Date" class="form-control" value="{{ $match->Date }}">
            </div>
            <div class="form-group">
                <label for="Course">Course</label>
                <input type="text" name="Course" class="form-control" value="{{ $course->Name }}">
            </div>
            <div class="form-group">
                <label for="Weather">Weather</label>
                <input type="text" name="Weather" class="form-control" value="{{ $match->Weather }}">
            </div>
            
            <div class="form-group">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr class="table-warning">
                        <th>HOLE</th>
                        @foreach ( $holes as $hole )
                            <th>{{ $hole->Number }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <thead class="thead-light">
                    <tr>
                        <th>DISTANCE</th>
                        @foreach ( $holes as $hole )
                            <th>{{ $hole->Distance }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <thead class="thead-light">
                    <tr>
                        <th>HANDICAP</th>
                        @foreach ( $holes as $hole )
                            <th>{{ $hole->Handicap }}</th>
                        @endforeach
                    </tr>
                    </thead> 
                    <thead>
                    <tr class="table-dark">
                        <th>PAR</th>
                        @foreach ( $holes as $hole )
                            <th>{{ $hole->Par }}</th>
                        @endforeach
                    </tr>
                    </thead> 
                    <tbody>

                        @if ( $scorecardP1 )
                        <tr>
                        <td>MUR</td>

                            @foreach ( $scorecardP1 as $score )

                                <td>
                                    <input type="text" name="Score{{ $score->id }}" value="{{ $score->Score }}" class="form-control" size="1">
                                </td>
                                
                            @endforeach

                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update match</button>
            </div>                        
        </form>
        </div>     
    </div>
</div>

@endsection
