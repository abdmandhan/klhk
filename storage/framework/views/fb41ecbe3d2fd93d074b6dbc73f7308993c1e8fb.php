<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monitoring</h3>
                    <div class="card-tools">
                        <a href="" class="btn btn-primary">Tambah Data Web</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered table-hover  text-justify">
                    
                        
                        <thead style="background-color:#BDECB6;">
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->web->id); ?></td>
                            <td><?php echo e($item->web->name); ?></td>
                            <td><a href="<?php echo e($item->web->url_name); ?>" target="_blank"><?php echo e($item->web->url_name); ?></a></td>
                            <td><?php echo e($item->web->ip_address); ?></td>
                            <td id="status_<?php echo e($item->id); ?>">
                                <?php if($item->status): ?>
                                <span class="badge badge-success">Connect</span>
                                <?php else: ?>
                                <span class="badge badge-danger">Disconnect</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="" title="Edit"><i class="fa fa-edit text-primary"></i></a>

                                <a href="" title="Hapus"><i class="fa fa-trash text-danger"></i></a>

                                <a href="" title="Detail"><i class="fa fa-eye text-info"></i></a>
                            </td>
                        </tr>
                            <?php $__env->startPush('js'); ?>
                            <script>
                                var id = "<?php echo e($item->id); ?>"
                                $.get( `<?php echo e(route('web_status')); ?>?id=${id}`, function( data ) {
                                    if(data.status) $(`#status_${id}`).html("<span class='badge badge-success'>Connect</span>");
                                    else $(`.status_${id}`).html("<span class='badge badge-danger'>Disconnect</span>");
                                    console.log("PING WEB : "+data.data.web_name+" IP ADDRESS :"+data.data.ip_address+" HASIL: "+data.status);
                                });
                            </script>
                            <?php $__env->stopPush(); ?>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klhk\resources\views/web-monitoring/index.blade.php ENDPATH**/ ?>