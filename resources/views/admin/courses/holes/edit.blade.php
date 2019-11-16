@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Edit Hole</div>
        
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
                <label for="Number">Number</label>
                <input type="text" name="Number" class="form-control" value="{{ old('Number') }}">
            </div>
            <div class="form-group">
                <label for="Par">Par</label>
                <input type="text" name="Par" class="form-control" value="{{ old('Par') }}">
            </div>
            <div class="form-group">
                <label for="Distance">Distance</label>
                <input type="text" name="Distance" class="form-control" value="{{ old('Distance') }}">
            </div>
            <div class="form-group">
                <label for="Handicap">Handicap</label>
                <input type="text" name="Handicap" class="form-control" value="{{ old('Handicap') }}">
            </div>
            <div class="form-group">
                <label for="Picture">Picture</label>
                <input type="text" name="Picture" class="form-control" value="{{ old('Picture') }}">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" name="Description" class="form-control" value="{{ old('Description') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Add Hole</button>
            </div>                         
        </form>
        </div>
     
    </div>
</div>

@endsection
