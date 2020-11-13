@extends('adminlte::page')

@section('title', 'Data Eselon')

@section('content_header')
<h1>    Daftar Eselon</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Eselon</h3>
                    <div class="card-tools">
                        <a href="{{ route('eselon.create') }}" class="btn btn-primary">Tambah Eselon</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered table-hover text-justify">
                        <thead style="background-color:#BDECB6;">
                            <tr>
                                <th>No</th>
                                <th>Nama Eselon</th>
                                <th>Tentang</th>
                                <th>Nama Pejabat</th>
                                <th>Nama lain atau Singkatan</th>
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
                                <td>{{$no1++}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->tentang }}</td>
                                <td>{{ $item->pejabat }}</td>
                                <td>{{ $item->name_other }}</td>
                                <td>{{ $item->level }}</td>
                                <td>
                                    <form action="{{ route('eselon.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" title="Delete"
                                            onsubmit="confirm('Delete web {{ $item->name }} ?')"><i
                                                class="fa fa-trash text-danger" style="font-size: 20px"></i></button>
                                    <a href="{{ route('eselon.edit',$item->id)}}" title="Edit"><i
                                            class="fa fa-edit text-primary" style="font-size: 20px"></i></a></form>
                                </td>
                            </tr>
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

    document.onsubmit=function(){
        return confirm('Ingin Menghapus?');
    }
</script>
@stop
