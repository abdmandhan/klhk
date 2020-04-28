@extends('adminlte::page')

@section('title', 'Tambah Data Admin')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <div class="card-tools">
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <form action="{{ route('admin.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <x-input type="text" name="name" label="Name" />
                        <x-input type="text" name="eselon" label="Eselon" />
                        <x-input type="text" name="role" label="Role" />
                        <x-input type="email" name="email" label="Email" />
                        <x-input type="password" name="password" label="Password" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
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
