@extends('adminlte::page')

@section('title', 'Detail Sistem')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Sistem : {{ $data->name }}</h4>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <x-input type="text" name="name" label="Nama web" :value="$data->name" disabled />
                    <x-select label="Eselon" name="id_eselon" selectData="Eselon" :value="$data->id_eselon" />
                    <x-select label="Kategori" name="id_web_category" selectData="WebCategory"
                        :value="$data->id_web_category" />
                    <x-input type="text" name="url_name" label="Url" :value="$data->url_name" disabled />
                    <x-input type="text" name="ip_address" label="IP Address" :value="$data->ip_address" disabled />
                    <x-input type="text" name="description" label="Deskripsi" :value="$data->description" disabled />
                        <x-statustoggle name="status" label="Status" :value="$data->status"  disabled />
                    <!-- <x-input type="text" name="image" label="Url gambar" :value="$data->image" disabled /> -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                        <img src="{{ asset('vendor/client/images/'.$data->image) }}" width="60" height="60">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('web.index') }}" class="btn btn-primary">Kembali</a>
                    {{-- <a href="{{ route('web.edit',$data->id) }}" class="btn btn-success">Ubah</a> --}}
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
