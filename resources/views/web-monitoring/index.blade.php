@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Web Monitoring</h3>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover table-light"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Web Name</th>
                                <th>Url</th>
                                <th>IP Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->web->name }}</td>
                                <td>{{ $item->web->url_name }}</td>
                                <td>{{ $item->web->ip_address }}</td>
                                <td id="status_{{ $item->id }}">
                                    @if ($item->status)
                                    <span class="badge badge-success">Connect</span>
                                    @else
                                    <span class="badge badge-danger">Disconnect</span>
                                    @endif
                                </td>
                            </tr>
                            @push('js')
                            <script>
                                var id = "{{ $item->id }}"
                                $.get( `{{ route('web_status')}}?id=${id}`, function( data ) {
                                    if(data.status) $(`#status_${id}`).html("<span class='badge badge-success'>Connect</span>");
                                    else $(`.status_${id}`).html("<span class='badge badge-danger'>Disconnect</span>");
                                    console.log(data.status);
                                });
                            </script>
                            @endpush
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

function get_web_status(id){
    $.get( `{{ route('web_status')}}?id=${id}`, function( data ) {
        if(data.status) $(`#status_${id}`).html("<span class='badge badge-success'>Connect</span>");
        else $(`.status_${id}`).html("<span class='badge badge-danger'>Disconnect</span>");
        console.log(data.status);
    });
};

</script>

@stop