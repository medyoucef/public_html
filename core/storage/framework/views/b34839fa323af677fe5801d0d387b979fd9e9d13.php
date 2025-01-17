<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('assets/back/css/datepicker.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3 class="mb-0 bc-title"><b><?php echo e(__('Highlight Product')); ?></b></h3>
            <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.item.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
        </div>
    </div>
</div>


<!-- Form -->
<div class="row">

<div class="col-xl-12 col-lg-12 col-md-12">
	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="<?php echo e(route('back.item.highlight.update',$item->id)); ?>"
									method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('POST'); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="is_type"> حدد القسم*</label>
										<select name="is_type" id="is_type" class="form-control" >
											<option value="undefine" <?php echo e($item->is_type == 'undefine' ? 'selected' : ''); ?>>غير محدد</option>
											<option value="new" <?php echo e($item->is_type == 'new' ? 'selected' : ''); ?> > جوالات سامسونج </option>
											<option value="feature" <?php echo e($item->is_type == 'feature' ? 'selected' : ''); ?> >   جوالات أيفون15 </option>
											<option value="top" <?php echo e($item->is_type == 'top' ? 'selected' : ''); ?> >     أيفون 14 برو ماكس </option>
											<option value="best" <?php echo e($item->is_type == 'best' ? 'selected' : ''); ?> >     جوالات ايفون  13</option>
 											<option value="healthy_and_beauty" <?php echo e($item->healthy_and_beauty == 'healthy_and_beauty' ? 'selected' : ''); ?> >الصحة والجمال</option>
										</select>
									</div>

									<div class="form-group show-datepicker <?php echo e($item->is_type =='flash_deal' ? '' : 'd-none'); ?>">
										<label for="slug"><?php echo e(__('Enter Date')); ?> *</label>
										<input type="text" name="date" class="form-control datepicker" id="datepicker"
											id="slug"
											placeholder="<?php echo e(__('Enter Date')); ?>"
											value="<?php echo e($item->date); ?>" >
									</div>



									<div class="form-group">
											<button type="submit" class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
									</div>
									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u290663640/domains/webookriyadhseason.com/public_html/core/resources/views/back/item/highlight.blade.php ENDPATH**/ ?>