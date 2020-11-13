@extends('adminlte::page')

@section('title', 'Tambah Sistem')

@section('content_header')
<h1>Tambah Data Sistem</h1>
@stop
@push('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-122"></div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Tambah Data</h4>
                    </div>
                    <div class="card-tools">
                    </div>
                </div>
                <form action="{{ route('web.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <x-input type="text" name="name" label="Nama Web" />
                        <x-select label="Eselon" name="id_eselon" selectData="Eselon" />
                        <x-select label="Kategori" name="id_web_category" selectData="WebCategory" />
                        <x-input type="text" name="url_name" label="Url" />
                        <x-input type="text" name="ip_address" label="IP Address" />
                        <!-- <x-input type="text" name="description" label="Deskripsi" /> -->
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <x-statustoggle name="status" label="Status" value="1" />

                        <x-input type="file" name="image" label="Url gambar" />
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('web.index') }}" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script>
    $(function(){ $('#chkToggle2').bootstrapToggle() });
  </script>
@endpush
@section('js')

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
document.onsubmit=function(){
        var name = document.getElementById("name").value;
        var id_eselon = document.getElementById("id_eselon").value;
        var id_web_category = document.getElementById("id_web_category").value;
        var url_name = document.getElementById("url_name").value;
        var ip_address = document.getElementById("ip_address").value;
        var description = document.getElementById("description").value;
        if (name != "" && id_eselon != "" && id_web_category != "" && url_name != "" && ip_address != "" && description != "") {
            return confirm('Yakin Disimpan?');
        }else{
            alert('Anda harus mengisi data dengan lengkap');
            return false;
        }
        
    }
</script>
@stop
