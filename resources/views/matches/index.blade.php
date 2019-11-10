@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Matches</div>
        
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
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Date</th>
                <th>Weather</th>
                <th>Players</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $matches as $match )
                <tr>
                    <td>{{ $match->Date }}</td>
                    <td>{{ $match->Weather }}</td>
                    <td>{{ $match->RoundPlayer1 }}{{ $match->RoundPlayer2 }}</td>
                    <td>
                        <a href="/matches/{{$match->id}}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="/matches/{{$match->id}}/eliminar" class="btn btn-danger btn-sm" title="Dar de baja"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection
