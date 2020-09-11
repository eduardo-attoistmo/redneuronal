@extends('backLayout.app')
@section('title')
Detalleimpli
@stop

@section('content')

    <h1>Detalleimpli</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Idproyecto</th><th>Nombreproyecto</th><th>Puesto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $detalleimpli->id }}</td> <td> {{ $detalleimpli->idproyecto }} </td><td> {{ $detalleimpli->nombreproyecto }} </td><td> {{ $detalleimpli->puesto }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection