@extends('backLayout.app')
@section('title')
Entrada
@stop

@section('content')

    <h1>Entrada</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Audio</th><th>Video</th><th>Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $entrada->id }}</td> <td> {{ $entrada->audio }} </td><td> {{ $entrada->video }} </td><td> {{ $entrada->documento }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection