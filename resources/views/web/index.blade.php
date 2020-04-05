@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Web List</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Web List</h3>
                    <div class="card-tools">
                        <a href="" class="btn btn-primary">Add New Web</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover table-light"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Web Name</th>
                                <th>Eselon Name</th>
                                <th>Web Category</th>
                                <th>Url</th>
                                <th>Ip Address</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->eselon->name }}</td>
                                <td>{{ $item->webcategory->name }}</td>
                                <td>{{ $item->url_name }}</td>
                                <td>{{ $item->ip_address }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if ($item->status)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Non-Active</span>
                                    @endif    
                                </td>
                                {{-- <td><img src="{{ $item->image }}" alt="" srcset=""></td> --}}
                                <td>{{ $item->image }}</td>
                                <td>
                                    <a href=""><i class="fa fa-trash text-danger"></i></a>
                                    &nbsp;
                                    <a href=""><i class="fa fa-edit text-primary"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        {{-- {{ $data->links() }} --}}
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
</script>
@stop