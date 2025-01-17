<?php
         $categories= App\Models\Category::with('subcategory')->whereStatus(1)->OrderBy('id','asc')->get();
         $cities= App\Models\Brand::OrderBy('id','asc')->get();
        $subcategories= App\Models\SubCategory::whereStatus(1)->get();
        use App\Models\Item ;
        use App\Models\Brand ;
     ?>



   <?php $__env->startSection('content'); ?> 
    <!-- Start Main -->
    <main class="main" id="blur">
        <secion class="page-title">
            <h1>احجز أفضل الفعاليات والتجارب والمسرحيات</h1>
            <form action="">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="ابحث في webook.com">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </secion>

        <!-- Start Announcement -->
        <section class="announcement wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                                                   <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <section class="card swiper-slide">

                        <section class="swiper-slide">
                            <a href="#">
                                <section class="content">
                                    <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>"
                                       alt="">
                                    <section class="title">
                                        <section>
                                            <h2> اشتر تذاكر مضمونة من منصة إعادة البيع لحفلك المفضل!</h2>
                                        </section>
                                        <a href="#" class="book-now">قم بزيارة الموقع</a>
                                    </section>
                                </section>
                        </section>
                        </a>
                    </section>
                  
                  
                    <!--    <section class="card swiper-slide">-->
                    <!--    <section class="swiper-slide">-->
                    <!--        <a href="#">-->
                    <!--            <section class="content">-->
                    <!--                <img src="https://images.ctfassets.net/vy53kjqs34an/7xQfO6gplUkmFrS0VGkRyQ/9a980f472a27a24e7652f37b86a3a29e/1280x426__A.png?fm=webp&w=1280&h=426"-->
                    <!--                    alt="">-->
                    <!--                <section class="title">-->
                    <!--                    <section>-->
                    <!--                        <h2>بوليفارد بوليفارد</h2>-->
                    <!--                        <p>احجز الان</p>-->
                    <!--                    </section>-->
                    <!--                    <a href="#" class="book-now">احجز </a>-->
                    <!--                </section>-->
                    <!--            </section>-->
                    <!--        </a>-->
                    <!--    </section>-->
                    <!--</section>-->
               
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
               

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End Announcement -->

        <!-- Start Slides -->
        <!-- استكشف الفئات -->
        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>استكشف الفئات</h2>
            </section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    
                    
                           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <a href="<?php echo e(route('front.catalog').'?category='.$category->slug); ?>">
                            <div class="content">
                                <img src="<?php echo e(asset('assets/images/'.$category->photo)); ?>" 
                                    alt="">
                                <section class="text shadow">
                                    <p><?php echo e($category->name); ?></p>
                                </section>
                            </div>
                        </a>
                    </div>
          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </section>
        <!-- استكشف الفئات -->
        <!-- End Slides -->
        <!-- ================================== -->
        <!-- استكشف الواجهات -->
        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>استكشف الواجهات</h2>
            </section>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    
                    
                    
                                          <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    
                                           <div class="swiper-slide">
                        <a   href="<?php echo e(route('front.catalog').'?city='.$city->id); ?>">
                            <div class="swiper-slide content">
                                <img src="<?php echo e(asset('assets/images/'.$city->photo)); ?>" 
                                    alt="">
                                <section class="text shadow">
                                    <p><?php echo e($city->name); ?></p>
                                    <span><?php echo e($city->country); ?></span>
                                </section>
                            </div>
                        </a>
                    </div>
              
              
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
                </div>
            </div>
        </section>
        <!-- استكشف الواجهات -->
        <!-- ================================== -->
        <!-- مباريات كرة القدم الحماسية -->
        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>مباريات كرة القدم الحماسية</h2>
            </section>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/7EUTU3PXYJ5CjrNXbcGUhM/648d96d2d19104987ac09664f0cfd0c3/japan_1280_1280-100-3.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 1 أكتوبر</span>
                                <p>مباراة السعودية ضد اليابان | تصفيات آسيا المؤهلة لكأس العالم 2026</p>
                                <span>جدة, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>10 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/7EUTU3PXYJ5CjrNXbcGUhM/648d96d2d19104987ac09664f0cfd0c3/japan_1280_1280-100-3.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 2 أكتوبر</span>
                                <p>مباراة السعودية ضد اليابان | تصفيات آسيا المؤهلة لكأس العالم 2026</p>
                                <span>جدة, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>10 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/7EUTU3PXYJ5CjrNXbcGUhM/648d96d2d19104987ac09664f0cfd0c3/japan_1280_1280-100-3.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 3 أكتوبر</span>
                                <p>مباراة السعودية ضد اليابان | تصفيات آسيا المؤهلة لكأس العالم 2026</p>
                                <span>جدة, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>10 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/7EUTU3PXYJ5CjrNXbcGUhM/648d96d2d19104987ac09664f0cfd0c3/japan_1280_1280-100-3.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 4 أكتوبر</span>
                                <p>مباراة السعودية ضد اليابان | تصفيات آسيا المؤهلة لكأس العالم 2026</p>
                                <span>جدة, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>10 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- مباريات كرة القدم الحماسية -->
        <!-- ================================== -->
        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>العروض المسرحية المختارة</h2>
            </section>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = Item::where('category_id','76')->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                     <div class="swiper-slide">
                        <a href="<?php echo e(route('front.product',$item->slug)); ?>">
                            <div class="content none-shadow">
                                <img src="<?php echo e(asset('assets/images/'.$item->photo)); ?>" 
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 22 أكتوبر</span>
                                <p><?php echo e($item->name); ?></p>
                                <span>الرياض, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>85 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </section>
        <!-- ================================== -->
        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>احجز المباريات القادمة</h2>
            </section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <section class="swiper-slide slide-box">
                        <section class="box">
                            <a href="#">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/1g7iTJ4jw2Ph9ju1GurBTI/43b491d9c355bc650411ec98000c57f6/Group_33676.png"
                                    alt="">
                            </a>
                        </section>
                    </section>
                    <section class="swiper-slide slide-box">
                        <section class="box">
                            <a href="#">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/1g7iTJ4jw2Ph9ju1GurBTI/43b491d9c355bc650411ec98000c57f6/Group_33676.png"
                                    alt="">
                            </a>
                        </section>
                    </section>
                    <section class="swiper-slide slide-box">
                        <section class="box">
                            <a href="#">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/1g7iTJ4jw2Ph9ju1GurBTI/43b491d9c355bc650411ec98000c57f6/Group_33676.png"
                                    alt="">
                            </a>
                        </section>
                    </section>
                    <section class="swiper-slide slide-box">
                        <section class="box">
                            <a href="#">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/1g7iTJ4jw2Ph9ju1GurBTI/43b491d9c355bc650411ec98000c57f6/Group_33676.png"
                                    alt="">
                            </a>
                        </section>
                    </section>
                </div>
            </div>
        </section>
        <!-- ================================== -->

        <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>أكبر حدث رياضي وطني 2024</h2>
            </section>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content none-shadow">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/597MAJgVRNy5gDBxL1YXPW/435dd14380e8a6ce3e11bd399e6fe252/saudi-games-jnadriyah-1280x1280.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 12 أكتوبر</span>
                                <p>دورة الألعاب السعودية 2024 | الجنادرية</p>
                                <span>الرياض, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>15 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content none-shadow">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/597MAJgVRNy5gDBxL1YXPW/435dd14380e8a6ce3e11bd399e6fe252/saudi-games-jnadriyah-1280x1280.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 12 أكتوبر</span>
                                <p>دورة الألعاب السعودية 2024 | الجنادرية</p>
                                <span>الرياض, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>15 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content none-shadow">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/597MAJgVRNy5gDBxL1YXPW/435dd14380e8a6ce3e11bd399e6fe252/saudi-games-jnadriyah-1280x1280.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 12 أكتوبر</span>
                                <p>دورة الألعاب السعودية 2024 | الجنادرية</p>
                                <span>الرياض, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>15 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="content none-shadow">
                                <img src="https://images.ctfassets.net/vy53kjqs34an/597MAJgVRNy5gDBxL1YXPW/435dd14380e8a6ce3e11bd399e6fe252/saudi-games-jnadriyah-1280x1280.jpg?fm=webp&fit=thumb&w=600&h=600"
                                    alt="">
                            </div>
                            <section class="text">
                                <span> فعالية · 12 أكتوبر</span>
                                <p>دورة الألعاب السعودية 2024 | الجنادرية</p>
                                <span>الرياض, المملكة العربية السعودية</span>
                                <span>يبدأ من <span>15 ريال سعودي</span></span>
                                <span><i class="fa-solid fa-ticket"></i> حجز فوري</span>
                            </section>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================================== -->
        <!-- end Explore New -->

        <!-- Start partners -->
        <section class="partners wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="title">
                <h2>شركاء ويبوك</h2>
            </section>
            <section class="boxs">
                <section class="box">
                    <a href="">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/7CHCFVXSQRhDZxtKejvRHd/c3dc56299e04fa6ae8ea603b6b44958b/visit_saudi.png"
                            alt="">
                    </a>
                </section>
                <section class="box">
                    <a href="">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/7z8tI15IMXFliKRrJxWixy/88ea98030676362c4630f4ba97431a50/alawal.png"
                            alt="">
                    </a>
                </section>
                <section class="box">
                    <a href="#">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/6SGrUWqrT6YehussBYmaRQ/d8677fa7a38e49b50e2d7cffde7da0e1/sfa.png"
                            alt="">
                    </a>
                </section>
                <section class="box">
                    <a href="">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/7CHCFVXSQRhDZxtKejvRHd/c3dc56299e04fa6ae8ea603b6b44958b/visit_saudi.png"
                            alt="">
                    </a>
                </section>
                <section class="box">
                    <a href="">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/7z8tI15IMXFliKRrJxWixy/88ea98030676362c4630f4ba97431a50/alawal.png"
                            alt="">
                    </a>
                </section>
                <section class="box">
                    <a href="#">
                        <img src="https://images.ctfassets.net/vy53kjqs34an/6SGrUWqrT6YehussBYmaRQ/d8677fa7a38e49b50e2d7cffde7da0e1/sfa.png"
                            alt="">
                    </a>
                </section>
            </section>
        </section>
        <!-- End partners -->

       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webok/public_html/core/resources/views/front/index.blade.php ENDPATH**/ ?>