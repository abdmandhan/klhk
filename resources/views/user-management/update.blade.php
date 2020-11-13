@extends('adminlte::page')

@section('title', 'Daftar Admin')

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

                    </div>
                </div>
                <form action="{{ route('user-management.update',$data->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <x-input type="text" name="name" label="Name" :value="$data->name"  />
                            <x-input type="text" name="email" label="Email" :value="$data->email" />
                                <x-select label="Role" name="roles[]" selectData="User"
                            :value="$data->roles" />
                            <x-input type="password" name="password" label="Password" :value="$data->password"  />
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('user-management.index') }}" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
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

    document.onsubmit=function(){
        return confirm('Yakin Perubahan?');
    }
</script>
@stop
