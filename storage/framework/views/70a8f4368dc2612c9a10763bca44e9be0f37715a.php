<!-- Content Wrapper. Contains page content -->


<?php $__env->startSection('title','sistem publik KLHK'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Monitoring Sistem Publik</h3>
                </div>

                <div class="card-body">
                    <div class="box-header with-border">
                        <!-- <a href="/website/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
                        <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                    </div> <br>
                    <table id='example' class="table table-striped table-bordered table-hover table-light" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Sistem</th>
                                <th>Deskripsi Sistem</th>
                                <th>Alamat Url</th>
                                <th>IP Address</th>
                                <th>Status Host</th>
                                <th>Status Http</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td> <?php echo e($webs -> name); ?></td>
                                <td>
                                    <div style="white-space: nowrap; width: 100px; overflow: hidden;text-overflow: ellipsis;"> <?php echo e($webs -> description); ?> ... </div>
                                </td>
                                <td> <?php echo e($webs -> url_name); ?></td>
                                <td> <?php echo e($webs -> ip_address); ?></td>
                                <td>
                                    <!-- <?php if($webs->status): ?>
                                    <span class="badge badge-success">Connect</span>
                                    <?php else: ?>
                                    <span class="badge badge-danger">Disconnect</span>
                                    <?php endif; ?> -->
                                    <?php
                                    //$host='$webs->ip_host';
                                    $output = shell_exec('ping -n 1 ' . $webs->ip_address);
                                    //echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it
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
                                    <!-- <button class="btn btn-info" data-toggle="modal" data-target="#modalForm"><i class="fa fa-flags"></i> Detail</button>  -->
                                    <!-- <button class="btn btn-sm btn-info param-detail" type="button" data-id="<?php echo e($webs->id); ?>" data-toggle="modal" data-target="#exampleModalLong">Detail
                                    </button> -->
                                    <!-- <?php
                                            // $url=$webs->alamat_url;
                                            // $getcode=get_headers($webs->alamat_url);

                                            // for($i=0; $i<count($getcode); $i++){
                                            // dump(str_replace('HTTP/1.1 ','',($getcode[$i])));
                                            // }
                                            ?> -->
                                    <a href="/website/<?php echo e($webs->id); ?>/detail" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                </td>
                                <td>
                                    <a href="/website/<?php echo e($webs->id); ?>/edit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit web <?php echo e($webs->name); ?> ?')"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo e(url('/website'.'/'.$webs->id)); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Web <?php echo e($webs->name); ?> ?')"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php $__env->startPush('js'); ?>
                            
                            <?php $__env->stopPush(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                // $url=$webs->alamat_url;
                // $getcode=get_headers($webs->alamat_url);

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
<!-- <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog"
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
                <p class="statusMsg"></p> 
                <form role="form">
                <?php
                // $url=$webs->alamat_url;
                // $getcode=get_headers($webs->alamat_url);

                // for($i=0; $i<count($getcode); $i++){
                // dump(str_replace('HTTP/1.1 ','',($getcode[$i])));
                // }
                ?>
                </form>
            </div>
        </div>
    </div>
</div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    var APP_URL = json(url('/'));
</script>

<!-- <script>
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

</script> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/website/index.blade.php ENDPATH**/ ?>