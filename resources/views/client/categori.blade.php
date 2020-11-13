@include('client/header')
<div class="site-navbar" id="home-section">
      <div class="container">

      </div>
    </div>
    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Daftar {{$categori->name}}</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Daftar {{$categori->name}} yang ada di Kementerian Lingkungan Hidup dan Kehutanan Indonesia</p>
          </div>
        </div>
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">{{$categori->name}}</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Alamat IP</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Status</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach($web as $a)
              <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="http://simpeg.menlhk.go.id/images/logo.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$a->name}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">http://simpeg.menlhk.go.id/</span>
                          <p><a href="{{ url('/front/ppid').'/'.$a->id }}">Deskripsi</a></p>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{$a->ip_address}}</strong></td>
                  <?php if ($a->status == 1) {
                    $name_status = "Aktif";
                  }else{
                    $name_status = "Tidak Aktif";
                  }?>
                  <td class="border-0 align-middle"><strong>{{$name_status}}</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                <!-- <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="http://simpeg.menlhk.go.id/images/logo.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">SIMPELBATARA</a></h5><span class="text-muted font-weight-normal font-italic">Sistem Informasi Pengelolaan Aset </span>
                        <p><a href="/ppid">Deskripsi</a></p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>-</strong></td>
                  <td class="align-middle"><strong>Tidak Aktif</strong></td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="http://simpeg.menlhk.go.id/images/logo.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">SIMONA</a></h5><span class="text-muted font-weight-normal font-italic">Sistem Monitoring Aset Kementerian Lingkungan Hidup dan Kehutanan</span>
                        <p><a href="/ppid">Deskripsi</a></p>
                      </div>
                    </div>
                    <td class="align-middle"><strong>-</strong></td>
                    <td class="align-middle"><strong>Tidak Aktif</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="http://simpeg.menlhk.go.id/images/logo.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">ALHP Itjen</a></h5><span class="text-muted font-weight-normal font-italic d-block">Sistem Informasi Analisis Laporan Hasil Pengawasan Itjen KLHK</span>
                        <p><a href="/ppid">Deskripsi</a></p>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>-</strong></td>
                  <td class="border-0 align-middle"><strong>Tidak Aktif</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr> -->
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>


@include('client/footer')