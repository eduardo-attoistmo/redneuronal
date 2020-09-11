@extends('backLayout.app')
@section('title')
Salida
@stop

@section('content')

    <h1>Salida</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>5W</th><th>5P</th><th>Como</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $salida->id }}</td> <td> {{ $salida->w }} </td><td> {{ $salida->p }} </td><td> {{ $salida->como }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection