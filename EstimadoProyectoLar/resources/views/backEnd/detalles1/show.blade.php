@extends('backLayout.app')
@section('title')
Detalles1
@stop

@section('content')

    <h1>Detalles1</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Idproyecto</th><th>Nombreproyecto</th><th>Requerimientos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $detalles1->id }}</td> <td> {{ $detalles1->idproyecto }} </td><td> {{ $detalles1->nombreproyecto }} </td><td> {{ $detalles1->requerimientos }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection