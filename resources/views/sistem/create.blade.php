@extends('adminlte::page')

  <!-- Content Wrapper. Contains page content -->
 @section('title', 'Form Tambah Data')
 
 @section('content')


 @section('content') 
 <div cclass="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Form Tambah Data</h3>
        </div>
        <div class="card-body">
          <form role="form" method="post" action="/sistem">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_si">Nama Sistem Informasi</label>
                  <input type="text" class="form-control @error('nama_si') is-invalid @enderror" id="nama_si" placeholder="Masukkan Nama Sistem Informasi" name="nama_si" value="{{ old('nama_si')}}">
                  @error('nama_si')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Sistem</label>
                  <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan Deskripsi Sistem" name="deskripsi" value="{{ old('deskripsi')}}">
                  @error('deskripsi')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="alamat_url">Alamat Url</label>
                  <input type="text" class="form-control @error('alamat_url') is-invalid @enderror" id="alamat_url" placeholder="Masukkan Alamat Url" name="alamat_url" value="{{ old('alamat_url')}}">
                  @error('alamat_url')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="ip_host" >IP Host</label>
                  <input type="text" class="form-control @error('ip_host') is-invalid @enderror" id="ip_host" placeholder="Masukkan IP Host" name="ip_host" value="{{ old('ip_host')}}">
                  @error('ip_host')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/sistem" class="btn btn-primary">Kembali</a>
              </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
   
 </div>
@endsection