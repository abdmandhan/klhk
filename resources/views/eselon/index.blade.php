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
                    <h3 class="card-title">Eselon List</h3>
                    <div class="card-tools">
                        <a href="{{ route('eselon.create') }}" class="btn btn-primary">Tambah Eselon</a>
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
                                <th>Nama Eselon</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no1 = 1;
                             @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>}
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->level }}</td>
                                <td>
                                    <form action="{{ route('eselon.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" title="Delete"
                                            onsubmit="confirm('Delete web {{ $item->name }} ?')"><i
                                                class="fa fa-trash text-danger"></i></button>
                                    <a href="{{ route('eselon.edit',$item->id)}}" title="Edit"><i
                                            class="fa fa-edit text-primary"></i></a></form>

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

@section('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@stop
