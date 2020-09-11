@extends('backLayout.app')
@section('title')
Edit Detalleimpli
@stop

@section('content')

    <h1>Edit Detalleimpli</h1>
    <hr/>

    {!! Form::model($detalleimpli, [
        'method' => 'PATCH',
        'url' => ['detalleimpli', $detalleimpli->id],
        'class' => 'form-horizontal'
    ]) !!}

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
            <div class="form-group {{ $errors->has('puesto') ? 'has-error' : ''}}">
                {!! Form::label('puesto', 'Puesto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('puesto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('puesto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombreimplicado') ? 'has-error' : ''}}">
                {!! Form::label('nombreimplicado', 'Nombreimplicado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreimplicado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombreimplicado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('timeinv') ? 'has-error' : ''}}">
                {!! Form::label('timeinv', 'Timeinv: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'timeinv', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('timeinv', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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