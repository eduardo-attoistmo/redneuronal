@extends('backLayout.app')
@section('title')
Configuraentrada
@stop

@section('content')

    <h1>Configuraentrada</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Audio</th><th>Video</th><th>Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $configuraentrada->id }}</td> <td> {{ $configuraentrada->audio }} </td><td> {{ $configuraentrada->video }} </td><td> {{ $configuraentrada->documento }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection