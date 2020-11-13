@extends('adminlte::page')

  <!-- Content Wrapper. Contains page content -->
 @section('title', 'Tentang Sistem')
 
 @section('content')


 @section('content') 
 <div cclass="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Menu Status Web</h3>
        </div>
        <div class="card-body">
          <h4>Terdiri dari : </h4>
          <ol>
            <h5><b><li>Monitoring Sistem Publik</li></b></h5>
              <p>Berisi data sistem publik dari 13 Eselon yang berada di Kementerian Lingkungan Hidup dan Kehutanan.</p>
              <p>A. Cara Menambahkan Data :</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> yang ada di halaman Monitoring Sistem Publik.</li>
                <li>Masukkan nama sistem, nama sistem bersifat unik tidak boleh menggunakan nama sistem yang sama lebih dari satu kali</li>
                <li>Masukkan alamat url sistem secara lengkap, alamat url bersifat unik tidak boleh menggunakan alamat url yang sama lebih dari satu kali</li>
                    Contoh: https://www.contoh.com
                <li>Masukkan IP Address sistem, IP Address bersifat unik tidak boleh menggunakan IP Address yang sama lebih dari satu kali.
                Penulisan seperti contoh berikut : AAA.BBB.CCC.DDD </li>
                <li>Klik tombol <a href="#" class="btn btn-primary">Simpan</a></li>
              </ul>
              <p>B. Status IP Host akan terupdate saat sistem direfresh/dimuat ulang/diload ulang.</p>
              <p>C. Detail Status Http</p>
                    <p>Detail Status Http berisi informasi status url sistem dan keterangan lainnya untuk melihat apakah url tersebut sedang dalam gangguan atau tidak dengan menampilkan kode-kode respon status http.</p>
                    Untuk mengakses detail status http, tekan tombol <button class="btn btn-info" data-toggle="modal" data-target="#"><i class="fa fa-info-circle"></i> Detail</button> yang berada di kolom Detail Status Http.
              <p>D. Mengedit Data</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a> yang ada di halaman Monitoring Sistem Publik pada kolom aksi.</li>
                <li>Alert akan muncul untuk meyakinkan apakah anda akan mengedit data tersebut atau tidak. Tekan "OK" jika ingin mengedit data.</li>
                <li>Edit data, lalu klik tombol <a href="#" class="btn btn-primary">Simpan</a></li>
              </ul>
              <p>E. Hapus Data</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a> yang ada di halaman Monitoring Sistem Publik pada kolom aksi.</li>
                <li>Alert akan muncul untuk meyakinkan apakah anda akan menghapus data tersebut atau tidak. Tekan "OK" jika ingin menghapus data.</li>
              </ul>
              <hr>


              <h5><b><li>Monitoring Sistem Internal</li></b></h5>
                <p>Berisi data sistem internal dari 13 Eselon yang berada di Kementerian Lingkungan Hidup dan Kehutanan.</p>
              <p>A. Cara Menambahkan Data :</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> yang ada di halaman Monitoring Sistem Internal.</li>
                <li>Masukkan nama sistem, nama sistem bersifat unik tidak boleh menggunakan nama sistem yang sama lebih dari satu kali</li>
                <li>Masukkan alamat url sistem secara lengkap, alamat url bersifat unik tidak boleh menggunakan alamat url yang sama lebih dari satu kali</li>
                    Contoh: https://www.simcontoh.com
                <li>Masukkan IP Address sistem, IP Address bersifat unik tidak boleh menggunakan IP Address yang sama lebih dari satu kali. 
                Penulisan seperti contoh berikut : AAA.BBB.CCC.DDD </li>
                <li>Klik tombol <a href="#" class="btn btn-primary">Simpan</a></li>
              </ul>
              <p>B. Status IP Host akan terupdate saat sistem direfresh/dimuat ulang/diload ulang.</p>
              <p>C. Detail Status Http</p>
                    <p>Detail Status Http berisi informasi status url sistem dan keterangan lainnya untuk melihat apakah url tersebut sedang dalam gangguan atau tidak dengan menampilkan kode-kode respon status http.</p>
                    Untuk mengakses detait status http, tekan tombol <button class="btn btn-info" data-toggle="modal" data-target="#"><i class="fa fa-info-circle"></i> Detail</button> yang berada di kolom Detail Status Http.
              <p>D. Mengedit Data</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a> yang ada di halaman Monitoring Sistem Internal pada kolom aksi.</li>
                <li>Alert akan muncul untuk meyakinkan apakah anda akan mengedit data tersebut atau tidak. Tekan "OK" jika ingin mengedit data.</li>
                <li>Edit data, lalu klik tombol <a href="#" class="btn btn-primary">Simpan</a></li>
              </ul>
              <p>E. Hapus Data</p>
              <ul>
                <li>Klik tombol <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a> yang ada di halaman Monitoring Sistem Internal pada kolom aksi.</li>
                <li>Alert akan muncul untuk meyakinkan apakah anda akan menghapus data tersebut atau tidak. Tekan "OK" jika ingin menghapus data.</li>
              </ul>
              <hr>
          </ol>
        </div>
      </div>
      
    </div>
  </div>
   
 </div>
@endsection

