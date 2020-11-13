@include('client/header')
 <section class="site-section" id="blog-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">{{ $eselon->name }}</h2>
            </div>
          </div>

          <div class="row justify-content-center mb-5">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">Semua</button>
            <button class="btn btn-primary" data-filter=".web">Sistem Publik</button>
            <button class="btn btn-primary" data-filter=".si">Sistem Internal</button>
            </div>
          </div>
  
          <div id="posts" class="row">
          @foreach($web as $a)
            @if($a->id_web_category == 2)
            <div class="item web col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            @else
            <div class="item si col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            @endif
                <div class="h-entry">
                  <a href="single.php">
                    <!-- <img src="{{ asset('client/images/').'/'.$a->image }}" alt="Image" class="img-fluid"> -->
                    <img src="{{ asset('vendor/client/images/').'/'.$a->image }}" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="font-size-regular"><a href="">{{ $a->name }}</a></h2>
                  <?php $nama_kategori = DB::table('web_categories')->where('id', $a->id_web_category)->first();?>
                  <div class="meta mb-4">{{  $nama_kategori->name }} <span class="mx-2">&bullet;</span>2020<span class="mx-2">&bullet;</span> <a href="#">NO DATA</a></div>
                  <div style="white-space: nowrap; width: 295px; overflow: hidden; text-overflow: ellipsis;">{{$a->description}}</div>
                  <p><a href="{{ url('/front/ppid').'/'.$a->id }}">Baca Selanjutnya...</a></p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
@include('client/footer')