@extends('adminlte::page')

@section('title', 'Tambah Kategori')

@section('content_header')
<h1>    Kategori Sistem</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kategori</h3>
                    <div class="card-tools">
                        <a href="{{ route('web_category.create') }}" class="btn btn-primary">Tambah Kategori</a>
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
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no1 = 1;
                                @endphp
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <form action="{{ route('web_category.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link" title="Delete"
                                                onsubmit="confirm('Delete web {{ $item->name }} ?')"><i
                                                    class="fa fa-trash text-danger" style="font-size: 20px"></i></button>
                                            <a href="{{ route('web_category.edit',$item->id)}}" title="Edit"><i
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

        document.onsubmit=function(){
            return confirm('Ingin Menghapus?');
        }
    </script>
    @stop
