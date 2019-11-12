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
                <input type="text" name="Course" class="form-control" value="{{ $course->Name }}" disabled>
            </div>
            <div class="form-group">
                <label for="Weather">Weather</label>
                <input type="text" name="Weather" class="form-control" value="{{ $match->Weather }}">
            </div>
            
            <div class="form-group" style="overflow-x:auto;">
                <table class="table table-bordered table-striped table-sm"cellspacing="0" width="100%">
                    <thead>
                    <tr class="table-warning">
                        <th class="th-sm">HOLE</th>
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
                        @if ( $match->Player1 )
                        <tr>
                        <td>
                            {{ $users->find($scorecardP1->get(0)->PlayerID)->name }}
                        </td>

                            @foreach ( $scorecardP1 as $score )

                                <td>
                                    <input type="text" name="P1Score{{ $score->HoleID }}" value="{{ $score->Score }}" class="form-control form-control-sm" size="1">
                                </td>
                                
                            @endforeach

                        </tr>
                        @endif
                        @if ( $match->Player2 )
                        <tr>
                        <td>
                            {{ $users->find($scorecardP2->get(0)->PlayerID)->name }}
                        </td>

                            @foreach ( $scorecardP2 as $score )

                                <td>
                                    <input type="text" name="P2Score{{ $score->HoleID }}" value="{{ $score->Score }}" class="form-control form-control-sm" size="1">
                                </td>
                                
                            @endforeach

                        </tr>
                        @endif
                        @if ( $match->Player3 )
                        <tr>
                        <td>
                            {{ $users->find($scorecardP3->get(0)->PlayerID)->name }}
                        </td>

                            @foreach ( $scorecardP3 as $score )

                                <td>
                                    <input type="text" name="P3Score{{ $score->HoleID }}" value="{{ $score->Score }}" class="form-control form-control-sm" size="1">
                                </td>
                                
                            @endforeach

                        </tr>
                        @endif
                        @if ( $match->Player4 )
                        <tr>
                        <td>
                            {{ $users->find($scorecardP4->get(0)->PlayerID)->name }}
                        </td>

                            @foreach ( $scorecardP4 as $score )

                                <td>
                                    <input type="text" name="P4Score{{ $score->HoleID }}" value="{{ $score->Score }}" class="form-control form-control-sm" size="1">
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
