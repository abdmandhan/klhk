@extends('adminlte::page')

@section('title', 'Profil Admin')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.create') }}"class="btn btn-primary">Tambah Data Admin</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    {{-- style="width:100%"> --}}
                    <thead style="background-color:#BDECB6;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Eselon</th>
                            <th>Email</th>
                            {{-- <th>Password</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no1 = 1;
                         @endphp
                        @foreach ($admin  as $a)
                        <tr>
                            <td>{{$no1++}}</td>
                            <td>{{ $a->name }}</td>
                            <td>{{ $a->eselon }}</td>
                            <td>{{ $a->email}}</td>
                            {{-- <td>{{ $a->password }}</td> --}}
                            <td>
                                 <form action="{{ route('admin.destroy',$a->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link" title="Delete"
                                        onsubmit="confirm('Delete admin {{ $a->name }} ?')"><i
                                            class="fa fa-trash text-danger"></i></button>
                                </form>
                                <a href="{{ route('admin.edit',$a->id)}}" title="Edit"><i
                                        class="fa fa-edit text-primary"></i></a>
                                <a href="{{ route('admin.show',$a->id)}}" title="Show"><i
                                        class="fa fa-eye text-info"></i></a>
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
</script>
@stop
