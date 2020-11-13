@extends('adminlte::page')

<!-- Content Wrapper. Contains page content -->
@section('title', 'Form Edit Data')


@section('content')
<div cclass="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Form Edit Data</h3>
        </div>
        <div class="card-body">
          <form role="form" method="post" action="/website/{{$web->id}}/update">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="nama_web">Nama Sistem Publik</label>
                <input type="text" class="form-control @error('nama_web') is-invalid @enderror" id="nama_web" name="nama_web" value="{{$web->name}}">
                @error('nama_web')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="nama_web">Deskripsi Sistem</label>
                <textarea style="height: 100px;" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{$web->description}}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="alamat_url">Alamat Url</label>
                <input type="text" class="form-control @error('alamat_url') is-invalid @enderror" id="alamat_url" name="alamat_url" value="{{$web->url_name}}">
                @error('alamat_url')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="ip_host">IP Host</label>
                <input type="text" class="form-control @error('ip_host') is-invalid @enderror" id="ip_host" name="ip_host" value="{{$web->ip_address}}">
                @error('ip_host')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/website" class="btn btn-primary">Kembali</a>
              </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
@endsection