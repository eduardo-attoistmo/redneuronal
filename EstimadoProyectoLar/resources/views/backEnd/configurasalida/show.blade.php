@extends('backLayout.app')
@section('title')
Configurasalida
@stop

@section('content')

    <h1>Configurasalida</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>5W</th><th>5P</th><th>Como</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $configurasalida->id }}</td> <td> {{ $configurasalida->w }} </td><td> {{ $configurasalida->p }} </td><td> {{ $configurasalida->como }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection