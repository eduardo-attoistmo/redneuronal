@extends('backLayout.app')
@section('title')
Configurasalida
@stop

@section('content')

    <h1>Configurasalida <a href="{{ url('configurasalida/create') }}" class="btn btn-primary pull-right btn-sm">Add New Configurasalida</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblconfigurasalida">
            <thead>
                <tr>
                    <th>ID</th><th>5W</th><th>5P</th><th>Como</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($configurasalida as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('configurasalida', $item->id) }}">{{ $item->w }}</a></td><td>{{ $item->p }}</td><td>{{ $item->como }}</td>
                    <td>
                        <a href="{{ url('configurasalida/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['configurasalida', $item->id],
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
        $('#tblconfigurasalida').DataTable({
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