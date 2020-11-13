<div class="form-group row">
    <label class="col-sm-3 col-form-label"><?php echo e($label); ?></label>
    <div class="col-sm-9">
        <select class="col-md-9 form-control custom-select" name="<?php echo e($name); ?>" id="js-role" multiple="multiple">
            <?php $__currentLoopData = $selectData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->name); ?>" <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($i->id==$item->id): ?> selected <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php if($errors->has($name)): ?>
    <div class=" col-md-3"></div>
    <div class="col-md-9">
        <span class="help-block">
            <strong class="text-danger"><?php echo e($errors->first($name)); ?></strong>
        </span>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\klhk\resources\views/components/select2.blade.php ENDPATH**/ ?>