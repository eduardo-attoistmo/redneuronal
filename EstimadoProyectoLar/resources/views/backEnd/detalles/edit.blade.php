@extends('backLayout.app')
@section('title')
Edit Detalle
@stop

@section('content')

    <h1>Edit Detalle</h1>
    <hr/>

    {!! Form::model($detalle, [
        'method' => 'PATCH',
        'url' => ['detalles', $detalle->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('n') ? 'has-error' : ''}}">
                {!! Form::label('n', 'N: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('n', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('n', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombretarea') ? 'has-error' : ''}}">
                {!! Form::label('nombretarea', 'Nombretarea: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombretarea', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombretarea', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombreproyecto') ? 'has-error' : ''}}">
                {!! Form::label('nombreproyecto', 'Nombreproyecto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreproyecto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombreproyecto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
                {!! Form::label('cantidad', 'Cantidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('comentarios') ? 'has-error' : ''}}">
                {!! Form::label('comentarios', 'Comentarios: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('comentarios', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('archivo') ? 'has-error' : ''}}">
                {!! Form::label('archivo', 'Archivo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('archivo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('archivo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                {!! Form::label('url', 'Url: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
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