@extends('adminlte::page')

@section('title', 'Ubah Tentang')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Edit Data</h4>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <form action="/tentang/update/{{$tentang->id}}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Tentang</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" cols="40" rows="8" placeholder="" name="deskripsi">{{$tentang->deskripsi}}</textarea>
                            </div>
                        </div>
                        <x-input type="file" name="image" label="Url gambar" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gambar Lama</label>
                            <div class="col-sm-10">
                            <img src="{{ asset('vendor/client/images/'.$tentang->gambar) }}" width="60" height="60">
                        </div>
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
            return confirm('Yakin Perubahan?');
        }else{
            alert('Anda harus mengisi data dengan lengkap');
            return false;
        }
        
    }
</script>
@stop
