@include('client/header')
<div class="site-navbar" id="home-section">
      <div class="container">

      </div>
    </div>
    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Daftar Sistem Publik</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Daftar Sistem Publik yang ada di Kementerian Lingkungan Hidup dan Kehutanan Indonesia</p>
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
                    <div class="p-2 px-3 text-uppercase">Sistem Publik</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">IP Adress</div>
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
                        <h5 class="mb-0"> <a href="http://ppid.menlhk.go.id/" class="text-dark d-inline-block align-middle">{{$a->name}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Portal resmi Sekretariat Jenderal</span>
                        <p><a href="/ppid">Deskripsi</a></p>
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
                        <h5 class="mb-0"><a href="http://itjen.menlhk.go.id/" class="text-dark d-inline-block">ITJEN</a></h5><span class="text-muted font-weight-normal font-italic">Portal resmi Inspektorat Jenderal </span>
                        <p><a href="/ppid">Deskripsi</a></p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>103.52.213.81</strong></td>
                  <td class="align-middle"><strong>Aktif</strong></td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="http://simpeg.menlhk.go.id/images/logo.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">SIMONA</a></h5><span class="text-muted font-weight-normal font-italic">Sistem Monitoring Aset Kementerian Lingkungan Hidup dan Kehutanan</span>
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