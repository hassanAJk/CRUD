 

<?php $__env->startSection('content'); ?>
<div class="mx-auto col-md-6 col-lg-6 col-sm-6 col-xl-6">
<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
        
    <h5 class="card-title"><h3>Title Of Book:</h3> <?php echo e($detail->title); ?></h5>
     <p class="card-text"><h3>Total No Of pages:</h3> <?php echo e($detail->pages); ?></p>
     <p class="card-text"><h3>Book Summary: </h3><?php echo e($detail->description); ?></p>
   
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64version\www\RolesAndPermissions\resources\views/details.blade.php ENDPATH**/ ?>