<div class="form-group row custom-switch ">
    <label class="col-sm-2 col-2-form-label"><?php echo e($label); ?></label>
    <input type="checkbox" class="custom-control-input col-sm-10" id="customSwitch1" name="<?php echo e($name); ?>"
        value="<?php echo e($value); ?>" <?php echo e($isChecked($value) ? 'checked':''); ?>>
    <label class="custom-control-label" for="customSwitch1"></label>

    <?php if($errors->has($name)): ?>
    <div class="col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger"><?php echo e($errors->first($name)); ?></strong>
        </span>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\klhk\resources\views/components/statustoggle.blade.php ENDPATH**/ ?>