<form action="<?php echo e(route('laravelroles::roles.store')); ?>" method="POST" accept-charset="utf-8" id="store_role_form" class="mb-0 needs-validation" enctype="multipart/form-data" role="form" >
    <?php echo e(method_field('POST')); ?>

    <div class="card-body">
        <?php echo $__env->make('laravelroles::laravelroles.forms.role-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="card-footer">
        <div class="row ">
            <div class="col-md-6">
                <span data-toggle="tooltip" title="<?php echo trans('laravelroles::laravelroles.tooltips.save-role'); ?>">
                    <button type="submit" class="btn btn-success btn-lg btn-block" value="save" name="action">
                        <i class="fa fa-save fa-fw">
                            <span class="sr-only">
                                 <?php echo trans("laravelroles::laravelroles.forms.roles-form.buttons.save-role.sr-icon"); ?>

                            </span>
                        </i>
                        <?php echo trans("laravelroles::laravelroles.forms.roles-form.buttons.save-role.name"); ?>

                    </button>
                </span>
            </div>
        </div>
    </div>
</form>

<?php echo $__env->make('laravelroles::laravelroles.scripts.form-inputs-helpers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\wamp64version\www\RolesAndPermissions\vendor\jeremykenedy\laravel-roles\src/resources/views//laravelroles/forms/create-role-form.blade.php ENDPATH**/ ?>