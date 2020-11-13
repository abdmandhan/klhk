

<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('title', 'Detail Status Http'); ?>

<?php $__env->startSection('content'); ?>


<?php $__env->startSection('content'); ?>
<div cclass="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Detail Status Http</h3>
        </div>
        <div class="card-body">
          <form role="form" method="post" action="/website/<?php echo e($detail->id); ?>/detail">
            <?php
            $url = $detail->url_name;
            $getcode = get_headers($detail->url_name);

            // dd($getcode);
            // for($i=0; $i<count($getcode); $i++){
            // echo();
            // }
            ?>
            <p>HTTP STATUS : <?= str_replace('HTTP/1.1 ', '', ($getcode[0])); ?></p>
            <p><?= $getcode[2]; ?></p>
            <p><?= $getcode[3]; ?></p>
            <p><?= $getcode[4]; ?></p>
            <div class="box-footer">
              <a href="/website" class="btn btn-primary">Kembali</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/website/detail.blade.php ENDPATH**/ ?>