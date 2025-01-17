<?php
         $categories= App\Models\Category::with('subcategory')->whereStatus(1)->OrderBy('id','asc')->get();
        $subcategories= App\Models\SubCategory::whereStatus(1)->get();
        use App\Models\Item ;
     ?>

   <?php $__env->startSection('content'); ?> 
   <style>
       
       .slick-prev,.slick-next,.slick-dots{
           
           display:none !important;
       }
       
   </style>
   
    <main>
        <section class="mt-5">

    <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner pt-md-5 pt-3">
                    </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">-->
        <!--    <span class="visually-hidden">Previous</span>-->
        <!--</button>-->
        <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">-->
        <!--    <span class="visually-hidden">Next</span>-->
        <!--</button>-->
    </div>
</section>
<!-- /carousel -->
<section class="container mt-2 mb-3">
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="
    margin-top: 5%;
">
  <div class="carousel-inner">
      
   
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div    class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
      <img class="d-block w-100" src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" alt="First slide">
    </div>

    
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="container mt-5">
        <div class="slider" dir="ltr">




 



              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="text-center">
                <a href="<?php echo e(route('front.catalog').'?category='.$category->slug); ?>" class="text-decoration-none text-dark">
                    <img src="<?php echo e(asset('assets/images/'.$category->photo)); ?>" style="max-width: 80%;border-radius: 50%;overflow: hidden;" class="border border-2 ms-auto me-auto shadow" width="" alt="">
                    <p class="mt-2"><?php echo e($category->name); ?></p>
                </a>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    
    
    
    
    
    
    
    
    
            <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span> ايفون16 برومكس    </h5>
            <a  href="<?php echo e(route('front.catalog').'?subcategory=iphone16pro-max'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                                     
                                     
                             <?php $__currentLoopData = Item::where('subcategory_id','169')->orderBy('id','DESC')->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a  href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="<?php echo e($item->name); ?>">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
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

    
    
    
    
    
    
    
    
    <img src="uploads/1.jpeg" class="w-100 rounded " alt="">
    
    
    
    
    
    
    
            <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span> ايفون 16 برو</h5>
            <a  href="<?php echo e(route('front.catalog').'?subcategory=iphone16-pro'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                                     
                                     
                             <?php $__currentLoopData = Item::where('subcategory_id','170')->orderBy('id','DESC')->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a  href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="<?php echo e($item->name); ?>">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
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







<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>  ايفون 16 بلس    </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=iphone16-plus'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','171')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس 1 تيرابايت">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>















<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>  ايفون 16 عادي    </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=iphone16-normal'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','172')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 16 عادي ">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>






<!--ايفوووووووووووووووووووووووووون15 بروكس -->ظ


<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 15 برومكس  </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=iPhone-15Pro-Max'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','140')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس ">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>










<!--ايفوووووووووووووووون 15 برو-->











<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 15 برو  </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=iPhone-15-Pro-'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','141')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس ">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>








 






<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 15 بلس  </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=iPhone-15-Plus-'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','142')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس 1 تيرابايت">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>






<section class="container mt-2 mb-3">
         <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 15 عادي  </h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=-iPhone-15-regular-'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','143')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس 1 تيرابايت">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                          </div>
</div></section>














<!--<section class="container mt-2 mb-3">-->
<!--    <img src="uploads/5577528502_7Yiw2RSQoy53TD015Zh3XOCcgMYAzJr0he3gdc5C.jpg" class="w-100 rounded shadow" alt="">-->
<!--        <div class="container">-->
<!--        <div class="d-flex align-items-center">-->
<!--            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 14 برو ماكس</h5>-->
<!--            <a href="<?php echo e(route('front.catalog').'?subcategory=iPhone-14-Pro-Max'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--                             <?php $__currentLoopData = Item::where('subcategory_id','144')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                     
                                     
<!--                                      <div class="col-md-3 col-6 mb-2">-->
<!--                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">-->
<!--                           <div class="product">-->
<!--                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس 1 تيرابايت">-->
<!--                               <div class="container position-relative">-->
<!--                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>-->
<!--                                   <p class="mb-2 text-secondary text-center">-->
<!--                                       <span>      <?php echo e($item->discount_price); ?></span>-->
<!--                                       <span><?php echo e($setting->currency); ?></span>-->
<!--                                   </p>-->
<!--                                   <div>-->
                                            
<!--                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">-->
<!--                                               إضافة للسلة-->
<!--                                           </a>-->

<!--                                    </div>-->
<!--                               </div>-->
<!--                           </div>-->
<!--                       </a>-->
<!--                   </div>-->
<!--                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        -->
<!--                          </div>-->
<!--</div></section>-->

<!--<section class="container mt-2 mb-3">-->
<!--    <img src="uploads/5091013377_iphone13.jpeg" class="w-100 rounded shadow" alt="">-->
<!--        <div class="container">-->
<!--        <div class="d-flex align-items-center">-->
<!--            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>ايفون 13 برو ماكس</h5>-->
<!--            <a href="<?php echo e(route('front.catalog').'?subcategory=iPhone-13-Pro-Max'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--                             <?php $__currentLoopData = Item::where('subcategory_id','145')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                     
                                     
<!--                                      <div class="col-md-3 col-6 mb-2">-->
<!--                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">-->
<!--                           <div class="product">-->
<!--                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="ايفون 15 برو ماكس 1 تيرابايت">-->
<!--                               <div class="container position-relative">-->
<!--                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>-->
<!--                                   <p class="mb-2 text-secondary text-center">-->
<!--                                       <span>      <?php echo e($item->discount_price); ?></span>-->
<!--                                       <span><?php echo e($setting->currency); ?></span>-->
<!--                                   </p>-->
<!--                                   <div>-->
                                            
<!--                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">-->
<!--                                               إضافة للسلة-->
<!--                                           </a>-->

<!--                                    </div>-->
<!--                               </div>-->
<!--                           </div>-->
<!--                       </a>-->
<!--                   </div>-->
<!--                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                -->
<!--                        </div>-->
<!--</div></section>-->






<section class="container mt-2 mb-3">
    <img src="uploads/maxresdefault.jpg" class="w-100 rounded shadow" alt="">
        <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span> سامسونج  اس 24 الترا</h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=Samsung-S-24-Ultra'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','167')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="<?php echo e($item->name); ?> ">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div>
</div></section>















<section class="container mt-2 mb-3">
    <img src="uploads/1050646461_1566442541_1052609418_play5.webp" class="w-100 rounded shadow" alt="">
        <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-center my-md-5 my-4 mainColor" style=""><span class="me-2">|</span>بلايستيشن</h5>
            <a href="<?php echo e(route('front.catalog').'?subcategory=Play-Station'); ?>" class="btn btn-outline-dark btn-sm rounded-4 ms-auto">عرض الكل</a>
        </div>
        <div class="row">
                             <?php $__currentLoopData = Item::where('subcategory_id','164')->orderBy('id','DESC')->take('8')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                     
                                      <div class="col-md-3 col-6 mb-2">
                       <a h href="<?php echo e(route('front.product2',$item->id)); ?>"   class="text-decoration-none">
                           <div class="product">
                               <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" class="w-100 " alt="<?php echo e($item->name); ?> ">
                               <div class="container position-relative">
                                   <p class="productName my-0 mt-2 mb-1">     <?php echo e($item->name); ?>    </p>
                                   <p class="mb-2 text-secondary text-center">
                                       <span>      <?php echo e($item->discount_price); ?></span>
                                       <span><?php echo e($setting->currency); ?></span>
                                   </p>
                                   <div>
                                            
                                           <a href="<?php echo e(route('add.to.cart', $item->id)); ?>"   name="addCart" class="btn btn-sm btn-dark w-100">
                                               إضافة للسلة
                                           </a>

                                    </div>
                               </div>
                           </div>
                       </a>
                   </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div>
</div></section>










<div class="container mt-4">
    <div class="container">
        <div class="d-flex align-items-center mb-3" style="border-bottom: 1px solid black;">
            <h5 class="text-center my-md-5 my-3 mainColor">عملائنا يثقون بنا</h5>
        </div>
    </div>
    <div class="my-4">
        <div class="comment">

            <div class="px-3">
                <div class="p-5 border shadow rounded text-center">
                    <div class=" mb-3">
                        <span class="border border-5 rounded-circle px-3 py-2 fs-1 shadow">
                            <i class="fas fa-user text-dark "></i>
                        </span>
                        <h3 class="my-3">محمد الشمري</h3>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="">
                        اشكركم على المصداقيه تم وصول الطلب ونفس الطلب وجوده ممتازه واتمنالكم التوفيق
                    </div>
                </div>
            </div>
            <div class="px-3">
                <div class="p-5 border shadow rounded text-center">
                    <div class=" mb-3">
                        <span class="border border-5 rounded-circle px-3 py-2 fs-1 shadow">
                            <i class="fas fa-user text-dark "></i>
                        </span>
                        <h3 class="my-3">عبدالله العنزي</h3>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="">
                        شغل متميز وجبار ♥️ استمروا ♥️
                    </div>
                </div>
            </div>
            <div class="px-3">
                <div class="p-5 border shadow rounded text-center">
                    <div class=" mb-3">
                        <span class="border border-5 rounded-circle px-3 py-2 fs-1 shadow">
                            <i class="fas fa-user text-dark "></i>
                        </span>
                        <h3 class="my-3">يوسف محمد</h3>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="">
                        اهم شي الخدمه بعد البيع .. ابدعتوا بس لو تقللون هال١٤ يوم
                    </div>
                </div>
            </div>
            <div class="px-3">
                <div class="p-5 border shadow rounded text-center">
                    <div class=" mb-3">
                        <span class="border border-5 rounded-circle px-3 py-2 fs-1 shadow">
                            <i class="fas fa-user text-dark "></i>
                        </span>
                        <h3 class="my-3">هنادي عبدالله</h3>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="">
                        من جد خيارات اصلية المنتج يفرض نفسه
                    </div>
                </div>
            </div>
            <div class="px-3">
                <div class="p-5 border shadow rounded text-center">
                    <div class=" mb-3">
                        <span class="border border-5 rounded-circle px-3 py-2 fs-1 shadow">
                            <i class="fas fa-user text-dark "></i>
                        </span>
                        <h3 class="my-3">احمد العتيبي</h3>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="">
                        هذه ثالث تجربه .. خدمتهم صراحه تسسكت اهنيكم
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /card 1 -->

</main>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u593058701/domains/altaj-ksa.store/public_html/core/resources/views/front/index.blade.php ENDPATH**/ ?>