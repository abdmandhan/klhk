<?php if(@$success): ?>
<div class="alert alert-success"><?php echo e($success); ?></div>
<?php endif; ?>
<?php if(@$error): ?>
<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endif; ?>

<?php if(\Session::has('success')): ?>
<div class="alert alert-success">
    <?php echo \Session::get('success'); ?>

</div>
<?php endif; ?>

<?php if(\Session::has('error')): ?>
<div class="alert alert-danger">
    <?php echo \Session::get('error'); ?>

</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/layouts/message.blade.php ENDPATH**/ ?>