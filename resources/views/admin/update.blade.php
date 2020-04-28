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
                        {{-- <h4>Edit Admin</h4> --}}
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <form action="{{ route('admin.update',$data_admin->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <x-input type="text" name="name" label="Name" :value="$data_admin->name"  />
                            <x-input type="text" name="eselon" label="Eselon" :value="$data_admin->eselon" />
                                <x-input type="text" name="role" label="Role" :value="$data_admin->role"  />
                            <x-input type="email" name="email" label="Email" :value="$data_admin->email"  />
                            <x-input type="password" name="password" label="Password" :value="$data_admin->password"  />
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
