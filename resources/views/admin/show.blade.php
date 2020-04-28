@extends('adminlte::page')

@section('title', 'Data Admin')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <div class="card-tools">
                        {{-- <h4>Admin : {{ $data_admin->name }}</h4> --}}
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <x-input type="text" name="name" label="Name" :value="$data_admin->name" disabled />
                    <x-input type="text" name="eselon" label="Eselon" :value="$data_admin->eselon" disabled />
                        <x-input type="text" name="role" label="Role" :value="$data_admin->role" disabled />
                    <x-input type="email" name="email" label="Email" :value="$data_admin->email" disabled />
                    <x-input type="password" name="password" label="Password" :value="$data_admin->password" disabled />
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.edit',$data_admin->id) }}" class="btn btn-success">Edit</a>
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
