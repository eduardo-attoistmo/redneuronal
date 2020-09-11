@extends('backLayout.app')
@section('title')
Create new Detalles1
@stop

@section('content')

    <h1>Create New Detalles1</h1>
    <hr/>

    {!! Form::open(['url' => 'detalles1', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('idproyecto') ? 'has-error' : ''}}">
                {!! Form::label('idproyecto', 'Idproyecto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idproyecto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idproyecto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombreproyecto') ? 'has-error' : ''}}">
                {!! Form::label('nombreproyecto', 'Nombreproyecto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreproyecto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombreproyecto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('requerimientos') ? 'has-error' : ''}}">
                {!! Form::label('requerimientos', 'Requerimientos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('requerimientos', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('requerimientos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection