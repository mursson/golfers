@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Report Match</div>
        
        <div class="card-body">
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
                <label for="CompetitionID">Competition</label>
                <select name="CompetitionID" class="form-control">
                    <option value=""></option>
                    @foreach($competitions as $competition)
                        <option value="{{ $competition->id }}">
                            {{ $competition->Name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="CourseID">Course</label>
                <select name="CourseID" class="form-control">
                    <option value=""></option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->Name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="RoundID">Round</label>
                <select name="RoundID" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                </select>
            </div>            
            <div class="form-group">
                <label for="player1">Player 1</label>
                <select name="player1" class="form-control">
                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="player2">Player 2</label>
                <select name="player2" class="form-control">
                    <option value=""></option>
                    @foreach($players as $player)
                        <option value="{{ $player->id }}">
                            {{ $player->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="player3">Player 3</label>
                <select name="player3" class="form-control">
                    <option value=""></option>
                    @foreach($players as $player)
                        <option value="{{ $player->id }}">
                            {{ $player->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="player4">Player 4</label>
                <select name="player4" class="form-control">
                    <option value=""></option>
                    @foreach($players as $player)
                        <option value="{{ $player->id }}">
                            {{ $player->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Weather">Wheater</label>
                <input type="text" name="Weather" class="form-control" value="{{ old('Weather') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Schedule match</button>
            </div>                        
        </form>
        </div>
    </div>
</div>

@endsection
