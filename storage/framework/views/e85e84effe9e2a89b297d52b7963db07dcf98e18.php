<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2> Profil </h2>
                </div>
                <form action="" method="POST">
                    <div class="card-body">
                        <?php echo csrf_field(); ?>
                        <label for="exampleInputEmail1">Nama :</label>
                        <input type="text" name="name" placeholder="Admin" /><br>
                        <label for="exampleInputEmail1">Email :</label>
                        <input type="email" name="email" placeholder="admin@gmail.com" /><br>
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" name="password" placeholder="********" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="<?php echo e(('/profil')); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/profil/edit.blade.php ENDPATH**/ ?>