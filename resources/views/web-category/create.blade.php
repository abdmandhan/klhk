@extends('adminlte::page')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Buat Kategori</h4>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <form action="{{ route('web_category.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <x-input type="text" name="name" label="Nama kategori" />
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('web_category.index') }}" class="btn btn-primary">Kembali</a>
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
