 
    <?php
$slug=request()->get('category')??request()->get('subcategory');

    
?>
   
   <?php $__env->startSection('content'); ?>  
    <main>
        <section class="mt-5 py-3">
</section>
<section class="container-fluid">

    <nav aria-label="breadcrumb" style="margin-top: 15px;">
        <ol class="breadcrumb pt-md-0 pt-2">
            <li class="breadcrumb-item"><a href="/" class=" text-dark">الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page"> <?php echo e($slug); ?>  </li>
        </ol>
    </nav>
   
    <!-- itmes -->
    <div class="container">
        <div class="row">
                                               <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                  <div class="col-md-3 col-6 mb-2">
                    <a  href="<?php echo e(route('front.product2',$item->id)); ?>"  class="text-decoration-none">
                        <div class="product">
                            <img   src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>"class="w-100 " alt="<?php echo e($item->name); ?>">
                            <div class="container position-relative">
                                <p class="productName my-0 mt-2 mb-1">  <?php echo e($item->name); ?>    </p>
                                <p class="mb-2 text-secondary text-center">
                                    <span><?php echo e($item->discount_price); ?></span>
                                    <span>ر.س</span>
                                </p>
                                <div>
                                  </a>
                                  
                                  <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"  name="addCart" class="btn btn-sm btn-dark w-100">
                                            إضافة للسلة
                                        </a>

                                 </div>
                            </div>
                        </div>
                    </a>
                </div>
 
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
        </div>    
    </div>
</section>


 
</main>
   <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u593058701/domains/altaj-ksa.store/public_html/core/resources/views/front/catalog/index.blade.php ENDPATH**/ ?>