
<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('assets/back/css/datepicker.css')); ?>">
	
	<style>
	    
	    #dropdownMenuButton{
	            background-color: #5b841b8f;
    color: white;
	        
	    }
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b><?php echo e(request()->input('type') ? request()->input('type') : __('All')); ?> <?php echo e(__('Orders')); ?></b></h3>
                <div class="right">
                <a class="btn btn-primary btn-sm" href="generate-pdf" target="_blank"><i class="fas fa-print"></i> <?php echo e(__('print')); ?></a>
                <a href="<?php echo e(route('back.csv.order.export')); ?>" class="btn btn-info btn-sm d-inline-block"><?php echo e(__('CSV Export')); ?></a>

                  <form class="d-inline-block" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                    <input type="hidden" value="" name="ids[]" id="bulk_delete">
                    <input type="hidden" value="orders" name="table">
                    <button class="btn btn-danger btn-sm"><?php echo e(__('Delete')); ?></button>
                  </form>
                  
              </div>
              </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">

  


			<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
              <th> <input type="checkbox" data-target="order-bulk-delete" class="form-control bulk_all_delete"> </th>
              <th><?php echo e(__('User')); ?></th>
                            <th>رقم الجوال</th>

              <th><?php echo e(__('Total Amount')); ?></th>
              <th>الدفعة الأولي </th>
							<th> الدفعة الشهرية </th>
							<th>شهور التقسيط</th>
							<th>ايصاالات الدفع </th>
							<th><?php echo e(__('Actions')); ?></th>
						</tr>
					</thead>

					<tbody>
              <?php echo $__env->make('back.order.table',compact('datas'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>





<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Update Status?')); ?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body" style="text-align:center">
			<?php echo e(__('You are going to update the status.')); ?> <?php echo e(__('Do you want proceed?')); ?>

		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
            <a href="" class="btn btn-ok btn-success"><?php echo e(__('Update')); ?></a>
		</div>

      </div>
    </div>
  </div>





<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

  <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Confirm Delete?')); ?></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
  </div>

  <!-- Modal Body -->
      <div class="modal-body">
        <?php echo e(__('You are going to delete this order. All contents related with this order will be lost.')); ?> <?php echo e(__('Do you want to delete it?')); ?>

  </div>

  <!-- Modal footer -->
      <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
    <form action="" class="d-inline btn-ok" method="POST">

      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
   <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>

    </form>
  </div>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altajksa/public_html/core/resources/views/back/order/index.blade.php ENDPATH**/ ?>