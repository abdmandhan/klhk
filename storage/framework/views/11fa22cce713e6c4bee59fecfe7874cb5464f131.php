<?php $__env->startSection('title', 'Profil Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
         <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('admin.create')); ?>"class="btn btn-primary">Tambah Data Admin</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    
                    <thead style="background-color:#BDECB6;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Eselon</th>
                            <th>Email</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no1 = 1;
                         ?>
                        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no1++); ?></td>
                            <td><?php echo e($a->name); ?></td>
                            <td><?php echo e($a->eselon); ?></td>
                            <td><?php echo e($a->email); ?></td>
                            
                            <td>
                                 <form action="<?php echo e(route('admin.destroy',$a->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-link" title="Delete"
                                        onsubmit="confirm('Delete admin <?php echo e($a->name); ?> ?')"><i
                                            class="fa fa-trash text-danger"></i></button>
                                </form>
                                <a href="<?php echo e(route('admin.edit',$a->id)); ?>" title="Edit"><i
                                        class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo e(route('admin.show',$a->id)); ?>" title="Show"><i
                                        class="fa fa-eye text-info"></i></a>
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
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/admin/index.blade.php ENDPATH**/ ?>