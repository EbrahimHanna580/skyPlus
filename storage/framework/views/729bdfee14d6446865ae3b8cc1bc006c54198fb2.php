<?php if($crud->hasAccess('bulkClone') && $crud->get('list.bulkActions')): ?>
	<a href="javascript:void(0)" onclick="bulkCloneEntries(this)" class="btn btn-sm btn-secondary bulk-button"><i class="fa fa-clone"></i> <?php echo e(trans('backpack::crud.clone')); ?></a>
<?php endif; ?>

<?php $__env->startPush('after_scripts'); ?>
<script>
	if (typeof bulkCloneEntries != 'function') {
	  function bulkCloneEntries(button) {

	      if (typeof crud.checkedItems === 'undefined' || crud.checkedItems.length == 0)
	      {
  	        new Noty({
	          type: "warning",
	          text: "<strong><?php echo trans('backpack::crud.bulk_no_entries_selected_title'); ?></strong><br><?php echo trans('backpack::crud.bulk_no_entries_selected_message'); ?>"
	        }).show();

	      	return;
	      }

	      var message = "Are you sure you want to clone these :number entries?";
	      message = message.replace(":number", crud.checkedItems.length);

	      // show confirm message
	      swal({
			  title: "<?php echo trans('backpack::base.warning'); ?>",
			  text: message,
			  icon: "warning",
			  buttons: {
			  	cancel: {
				  text: "<?php echo trans('backpack::crud.cancel'); ?>",
				  value: null,
				  visible: true,
				  className: "bg-secondary",
				  closeModal: true,
				},
			  	delete: {
				  text: "<?php echo e(trans('backpack::crud.clone')); ?>",
				  value: true,
				  visible: true,
				  className: "bg-primary",
				}
			  },
			}).then((value) => {
				if (value) {
					var ajax_calls = [];
		      		var clone_route = "<?php echo e(url($crud->route)); ?>/bulk-clone";

					// submit an AJAX delete call
					$.ajax({
						url: clone_route,
						type: 'POST',
						data: { entries: crud.checkedItems },
						success: function(result) {
						  // Show an alert with the result
		    	          new Noty({
				            type: "success",
				            text: "<strong>Entries cloned</strong><br>"+crud.checkedItems.length+" new entries have been added."
				          }).show();

						  crud.checkedItems = [];
						  crud.table.ajax.reload();
						},
						error: function(result) {
						  // Show an alert with the result
		    	          new Noty({
				            type: "danger",
				            text: "<strong>Cloning failed</strong><br>One or more entries could not be created. Please try again."
				          }).show();
						}
					});
				}
			});
      }
	}
</script>
<?php $__env->stopPush(); ?><?php /**PATH D:\Laravel\skyPlus\vendor\backpack\crud\src\resources\views\crud/buttons/bulk_clone.blade.php ENDPATH**/ ?>