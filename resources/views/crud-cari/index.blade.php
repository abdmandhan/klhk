@extends('master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
            <h1> Data Simtoring </h1>
            </div>
            <div class="col-6">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sn float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Cari
</button>
            </div>

        <table class="table table-hover">
            <tr>
                <th>Nama</th>
                <th>URL</th>
                <th>IP Address</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Gambar</th>
                <th>AKSI</th>
            </tr>
            @foreach($data_cari as $cari)
            <tr>
                <td>{{$cari->nama}}</td>
                <td>{{$cari->url}}</td>
                <td>{{$cari->ip_address}}</td>
                <td>{{$cari->kategori}}</td>
                <td>{{$cari->deskripsi}}</td>
                <td>{{$cari->status}}</td>
                <td><img src="{{ asset('client/images/'.$cari->image) }}" width="60" height="40"></td>
                <td>
                <a href="/cari/{{$cari->id}}/edit" class="btn btn-warning btn-sn">Edit</a>
                <a href="/cari/{{$cari->id}}/delete" class="btn btn-danger btn-sn" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/cari/create" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama website/SI">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Link website/SI">
        </div>
        <div class="form-group">
            <label for="ip">IP Address</label>
            <input type="text" name="ip_address" class="form-control" id="ip" aria-describedby="emailHelp" placeholder="IP Address">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kategori</label>
            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
            <option value="Website">Website</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
            <option value="Aktif">Aktif</option>
            <option value="No Data">No Data</option>
            <option value="UBUNTU">UBUNTU</option>
            </select>
        </div>
        <div class="form-group">
            <label for="poto">Foto Website</label>
            <input type="file" name="image" class="form-control" id="poto" aria-describedby="emailHelp">
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
@endsection
