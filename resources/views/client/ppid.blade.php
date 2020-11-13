@include ('client/header')
    <!-- <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">PPID</h2>
         </div>
        </div>
    </div> -->
            <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content">
            <div class="row mb-5">
              <div class="col-lg-8">
                <figure> 
                </ul><img src="{{ asset('vendor/client/images/').'/'.$web->image }}" alt="" class="img-fluid">
                <?php $nama_kategori = DB::table('web_categories')->where('id', $web->id_web_category)->first();?>
                  <figcaption>{{$nama_kategori->name}}</figcaption></figure>
              </div>
            </div>
            <h1 class="section-title mb-3">{{$web->name}}</h1>
            <p>{{$web->description}}</p>
            <!-- <p align="justify">Keterbukaan informasi merupakan salah satu pilar penting untuk mendorong terciptanya iklim transparasi dalam pelaksanaan tata pemerintahan yang baik (good governance). Dengan diberlakunya Undang-undang 14 Tahun 2008 tentang Keterbukaan Informasi Publik , sejak 1 Mei 2010 pemerintah sebagai penyelenggara program pembangunan dan pelayanan publik wajib membuka akses layanan informasi kepada masyarakat.</p>

            <blockquote>
            <p align="justify">Dalam Undang-undang Keterbukaan Informasi Publik diatur mengenai kewajiban badan publik negara dan badan publik non negara untuk memberikan pelayanan informasi secara terbuka, transparan dan bertanggung jawab kepada masyarakat. Berdasarkan Undang- undang, semua lembaga publik berkewajiban membuka akses atas informasi secara wajar terhadap publik. Semua perangkat pemerintah harus siap untuk membuka akses informasi seluas-luasnya bagi masyarakat.</p>
          </blockquote> 

            <p align="justify">
Sesuai dengan amanat pasal 13 UU No.14 Tahun 2008, Kementerian Lingkungan Hidup dan Kehutanan sebagai salah satu Badan Publik telah membentuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) melalui Keputusan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor : SK. 185/MENLHK/SETJEN/HMS.3/4/2017 tentang Pejabat Pengelola Informasi dan Dokumentasi (PPID) Lingkup Kementerian Lingkungan Hidup dan Kehutanan . Dengan terbentuknya Pejabat Pengelola Informasi dan Dokumentasi (PPID) pemohon informasi sesuai dengan haknya dapat memperoleh informasi publik yang dihasilkan oleh Kementerian Lingkungan Hidup dan Kehutanan sesuai dengan ketentuan dalam UU No. 14 Tahun 2008.

Untuk mengatur pelaksanaan pelayanan informasi melalui PPID di lingkungan Kementerian Lingkungan Hidup dan Kehutanan, maka disusun Peraturan Menteri Lingkungan Hidup dan Kehutanan P.18 Tahun 2018 tentang Pelayanan Informasi Publik di lingkungan Kementerian Lingkungan Hidup dan Kehutanan.</p> -->
    </div>     
     </div>
     </div>
     </section>



@include('client/footer')