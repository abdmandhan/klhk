@extends('adminlte::page')

@section('title', 'Daftar Sistem')

@section('content_header')
<h1> Daftar Sistem</h1>
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
                        <a href="{{ route('web.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover text-justify">
                            <thead style="background-color:#BDECB6;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sistem</th>
                                    <th>Nama Eselon</th>
                                    <th>Kategori Sistem</th>
                                    <th>Url</th>
                                    <th>Ip Address</th>
                                    <!-- <th>Deskripsi</th> -->
                                    <th>Status</th>
                                    <th>Gambar</th>
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
                                    <td>{{ $item->eselon['name'] }}</td>
                                    <td>{{ $item->webcategory['name']}}</td>
                                    <td><a href="{{$item->url_name}}" target="_blank">{{$item->url_name}}</a></td>
                                    <td>{{ $item->ip_address }}</td>
                                    <!-- <td>{{ $item->description }}</td> -->
                                    <td>
                                        @if ($item->status)
                                        <span class="badge badge-success">Aktif</span>
                                        @else
                                        <span class="badge badge-danger">Non-Aktif</span>
                                        @endif
                                    </td>
                                    {{-- <td><img src="{{ $item->image }}" alt="" srcset=""></td> --}}
                                    <!-- <td><a href="{{$item->image}}" target="_blank">{{$item->image}}</a></td> -->
                                    <td><img src="{{ asset('vendor/client/images/'.$item->image) }}" width="60" height="60"></td>
                                    <td>
                                        <form action="{{ route('web.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link" title="Delete" onsubmit="confirm('Delete web {{ $item->name }} ?')"><i class="fa fa-trash text-danger " style="font-size: 20px"></i></button>
                                        </form>
                                        <a href="{{ route('web.edit',$item->id)}}" title="Edit"><i class="fa fa-edit text-primary" style="font-size: 20px"></i></a>
                                        <a href="{{ route('web.show',$item->id)}}" title="Show"><i class="fa fa-eye text-info" style="font-size: 20px"></i></a>
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
    <script src="{{ asset('vendor/DataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/datatables-demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                responsive: true,
                deferRender: true,
                scrollY: 400

            });
        })
    </script>
    <script>
        //     $(document).ready(function() {
        //     $('#example').DataTable();
        // } );

        document.onsubmit = function() {
            return confirm('Ingin Menghapus?');
        }
    </script>
    @stop