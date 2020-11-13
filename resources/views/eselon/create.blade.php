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
                        <h4>Tambah Eselon</h4>
                    </div>
                    <div class="card-tools">
                    </div>
                </div>
                <form action="{{ route('eselon.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <x-input type="text" name="name" label="Nama Eselon" />
                        <x-input type="textarea" name="tentang" label="tentang" />
                        <x-input type="text" name="pejabat" label="Nama Pejabat" />
                        <x-input type="text" name="name_other" label="Nama Lain atau Singkatan" />
                        <x-input type="number" name="level" label="Level" />
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
</script>
@stop
