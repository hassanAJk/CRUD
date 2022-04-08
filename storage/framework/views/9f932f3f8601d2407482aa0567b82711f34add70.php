<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   <?php if(Auth::user()->hasRole('tester')): ?> You are logged in! <?php endif; ?>
    




<div class="row m-3">
  <a   href="<?php echo e(route('create.records','create')); ?>" class="btn btn-primary ml-2">Add Details</a>
  </div>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Total pages</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th >Allowed Permission</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>               
    <tr>
      <td><?php echo e($result->pages); ?></td>
      <td><?php echo e($result->title); ?></td>
      <td><?php echo e($result->description); ?></td>
      <td>     
    <a  href="<?php echo e(route('show.records',$result->id)); ?>" class="btn btn-primary  btn-sm ml-2">View</a>
  </td>
      <?php if(Auth::user()->hasRole('admin')): ?> 
      <td>
        <a   href="<?php echo e(route('edit.records',$result->id,'edit')); ?>" class="btn  btn-sm btn-warning ml-2">Edit </a>
      </td>

      <td>
       <form method="POST" action="<?php echo e(route('Delete.Record',$result->id,'delete')); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('DELETE'); ?>
    <button class="btn btn-danger ml-2">Delete</button>
</form></td>
<?php endif; ?>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

                    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64version\www\RolesAndPermissions\resources\views/home.blade.php ENDPATH**/ ?>