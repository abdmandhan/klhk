@extends('adminlte::page')

@section('title', 'Tambah Eselon')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Edit Eselon</h4>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <form action="{{ route('eselon.update',$data->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <x-input type="text" name="name" label="Nama Eselon" :value="$data->name" />
                        <x-input type="textarea" name="tentang" label="tentang" :value="$data->tentang" />
                        <x-input type="text" name="pejabat" label="Nama Pejabat" :value="$data->pejabat" />
                        <x-input type="text" name="name_other" label="Nama Lain atau Singkatan" :value="$data->name_other" />
                        <x-input type="number" name="level" label="Level" :value="$data->level" disabled/>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('eselon.index') }}" class="btn btn-primary">Kembali</a>
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
