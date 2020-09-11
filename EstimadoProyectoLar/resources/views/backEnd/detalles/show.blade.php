@extends('backLayout.app')
@section('title')
Detalle
@stop

@section('content')

    <h1>Detalle</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>N</th><th>Nombretarea</th><th>Nombreproyecto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $detalle->id }}</td> <td> {{ $detalle->n }} </td><td> {{ $detalle->nombretarea }} </td><td> {{ $detalle->nombreproyecto }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection