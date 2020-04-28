<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo e($label); ?></label>
    <div class="<?php echo e($type=='checkbox' ? 'col-sm-1':'col-sm-10'); ?>">
        <input type="<?php echo e($type); ?>" class="form-control" id="<?php echo e($name); ?>" placeholder="<?php echo e($label); ?>" name="<?php echo e($name); ?>"
            value=<?php echo e($value); ?> <?php echo e($isChecked($value) ? 'checked':''); ?> <?php echo e($disabled ? 'disabled':''); ?>>

    </div>

    <?php if($type=='checkbox'): ?>
    <div class="col-sm-9"></div>
    <?php endif; ?>

    <?php if($errors->has($name)): ?>
    <div class="col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger"><?php echo e($errors->first($name)); ?></strong>
        </span>
    </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\klhk\resources\views/components/input.blade.php ENDPATH**/ ?>