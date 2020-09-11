@extends('backLayout.app')
@section('title')
Create new Entrada
@stop

@section('content')

    <h1>Create New Entrada</h1>
    <hr/>

    {!! Form::open(['url' => 'entrada', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('audio') ? 'has-error' : ''}}">
                {!! Form::label('audio', 'Audio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('audio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('audio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}">
                {!! Form::label('video', 'Video: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('video', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('video', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('documento') ? 'has-error' : ''}}">
                {!! Form::label('documento', 'Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lengFront') ? 'has-error' : ''}}">
                {!! Form::label('lengFront', 'Lengfront: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('lengFront', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lengFront', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lengBack') ? 'has-error' : ''}}">
                {!! Form::label('lengBack', 'Lengback: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('lengBack', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lengBack', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('empleado') ? 'has-error' : ''}}">
                {!! Form::label('empleado', 'Empleado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('empleado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('empleado', '<p class="help-block">:message</p>') !!}
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