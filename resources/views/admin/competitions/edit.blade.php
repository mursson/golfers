@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Edit Competition</div>
        
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
                <input type="text" name="Name" class="form-control" value="{{$competition->Name}}">
            </div>
            <div class="form-group">
                <label for="Type">Type</label>
                <input type="text" name="Type" class="form-control" value="{{$competition->Type}}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Edit Course</button>
            </div>                        
        </form>
        </div>
     
    </div>
</div>

@endsection
