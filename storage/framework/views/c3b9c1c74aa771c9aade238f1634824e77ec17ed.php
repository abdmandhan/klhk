<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo e($label); ?></label>
    <div class="col-sm-10">
        <select class="custom-select" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>">
            <?php $__currentLoopData = $selectData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>" <?php echo e($isSelected($item->id) ? 'selected="selected"' : ''); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\klhk\resources\views/components/select.blade.php ENDPATH**/ ?>