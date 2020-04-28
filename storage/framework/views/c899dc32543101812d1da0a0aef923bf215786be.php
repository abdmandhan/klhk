<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Web List</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Web Kategori</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('web_category.create')); ?>"class="btn btn-primary">Tambah Web Kategori</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    
                        
                        <thead style="background-color:#BDECB6;">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no1 = 1;
                             ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td>
                                    <form action="<?php echo e(route('web_category.destroy',$item->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-link" title="Delete"
                                            onsubmit="confirm('Delete web <?php echo e($item->name); ?> ?')"><i
                                                class="fa fa-trash text-danger"></i></button>
                                    <a href="<?php echo e(route('web_category.edit',$item->id)); ?>" title="Edit"><i
                                            class="fa fa-edit text-primary"></i></a></form>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/web-category/index.blade.php ENDPATH**/ ?>