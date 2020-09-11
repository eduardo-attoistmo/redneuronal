@extends('backLayout.app')
@section('title')
Detalleimpli
@stop

@section('content')

    <h1>Detalleimpli <a href="{{ url('detalleimpli/create') }}" class="btn btn-primary pull-right btn-sm">Add New Detalleimpli</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbldetalleimpli">
            <thead>
                <tr>
                    <th>ID</th><th>Idproyecto</th><th>Nombreproyecto</th><th>Puesto</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($detalleimpli as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('detalleimpli', $item->id) }}">{{ $item->idproyecto }}</a></td><td>{{ $item->nombreproyecto }}</td><td>{{ $item->puesto }}</td>
                    <td>
                        <a href="{{ url('detalleimpli/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['detalleimpli', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbldetalleimpli').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection