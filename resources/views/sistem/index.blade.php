<!-- Content Wrapper. Contains page content -->
@extends('adminlte::page')

@section('title','sistem internal KLHK')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Monitoring Sistem Internal</h3>
                </div>

                <div class="card-body">
                    <div class="box-header with-border">
                        <!-- <a href="/sistem/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
                    </div> <br>
                    <table id='example' class="table table-striped table-bordered table-hover table-light" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Web</th>
                                <th scope="col">Deskripsi Sistem</th>
                                <th scope="col">Alamat Url</th>
                                <th scope="col">IP Address</th>
                                <th scope="col">Status Host</th>
                                <th scope="col">Http Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sistem as $si)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</th>
                                <td> {{ $si -> name }}</th>
                                <td>
                                    <div style="white-space: nowrap; width: 100px; overflow: hidden;text-overflow: ellipsis;"> {{ $si -> description}} ... </div>
                                </td>
                                <td> {{ $si -> url_name}}</td>
                                <td> {{ $si -> ip_address}}</td>
                                <td>
                                    <?php
                                    $output = shell_exec('ping -n 1 ' . $si->ip_address);
                                    if (strpos($output, 'out') !== false) {
                                        echo "Terputus";
                                        echo "<center><i class='fa fa-circle'></i></center>";
                                    } elseif (strpos($output, 'expired') !== false) {
                                        echo "Network Error";
                                        echo "<center><i class='fa fa-circle' style='color: red;'></i></center>";
                                    } elseif (strpos($output, 'data') !== false) {
                                        echo "Terhubung";
                                        echo "<center><i class='fa fa-circle' style='color: green;'></i></center>";
                                    } else {
                                        echo "Error Tidak diketahui";
                                        echo "<center><i class='fa fa-circle' style='color: yellow;'></i></center>";
                                    }

                                    ?>
                                </td>

                                <td>
                                    <a href="/sistem/{{$si->id}}/detail" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                </td>
                                <td>
                                    <a href="/sistem/{{$si->id}}/edit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit web {{$si->name }} ?')"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{url('/sistem'.'/'.$si->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Web {{$si->name }} ?')"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            @push('js')
                            {{-- <script>
                                var id = "{{ $si->id }}"
                            $.get(`{{ route('web_status')}}?id=${id}`, function (data) {
                            if (data.status) $(`#status_${id}`).html(
                            "<span class='badge badge-success'>Connect</span>");
                            else $(`.status_${id}`).html(
                            "<span class='badge badge-danger'>Disconnect</span>");
                            console.log("PING WEB : " + data.data.alamat_url + " IP ADDRESS :" + data.data
                            .ip_host + " HASIL: " + data.status);
                            });

                            </script> --}}
                            @endpush
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- Modal -->
<!-- <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span> 
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title">Detail Http Status</h4>
            </div>
            <div class="modal-body">
               <p class="statusMsg"></p> 
                <form role="form">
                <?php
                // $url=$si->alamat_url;
                // $getcode=get_headers($si->alamat_url);

                // for($i=0; $i<count($getcode); $i++){
                // dump(str_replace('HTTP/1.1 ','',($getcode[$i])));
                // }
                ?>
                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div> -->
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    var APP_URL = json(url('/'));
</script>

<script>
    $(document).ready(function() {

        $(document).on("click", ".param-detail", function() {
            this.logId = $(this).data('id');

            $.ajax({
                url: `${APP_URL}/details/${this.logId}`,
                type: 'GET',
                beforeSend: function() {
                    $('.modal-body').empty();
                    $('.modal-body').append(`
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    `);
                },
                success: function(data) {
                    setTimeout(function() {
                        $('.modal-body').empty();
                        $('.modal-body').append('HTTP STATUS: ' + data
                            .http_status);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Date: ' + data
                            .header['Date'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Content-Type: ' + data
                            .header['Content-Type'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Transfer-Encoding: ' + data
                            .header['Transfer-Encoding'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Connection: ' + data
                            .header['Connection'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Set-Cookie: ' + data
                            .header['Set-Cookie'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Cache-Control: ' + data
                            .header['Cache-Control'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('Vary: ' + data
                            .header['Vary'][0]);
                        $('.modal-body').append('<br>');
                        $('.modal-body').append('X-Powered-By: ' + data
                            .header['X-Powered-By'][0]);

                    }, 10);

                }
            });
        });

    });
</script>

@endsection