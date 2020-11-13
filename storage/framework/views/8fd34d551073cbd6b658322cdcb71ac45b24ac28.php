<?php $__env->startSection('title', 'Daftar Admin'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>User Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('user-management.update',$data->id)); ?>" method="post">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Nama</label>
                            <input type="text" class="col-md-9 form-control" placeholder="Nama" name="name"
                                value="<?php echo e($data->name); ?>">
                            <?php if($errors->has('name')): ?>
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Email</label>
                            <input type="email" class="col-md-9 form-control" placeholder="Email" name="email"
                                value="<?php echo e($data->email); ?>">
                            <?php if($errors->has('email')): ?>
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                         <?php if (isset($component)) { $__componentOriginal7a870ab30d2a3e01137ad43d5d71fce536bc0e8c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select2::class, ['label' => 'Roles','name' => 'roles[]','value' => $data->roles]); ?>
<?php $component->withName('select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal7a870ab30d2a3e01137ad43d5d71fce536bc0e8c)): ?>
<?php $component = $__componentOriginal7a870ab30d2a3e01137ad43d5d71fce536bc0e8c; ?>
<?php unset($__componentOriginal7a870ab30d2a3e01137ad43d5d71fce536bc0e8c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                        <div class="form-group row">
                            <label for="" class="col-md-3">Password</label>
                            <input type="password" class="col-md-9 form-control" placeholder="Password" name="password">
                            <?php if($errors->has('password')): ?>
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Confirm Password</label>
                            <input type="password" class="col-md-9 form-control" placeholder="Confirm Password"
                                name="password_confirmation">
                            <?php if($errors->has('password_confirmation')): ?>
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <br>
                        <a href="<?php echo e(route('user-management.index')); ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $("#js-role").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/user-management/edit.blade.php ENDPATH**/ ?>