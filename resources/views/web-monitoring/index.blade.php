@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Web Monitoring</h3>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover table-light"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Web Name</th>
                                <th>Url</th>
                                <th>IP Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->web->name }}</td>
                                <td>{{ $item->web->url_name }}</td>
                                <td>{{ $item->web->ip_address }}</td>
                                <td id="status_{{ $item->id }}">
                                    @if ($item->status)
                                    <span class="badge badge-success">Connect</span>
                                    @else
                                    <span class="badge badge-danger">Disconnect</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info param-detail" type="button" data-toggle="modal"
                                        data-id="{{ $item->id }}" data-target="#exampleModalLong">Detail
                                    </button>
                                </td>
                            </tr>
                            @push('js')
                            {{-- <script>
                                var id = "{{ $item->id }}"
                            $.get(`{{ route('web_status')}}?id=${id}`, function (data) {
                            if (data.status) $(`#status_${id}`).html(
                            "<span class='badge badge-success'>Connect</span>");
                            else $(`.status_${id}`).html(
                            "<span class='badge badge-danger'>Disconnect</span>");
                            console.log("PING WEB : " + data.data.web_name + " IP ADDRESS :" + data.data
                            .ip_address + " HASIL: " + data.status);
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
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    var APP_URL = @json(url('/'));

</script>

<script>
    $(document).ready(function () {

        $(document).on("click", ".param-detail", function () {
            this.logId = $(this).data('id');

            $.ajax({
                url: `${APP_URL}/details/${this.logId}`,
                type: 'GET',
                beforeSend: function () {
                    $('.modal-body').empty();
                    $('.modal-body').append(`
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    `);
                },
                success: function (data) {
                    setTimeout(function () {
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

@stop
