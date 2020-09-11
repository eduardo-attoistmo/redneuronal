@extends('backLayout.app')
@section('title')
Configuraentrada
@stop

@section('content')

    <h1>Configuraentrada <a href="{{ url('configuraentrada/create') }}" class="btn btn-primary pull-right btn-sm">Add New Configuraentrada</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblconfiguraentrada">
            <thead>
                <tr>
                    <th>ID</th><th>Audio</th><th>Video</th><th>Documento</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($configuraentrada as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('configuraentrada', $item->id) }}">{{ $item->audio }}</a></td><td>{{ $item->video }}</td><td>{{ $item->documento }}</td>
                    <td>
                        <a href="{{ url('configuraentrada/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['configuraentrada', $item->id],
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
        $('#tblconfiguraentrada').DataTable({
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