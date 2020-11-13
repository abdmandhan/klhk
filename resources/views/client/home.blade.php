@include('client/header')
<div class="site-blocks-cover" style="background-image: url('{{asset('vendor/client/images/hero_2.jpg')}}');" id="home-section">

<div class="container">
  <div class="row align-items-center justify-content-center">


    <div class="col-md-10 mt-lg-5 text-center">
      <!-- <div class="single-text owl-carousel"> -->
        <!-- <div class="slide"> -->
          <h1 class="text-uppercase">MONITORING KLHK</h1>
          <p class="mb-5 desc">Monitoring Sistem Publik dan Sistem Internal KLHK</p>
          <!-- <div data-aos="fade-up" data-aos-delay="100"> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

  <div class="site-section cta-big-image" id="about-section">
<!-- <div class="container"> -->
  <div class="row mb-5 justify-content-center">
    <div class="col-md-8 text-center">
      <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">TENTANG MONITORING KLHK</h2>
      <p class="lead" data-aos="fade-up" data-aos-delay="100"></p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
      <figure class="circle-bg">
      <img src="{{url('vendor/client/images/'.$tentang->gambar)}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </figure>
    </div>
    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
      <p>{{$tentang->deskripsi}}</p>
    </div>
  </div>
 <section class="site-section" id="blog-section">
<div class="container">
  <div class="row mb-5">
    <div class="col-12 text-center" data-aos="fade">
      <h2 class="section-title mb-3">Sistem Publik dan Sistem Internal Terkini!</h2>
    </div>
  </div>

  <div class="row">
    @foreach($web as $a)
    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
      <div class="h-entry">
        <a href="single.php">
          <img src="{{ asset('vendor/client/images/').'/'.$a->image }}" alt="Image" class="img-fluid">
        </a>
        <h2 class="font-size-regular"><a href="#">{{$a->name}}</a></h2>
        <?php $nama_kategori = DB::table('web_categories')->where('id', $a->id_web_category)->first();?>
        <div class="meta mb-4">{{$nama_kategori->name}} <span class="mx-2">&bullet;</span> <span class="mx-2">&bullet;</span> 
        <?php if ($a->status == 1) {
            $name_status = "Aktif";
          }else{
            $name_status = "Tidak Aktif";
          }?>
        <a href="#">{{$name_status}}</a></div> <div style="white-space: nowrap; width: 295px; overflow: hidden; text-overflow: ellipsis;"><p>{{$a->description}}
        <!-- di dalamnya terdapat informasi seputar KSDAE, seperti profil, sejarah, berita -->
        </p></div>
        <p><a href="{{ url('/front/ppid').'/'.$a->id }}">Baca Selanjutnya...</a></p>
      </div> 
    </div>
    @endforeach
    
  </div>
</div>
</section>
<section class="site-section bg-light" id="contact-section" data-aos="fade">
<div class="container">
  <div class="row mb-5">
    <div class="col-12 text-center">
      <h2 class="section-title mb-3">Kontak Kami</h2>
    </div>
  </div>
  <div class="row mb-5">



    <div class="col-md-4 text-center">
      <p class="mb-4">
        <span class="icon-room d-block h2 text-primary"></span>
        <span>Gedung Manggala Wanabakti Blok I lt. 2 Jl. Jenderal Gatot Subroto
                              - Jakarta 10270, PO Box 6505, Indonesia</span>
      </p>
    </div>
    <div class="col-md-4 text-center">
      <p class="mb-4">
        <span class="icon-phone d-block h2 text-primary"></span>
        <a href="#">(+62) 21 5705086</a>
      </p>
    </div>
    <div class="col-md-4 text-center">
      <p class="mb-0">
        <span class="icon-mail_outline d-block h2 text-primary"></span>
        <a href="#">pusdatin@menlhk.go.id</a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 mb-5">
    </div>
  </div>
  </div>
  </div>
  </div>
</div>
</section>
@include('client/footer')
