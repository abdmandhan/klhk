<?php if((isset($item['topnav_user']) && $item['topnav_user'])): ?>
  <?php echo $__env->make('adminlte::partials.menuitems.menu-item-top-nav', $item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\klhk\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/menuitems/menu-item-top-nav-user.blade.php ENDPATH**/ ?>