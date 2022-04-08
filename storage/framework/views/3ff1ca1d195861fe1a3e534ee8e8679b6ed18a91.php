<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="mx-auto col-md-6 col-lg-6 col-sm-6 col-xl-6 bg-white">
<form method="POST" action="<?php echo e(route('updatedRecords',$Books->id)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Title</label>
    <input type="text" name="title" value="<?php echo e($Books->title); ?>" class="form-control" id="exampleFormControlInput1">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Enter Pages</label>
    <input type="text" name="pages" value="<?php echo e($Books->pages); ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example Description About company</label>
    <textarea class="form-control" value="<?php echo e($Books->description); ?>"  name="description" id="exampleFormControlTextarea1" rows="3"><?php echo e($Books->description); ?></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">update</button>
    </div>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64version\www\RolesAndPermissions\resources\views/edit.blade.php ENDPATH**/ ?>