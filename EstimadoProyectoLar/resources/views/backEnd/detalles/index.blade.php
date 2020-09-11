@extends('backLayout.app')
@section('title')
Detalle
@stop

@section('content')

    <h1>Detalles <a href="{{ url('detalles/create') }}" class="btn btn-primary pull-right btn-sm">Add New Detalle</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbldetalles">
            <thead>
                <tr>
                    <th>ID</th><th>N</th><th>Nombretarea</th><th>Nombreproyecto</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($detalles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('detalles', $item->id) }}">{{ $item->n }}</a></td><td>{{ $item->nombretarea }}</td><td>{{ $item->nombreproyecto }}</td>
                    <td>
                        <a href="{{ url('detalles/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['detalles', $item->id],
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
        $('#tbldetalles').DataTable({
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