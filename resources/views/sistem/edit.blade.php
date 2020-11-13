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
          <form role="form" method="post" action="/sistem/{{$sistem->id}}/update">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="nama_si">Nama Sistem Internal</label>
                <input type="text" class="form-control @error('nama_si') is-invalid @enderror" id="nama_si" name="nama_si" value="{{$sistem->name}}">
                @error('nama_si')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi Sistem</label>
                <textarea style="height: 100px;" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{$sistem->description}}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="alamat_url">Alamat Url</label>
                <input type="text" class="form-control @error('alamat_url') is-invalid @enderror" id="alamat_url" name="alamat_url" value="{{$sistem->url_name}}">
                @error('alamat_url')
                <div class="invalid-feedback">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                <label for="ip_host">IP Host</label>
                <input type="text" class="form-control @error('ip_host') is-invalid @enderror" id="ip_host" name="ip_host" value="{{$sistem->ip_address}}">
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