@extends('adminlte::page')

@section('title', 'Daftar Admin')

@section('content_header')
<h1>Daftar Admin</h1>
@stop

@section('content')
<div class="container-fluid">
    @include('layouts.message')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Admin</h3>
                    <div class="card-tools">
                        <a href="{{ route('user-management.create') }}" class="btn btn-primary">Tambah Admin</a>
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
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Role</th>
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
                                <td>{{ $item->email }}</td>
                                <td>
                                    @foreach ($item->roles as $i)
                                    {{ $i->name }},
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{ route('user-management.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" title="Delete" style="font-size: 20px"
                                            onsubmit="confirm('Delete web {{ $item->name }} ?')"><i
                                                class="fa fa-trash text-danger"></i></button>
                                                <a href="{{ route('user-management.edit',$item->id) }}"><i
                                                    class="fa fa-edit text-primary" style="font-size: 20px"></i></a>
                                    </form>
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
    $(document).ready(function () {
        $('#example').DataTable();
    });

    document.onsubmit = function () {
        return confirm('Yakin ingin menghapus?');
    }

</script>
@stop
