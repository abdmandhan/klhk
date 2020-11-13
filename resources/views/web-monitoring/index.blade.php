@extends('adminlte::page')

@section('title', 'Web Monitoring')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monitoring</h3>
                    <div class="card-tools">
                        {{-- <a href="" class="btn btn-primary">Tambah Data Web</a> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    {{-- <table id="example" class="table table-striped table-bordered table-hover table-light" --}}
                        {{-- style="width:100%"> --}}
                        <thead style="background-color:#BDECB6;">
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama Web</th>
                                <th>Url</th>
                                <th>IP Address</th>
                                <th>Status</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no1 = 1;
                             @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$no1++}}</td>
                                <td>{{ $item->web->id}}</td>
                                <td>{{ $item->web->name}}</td>
                                <td><a href="{{$item->web->url_name}}" target="_blank">{{$item->web->url_name}}</a></td>
                                <td>{{ $item->web->ip_address}}</td>
                                <td id="status_{{ $item->id }}">
                                    @if ($item->status)
                                    <span class="badge badge-success">Connect</span>
                                    @else
                                    <span class="badge badge-danger">Disconnect</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    <a href="" title="Edit"><i class="fa fa-edit text-primary"></i></a>

                                    <a href="" title="Hapus"><i class="fa fa-trash text-danger"></i></a>

                                    <a href="" title="Detail"><i class="fa fa-eye text-info"></i></a>
                                </td> --}}
                            </tr>
                            @push('js')
                            <script>
                                var id = "{{ $item->id }}"
                                $.get( `{{ route('web_status')}}?id=${id}`, function( data ) {
                                    if(data.status) $(`#status_${id}`).html("<span class='badge badge-success'>Connect</span>");
                                    else $(`.status_${id}`).html("<span class='badge badge-danger'>Disconnect</span>");
                                    console.log("PING WEB : "+data.data.web_name+" IP ADDRESS :"+data.data.ip_address+" HASIL: "+data.status);
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

@section('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@stop
