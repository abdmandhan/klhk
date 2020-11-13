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
          <form role="form" method="post" action="/sistem/{{$detail->id}}/detail">
            <?php
            $url = $detail->url_name;
            $getcode = get_headers($detail->url_name);

            for ($i = 0; $i < count($getcode); $i++) {
              dump(str_replace('HTTP/1.1 ', '', ($getcode[$i])));
            }
            ?>
            <div class="box-footer">
              <a href="/sistem" class="btn btn-primary">Kembali</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
@endsection