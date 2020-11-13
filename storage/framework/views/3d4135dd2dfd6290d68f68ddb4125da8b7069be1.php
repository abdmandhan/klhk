<?php $__env->startSection('title', 'Daftar Sistem'); ?>

<?php $__env->startSection('content_header'); ?>
<h1> Daftar Sistem</h1>
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
                        <a href="<?php echo e(route('web.create')); ?>" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover text-justify">
                            <thead style="background-color:#BDECB6;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sistem</th>
                                    <th>Nama Eselon</th>
                                    <th>Kategori Sistem</th>
                                    <th>Url</th>
                                    <th>Ip Address</th>
                                    <!-- <th>Deskripsi</th> -->
                                    <th>Status</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no1 = 1;
                                ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no1++); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->eselon['name']); ?></td>
                                    <td><?php echo e($item->webcategory['name']); ?></td>
                                    <td><a href="<?php echo e($item->url_name); ?>" target="_blank"><?php echo e($item->url_name); ?></a></td>
                                    <td><?php echo e($item->ip_address); ?></td>
                                    <!-- <td><?php echo e($item->description); ?></td> -->
                                    <td>
                                        <?php if($item->status): ?>
                                        <span class="badge badge-success">Aktif</span>
                                        <?php else: ?>
                                        <span class="badge badge-danger">Non-Aktif</span>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <!-- <td><a href="<?php echo e($item->image); ?>" target="_blank"><?php echo e($item->image); ?></a></td> -->
                                    <td><img src="<?php echo e(asset('vendor/client/images/'.$item->image)); ?>" width="60" height="60"></td>
                                    <td>
                                        <form action="<?php echo e(route('web.destroy',$item->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-link" title="Delete" onsubmit="confirm('Delete web <?php echo e($item->name); ?> ?')"><i class="fa fa-trash text-danger " style="font-size: 20px"></i></button>
                                        </form>
                                        <a href="<?php echo e(route('web.edit',$item->id)); ?>" title="Edit"><i class="fa fa-edit text-primary" style="font-size: 20px"></i></a>
                                        <a href="<?php echo e(route('web.show',$item->id)); ?>" title="Show"><i class="fa fa-eye text-info" style="font-size: 20px"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        $(document).ready(function() {
            $('table').DataTable({
                responsive: true,
                deferRender: true,
                scrollY: 400

            });
        })
    </script>
    <script>
        //     $(document).ready(function() {
        //     $('#example').DataTable();
        // } );

        document.onsubmit = function() {
            return confirm('Ingin Menghapus?');
        }
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/web/index.blade.php ENDPATH**/ ?>