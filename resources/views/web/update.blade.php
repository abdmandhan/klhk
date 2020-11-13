@extends('adminlte::page')

@section('title', 'Ubah Data Sistem')

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
                <form action="{{ route('web.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <!-- <x-input type="text" name="name" label="Nama Web" :value="$data->name" require/> -->
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Web</label>
                            <div class="col-sm-10">
                                <input value="{{$data->name}}" class="form-control" name="name">
                            </div>
                        </div>
                        <x-select label="Eselon" name="id_eselon" selectData="Eselon" :value="$data->id_eselon" />
                        <x-select label="Kategori web" name="id_web_category" selectData="WebCategory"
                            :value="$data->id_web_category" />
                        <x-input type="text" name="url_name" label="Url" :value="$data->url_name" />
                        <x-input type="text" name="ip_address" label="IP Address" :value="$data->ip_address" />
                        <!-- <x-input type="text" name="description" label="Deskripsi" :value="$data->description" require/> -->
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description">{{$data->description}}</textarea>
                            </div>
                        </div>
                        <x-statustoggle name="status" label="Status" :value="$data->status" />
                        <x-input type="file" name="image" label="Url gambar" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gambar Lama</label>
                            <div class="col-sm-10">
                            <img src="{{ asset('vendor/client/images/'.$data->image) }}" width="60" height="60">
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
