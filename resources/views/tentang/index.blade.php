@extends('adminlte::page')

@section('title', 'Edit Tentang')

@section('content_header')
<h1>    Edit Tentang</h1>
@stop

@section('content')
<div class="container-fluid">
    @include('layouts.message')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Sistem</h3>
                    <div class="card-tools">
                        <a href="/tentang/edit/{{$tentang->id}}" class="btn btn-primary">Edit Tentang</a>
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
                                <th>Gambar Tentang</th>
                                <th>Deskripsi Tentang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset('vendor/client/images/').'/'.$tentang->gambar }}" width="60" height="60"></td>
                                <td>{{ $tentang->deskripsi }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="{{ asset('vendor/DataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/datatables-demo.js') }}"></script>
<script>
                $(document).ready(function () {
                    $('table').DataTable({
                        responsive: true,
                        deferRender: true,
                        scrollY: 400,
                        scrollCollapse: true,
                        scroller: true

                    });
                })
            </script>
<script>
//     $(document).ready(function() {
//     $('#example').DataTable();
// } );

</script>
@stop
