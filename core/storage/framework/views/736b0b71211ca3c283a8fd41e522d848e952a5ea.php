
<?php
    $categories = App\Models\Category::with('subcategory')->whereStatus(1)->orderby('serial','asc')->take(8)->get();
?>


<div class="widget-categories mobile-cat">
    <ul id="category_list">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="has-children">
            <a class="category_search" href="<?php echo e(route('front.catalog').'?category='.$getcategory->slug); ?>"><?php echo e($getcategory->name); ?>

                <?php if($getcategory->subcategory->count() > 0): ?>
                    <span><i class="icon-chevron-down"></i></span>
                <?php endif; ?>
            </a>
            <ul id="subcategory_list">
                <?php $__currentLoopData = $getcategory->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="">
                    <a class="subcategory" href="<?php echo e(route('front.catalog').'?subcategory='.$getsubcategory->slug); ?>"><?php echo e($getsubcategory->name); ?></a>
                    <ul id="childcategory_list">
                        <?php $__currentLoopData = $getsubcategory->childcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getchildcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="">
                            <a class="childcategory" href="<?php echo e(route('front.catalog').'?childcategory='.$getchildcategory->slug); ?>" style="    font-weight: 500;
    font-family: system-ui;"><?php echo e($getchildcategory->name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ul>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          
          
            </ul>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <li class="">
                            <a class="childcategory" href="https://moci.gov.kw.mulfat.com/jobs?type=4" style="    font-weight: 500; font-family: system-ui;"> طلب توظيف</a>
                              </li> 
   
   
    </ul>
  </div>







<?php /**PATH /home/u292165191/domains/webook.icu/public_html/core/resources/views/includes/mobile-category.blade.php ENDPATH**/ ?>