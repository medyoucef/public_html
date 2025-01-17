<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->

    <?php if(session()->has('multipledomain')): ?>
        <div class="alert alert-danger" style="background-color: #FFE4E4;" id="license_alert">
            <strong>One Purchase Code Use in multiple domain :</strong>
            <?php $__currentLoopData = session()->get('multipledomain'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p style="margin-bottom: 0px;color: #155724;"><?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <hr>
            <strong>
                <?php echo e(__('Envato not allow to install script multiple domin using one purchase code. ')); ?>

                <br>
                <?php echo e(__('One purched codes for one Domin.
                Author can take action any time for that.')); ?>

                <br>
                <hr>
                <?php echo e(__('Author Contact : geniusdevs24@gmail.com')); ?>

            </strong>
        </div>
    <?php endif; ?>

    <div class="card mb-4">
        <h3 class="mb-0 px-3 py-4"><b><?php echo e(__('Dashboard')); ?></b></h3>
    </div>


    <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  


</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

    multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
    multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')


        var myMultipleLineChart = new Chart(multipleLineChart, {
			type: 'line',
			data: {
				labels: [<?php echo $order_days; ?>],
				datasets: [{
					label: "Product Sales",
					borderColor: "#1d7af3",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [<?php echo $order_sales; ?>]
				}]
			},
			options : {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});

        var myMultipleLineChart2 = new Chart(multipleLineChart2, {
			type: 'line',
			data: {
				labels: [<?php echo $earning_days; ?>],
				datasets: [ {
					label: "Earning"+' <?php echo e(PriceHelper::adminCurrency()); ?>',
					borderColor: "#f3545d",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#f3545d",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [<?php echo $total_incomess; ?>]
				}]
			},
			options : {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});


</script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/almmlakamobail/public_html/core/resources/views/back/dashboard/index.blade.php ENDPATH**/ ?>