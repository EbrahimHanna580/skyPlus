<?php if($crud->hasAccess('create')): ?>
	<a href="<?php echo e(url($crud->route.'/create')); ?>" class="btn btn-primary" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> <?php echo e(trans('backpack::crud.add')); ?> <?php echo e($crud->entity_name); ?></span></a>
<?php endif; ?><?php /**PATH D:\Laravel\skyPlus\vendor\backpack\crud\src\resources\views\crud/buttons/create.blade.php ENDPATH**/ ?>