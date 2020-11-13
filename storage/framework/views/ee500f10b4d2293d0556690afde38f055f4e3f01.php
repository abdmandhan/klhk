<?php $__env->startSection('title', 'Edit Tentang'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>    Edit Tentang</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <?php echo $__env->make('layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Sistem</h3>
                    <div class="card-tools">
                        <a href="/tentang/edit/<?php echo e($tentang->id); ?>" class="btn btn-primary">Edit Tentang</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    
                        
                        <thead style="background-color:#BDECB6;">
                            <tr>
                                <th>No</th>
                                <th>Gambar Tentang</th>
                                <th>Deskripsi Tentang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="<?php echo e(asset('vendor/client/images/').'/'.$tentang->gambar); ?>" width="60" height="60"></td>
                                <td><?php echo e($tentang->deskripsi); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('vendor/DataTables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/DataTables/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/DataTables/datatables-demo.js')); ?>"></script>
<script>
                $(document).ready(function () {
                    $('table').DataTable({
                        responsive: true,
                        deferRender: true,
                        scrollY: 400,
                        scrollCollapse: true,
                        scroller: true

                    });
                })
            </script>
<script>
//     $(document).ready(function() {
//     $('#example').DataTable();
// } );

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/tentang/index.blade.php ENDPATH**/ ?>