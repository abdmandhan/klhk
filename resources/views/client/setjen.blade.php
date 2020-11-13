@include('client/header')
 <section class="site-section" id="blog-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Sekretariat Jenderal</h2>
            </div>
          </div>

          <div class="row justify-content-center mb-5">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">Semua</button>
            <button class="btn btn-primary" data-filter=".web">Website</button>
            <button class="btn btn-primary" data-filter=".si">Sistem Informasi</button>
            </div>
          </div>

          <div id="posts" class="row">
            <div class="item web col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                  <a href="single.php">
                    <img src="vendor/client/images/img_4.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="font-size-regular"><a href="">Biro Kepegawaian</a></h2>
                  <div class="meta mb-4">Website <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">NO DATA</a></div>
                  <p>Biro Kepegawaian dan Organisasi mempunyai tugas melaksanakan
                    pembinaan dan pengelolaan administrasi kepegawaian dan kelembagaan di lingkungan kementerian.</p>
                  <p><a href="#">Baca Selanjutnya...</a></p>
                </div>
              </div>
            <div class="item si col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="h-entry">
                <a href="single.php">
                  <img src="{{url('vendor/client/images/img_3a.jpg')}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="http://simpeg.menlhk.go.id/">Sistem Informasi Manajemen Kepegawaian</a></h2>
                <div class="meta mb-4">Sistem Informasi <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">AKTIF</a></div>
                <p>Sistem Informasi Manajemen Kepegawaian
                    Kementerian Lingkungan Hidup dan Kehutanan</p>
                <p><a href="#">Baca Selanjutnya...</a></p>
              </div>
            </div>
            <div class="item web col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="h-entry">
                <a href="single.php">
                  <img src="{{url('vendor/client/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="#">Program Kampung Iklim</a></h2>
                <div class="meta mb-4">Website <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">NO DATA</a></div>
                <p>Program berlingkup nasional yang dikelola oleh KLHK untuk menguatkan kapasitas dan
                    pengakuan terhadap upaya adaptasi dan mitigasi perubahan iklim.</p>
                <p><a href="#">Baca Selanjutnya...</a></p>
              </div>
            </div>
            <div class="item si col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="h-entry">
                <a href="single.php">
                  <img src="{{url('vendor/client/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="http://simpeg.menlhk.go.id/">SIMPELBATARA</a></h2>
                <div class="meta mb-4">Sistem Informasi <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">AKTIF</a></div>
                <p>Sistem Informasi Pengelolaan Aset Gedung Bangunan Tanah dan Kendaraan Dinas Bermotor (SIMPELBATARA) Biro Umum Kementerian Lingkungan Hidup dan Kehutanan</p>
                <p><a href="#">Baca Selanjutnya...</a></p>
              </div>
            </div>
            <div class="item si col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="h-entry">
                <a href="single.php">
                  <img src="{{url('vendor/client/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="http://simpeg.menlhk.go.id/">SIMONA</a></h2>
                <div class="meta mb-4">Sistem Informasi <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">AKTIF</a></div>
                <p>Sistem Monitoring Aset Kementerian Lingkungan Hidup dan Kehutanan</p>
                <p><a href="#">Baca Selanjutnya...</a></p>
              </div>
            </div>
            <div class="item web col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="h-entry">
                <a href="single.php">
                  <img src="{{url('vendor/client/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="http://simpeg.menlhk.go.id/">PPID Sekretariat Jenderal</a></h2>
                <div class="meta mb-4">Website <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">AKTIF</a></div>
                <p>Website Pejabat Pengelola Informasi dan Dokumentasi (PPID) Sekretariat Jenderal
                    Kementerian Lingkungan Hidup dan Kehutanan</p>
                <p><a href="/ppid">Baca Selanjutnya...</a></p>
              </div>
            </div>

          </div>
        </div>
      </section>
@include('client/footer')
