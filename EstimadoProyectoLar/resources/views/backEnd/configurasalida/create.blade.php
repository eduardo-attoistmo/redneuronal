@extends('backLayout.app')
@section('title')
Create new Configurasalida
@stop

@section('content')

    <h1>Create New Configurasalida</h1>
    <hr/>

    {!! Form::open(['url' => 'configurasalida', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('w') ? 'has-error' : ''}}">
                {!! Form::label('w', '5W: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('w', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('w', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('p') ? 'has-error' : ''}}">
                {!! Form::label('p', '5P: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('p', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('p', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('como') ? 'has-error' : ''}}">
                {!! Form::label('como', 'Como: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('como', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('como', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mapa') ? 'has-error' : ''}}">
                {!! Form::label('mapa', 'Mapa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('mapa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mapa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('reglas') ? 'has-error' : ''}}">
                {!! Form::label('reglas', 'Reglas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('reglas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('reglas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prototipo') ? 'has-error' : ''}}">
                {!! Form::label('prototipo', 'Prototipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('prototipo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prototipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('requerimiento') ? 'has-error' : ''}}">
                {!! Form::label('requerimiento', 'Requerimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('requerimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('requerimiento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('historia') ? 'has-error' : ''}}">
                {!! Form::label('historia', 'Historia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('historia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('historia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mapeo') ? 'has-error' : ''}}">
                {!! Form::label('mapeo', 'Mapeo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('mapeo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mapeo', '<p class="help-block">:message</p>') !!}
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