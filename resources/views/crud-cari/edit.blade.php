@extends('master')

@section('content')
        <h1>edit data cari</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
        <div class="row">
        <div class="col-lg-12">
        <form action="/cari/{{$cari->id}}/update" method="POST">
            {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" input type="text " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama"
            value="{{$cari->nama}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">URL</label>
            <input name="url" input type="text " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="URL"
            value="{{$cari->url}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">IP Address</label>
            <input name="ip_address" input type="text " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="IP Adress"
            value="{{$cari->ip_address}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kategori</label>
            <select name = "kategori" class="form-control" id="exampleFormControlSelect1">
            <option value="Website" @if($cari->kategori == 'website') selected @endif>Website</option>
            <option value="Sistem Informasi"@if($cari->kategori == 'sistem informasi') selected @endif>Sistem Informasi</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$cari->deskripsi}}</textarea>
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Status</label>
            <select name = "kategori" class="form-control" id="exampleFormControlSelect1">
            <option value="Website" @if($cari->status == 'Aktif') selected @endif>Aktif</option>
            <option value="Sistem Informasi"@if($cari->status == 'tidak aktif') selected @endif>Tidak Aktif</option>
            <option value="Sistem Informasi"@if($cari->status == 'ubuntu') selected @endif>Ubuntu/option>
        <div class="form-group">
            <label for="poto">Foto Website</label>
            <input type="file" name="image" class="form-control" id="poto" aria-describedby="emailHelp">
        </div>
         <button type="submit" class="btn btn-warning">Update</button>
         </form>
         </div>
        </div>
    </div>
@endsection
