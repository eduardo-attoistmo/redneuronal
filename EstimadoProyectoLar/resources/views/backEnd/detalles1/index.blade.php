@extends('backLayout.app')
@section('title')
Detalles1
@stop

@section('content')

    <h1>Detalles1 <a href="{{ url('detalles1/create') }}" class="btn btn-primary pull-right btn-sm">Add New Detalles1</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbldetalles1">
            <thead>
                <tr>
                    <th>ID</th><th>Idproyecto</th><th>Nombreproyecto</th><th>Requerimientos</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($detalles1 as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('detalles1', $item->id) }}">{{ $item->idproyecto }}</a></td><td>{{ $item->nombreproyecto }}</td><td>{{ $item->requerimientos }}</td>
                    <td>
                        <a href="{{ url('detalles1/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['detalles1', $item->id],
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
        $('#tbldetalles1').DataTable({
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