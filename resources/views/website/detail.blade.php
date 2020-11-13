@extends('adminlte::page')

<!-- Content Wrapper. Contains page content -->
@section('title', 'Detail Status Http')

@section('content')


@section('content')
<div cclass="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Detail Status Http</h3>
        </div>
        <div class="card-body">
          <form role="form" method="post" action="/website/{{$detail->id}}/detail">
            <?php
            $url = $detail->url_name;
            $getcode = get_headers($detail->url_name);

            // dd($getcode);
            // for($i=0; $i<count($getcode); $i++){
            // echo();
            // }
            ?>
            <p>HTTP STATUS : <?= str_replace('HTTP/1.1 ', '', ($getcode[0])); ?></p>
            <p><?= $getcode[2]; ?></p>
            <p><?= $getcode[3]; ?></p>
            <p><?= $getcode[4]; ?></p>
            <div class="box-footer">
              <a href="/website" class="btn btn-primary">Kembali</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
@endsection