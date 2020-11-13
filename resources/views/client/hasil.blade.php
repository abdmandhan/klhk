@include('client/header')
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                        Hasil dari pencarian: <span class="text-navy">{{ $search }}</span>
                    </h2>

                    @foreach($web as $val)
                    <div class="hr-line-dashed"></div>
                    <div class="search-result">
                    <?php $nama_kategori = DB::table('web_categories')->where('id', $val->id_web_category)->first();?>
                        <h3><a href="{{ $val->url_name }}">{{$val->name}} ({{ $nama_kategori->name }})</a></h3>
                        <a href="#" class="search-link">{{ $val->url_name }}</a>
                        <div style="white-space: nowrap; width: 295px; overflow: hidden; text-overflow: ellipsis;">{{$val->description}}</div>
                            <p><a href="{{ url('/front/ppid').'/'.$val->id }}">Baca Selanjutnya...</a></p>
                        </div>
                    @endforeach
                    {{ $web->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('client/footer')
