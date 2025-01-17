
<?php
        $categories= App\Models\Category::with('subcategory')->whereStatus(1)->get();
        $subcategories= App\Models\SubCategory::whereStatus(1)->get();
     ?>

<html lang="ar" dir="rtl">
    <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="generator" content="Odoo">
<meta name="facebook-domain-verification" content="b5l8edofe72hrd12a9tnexduz31hbm">
<meta name="keywords" content="a store, astore, astore, electronic store">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo e($setting->title); ?>  | SmartEco Shopping | <?php echo e($setting->title); ?> ">
<meta property="og:site_name" content="<?php echo e($setting->title); ?> ">
<meta property="og:image" content="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">

<title>  <?php echo e($setting->title); ?>   </title>
<link rel="icon" type="image/x-icon" class="w-100" href="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
<link rel="stylesheet" href="https://brand-tech.store/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://brand-tech.store/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://brand-tech.store/assets/css/all.css">
<link rel="stylesheet" href="https://brand-tech.store/assets/css/bootstrap.rtl.css">
<link rel="stylesheet" href="https://brand-tech.store/myStyle.css"></head>
  <style>
       
       .slick-prev,.slick-next,.slick-dots{
           
           display:none !important;
       }
       
   </style>
<body style="overflow: auto;" data-new-gr-c-s-check-loaded="14.1125.0" data-gr-ext-installed="">


    <div class="loaderk d-flex justify-content-center align-items-center" style="display: none; height: 0px;"> 
    </div>
    <header class="header shadow">
        <div class="navbar navbar-expand-lg main_menu py-0">
            <div class="container-fluid my-0">
                <a class="navbar-brand d-md-none bg-danger d-none d-md-block" href="/">
                    <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" height="60" width="50" alt="">
                </a>
                <div class="container d-md-none py-0">
                    <div class="d-flex align-items-center ">
                        <div>
                            <button class="btn d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <i class="fas fa-bars text-dark fa-xl"></i>
                            </button>
                        </div>
                        <div class="">
                            <a class="navbar-brand d-md-none  " href="/">
                                <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>"   height="70" alt="">
                            </a>
                        </div>
                        <div>
                        </div>
                        <div class=" d-flex align-items-center ms-auto">
                               <?php
                                          $main_price=0;
                                $total=0;
                                $count=0;
 
                if(session('cart'))
 {
              foreach(session('cart') as $id => $details)
              {
                 $total += $details['price'] * $details['quantity']  ;
                 $count++;
                                         

               }                            
}          
                
                
                
                ?>
                            
                            <a href="<?php echo e(route('my_cart')); ?>" class="nav-link position-relative p-0 d-md-none ">
                                <img src="assets/image/icons/ecommerce-latest.webp" width="25" class="" alt="">
                                <span class="position-absolute top-0 start-0 ms-1 mt-1 translate-middle badge rounded-pill bg-danger text-light">
                                   <?php echo e($count); ?>                               
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse my-1" id="navbarSupportedContent">
                    <a class="navbar-brand d-md-block d-none ms-auto me-auto" href="/">
                        <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" height="50"   alt="">
                    </a>
                    <form class="d-flex ms-auto me-auto searchForm" role="search">
                        <div class="input-group" dir="rtl">
                            <select aria-label="First name" class="form-control w-25">
                                <option value="" selected="">جميع الفئات</option>
                            </select>
                            <input type="text" aria-label="Last name" class="form-control w-50" placeholder="ابحث عن المنتج">
                            <button class="input-group-text btn primaryColor px-4">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto me-auto">
                        <li class="nav-item mx-2">
                            <a href="#" class="nav-link position-relative p-0">
                                <img src="assets/image/icons/ecommerce_-_love_favorite-512.webp" width="35" class="" alt="">
                                <span class="position-absolute top-0 start-0 ms-1 mt-1 translate-middle badge rounded-pill bg-danger">
                                    0
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="<?php echo e(route('my_cart')); ?>" class="nav-link position-relative p-0">
                                <img src="assets/image/icons/ecommerce-latest.webp" width="35" class="" alt="">
                                <span class="position-absolute top-0 start-0 ms-1 mt-1 translate-middle badge rounded-pill bg-danger text-white">
                                                  <?php echo e($count); ?>                               
                                                </span>  
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="#" class="nav-link position-relative p-0">
                                <img src="assets/image/icons/language-latest.webp" width="35" class="" alt="">
                            </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu d-md-block d-none">
            <div class="container">
                <ul class="nav py-2" dir="rtl">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
        <aside>
            <div class="offcanvas offcanvas-bottom h-75 rounded-3 mx-1" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="offcanvas-title fw-bold">
                        فئات المنتجات
                    </div>
                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mt-2">

                    <div class="accordion accordion-flush" id="sections">

                        <div class="py-3 border-bottom">
                            <a href="/" class="text-decoration-none text-dark">
                                الرئيسية
                            </a>
                        </div>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <div class="accordion-item border-bottom">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse" data-bs-target="#a<?php echo e($category->id); ?>" aria-expanded="false" aria-controls="sectino1">
                                            <?php echo e($category->name); ?>                              
                                        </button>
                                    </h2>
                                    <div id="a<?php echo e($category->id); ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#sections">
                                        <div class="accordion-body">
                                            <div class="accordion accordion-flush" id="categories">
                                                
                                                
                                                
                                             <?php
                                               $subcategories=App\Models\SubCategory::where('category_id',$category->id)->get();
                                               ?>
                                               <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="py-3 border-bottom">
                                                    <a  href="<?php echo e(route('front.catalog').'?subcategory='.$subcategory->slug); ?>" class="text-decoration-none text-dark">
                                                    <?php echo e($subcategory->name); ?>



                                                   </a>
                                                </div>
                                             
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                             
                                                 
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                           
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                </div>
            </div>
        </aside>
    </header>   
    
    
    
    
    
    <main>
<section class="mt-5 py-3">
</section>
<section class="container">

    <nav aria-label="breadcrumb" style="margin-top: 20px;">
        <ol class="breadcrumb pt-md-0 pt-2">
            <li class="breadcrumb-item"><a href="/" class=" text-dark">الرئيسية</a></li>
             <li class="breadcrumb-item active" aria-current="page"><?php echo e($item->name); ?> </li>
        </ol>
    </nav>
    <h5 class="text-start text-secondary d-md-none  container-fluid">
  
  <?php echo e($item->name); ?>

    </h5>
    <!-- details -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="slider-for border shadow rounded slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 326px;">
                        <div class="border slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 326px; position: relative; right: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                            <img src="<?php echo e(asset('assets/images/'.$item->photo)); ?>" class="itemImage ms-auto me-auto" alt="<?php echo e($item->name); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-nav mt-1 rounded slick-initialized slick-slider">
                <div class="slick-list draggable" style="padding: 0px 50px;">
                    <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(-262px, 0px, 0px);"></div>
                </div>
            </div>

            </div>
            <div class="col-md-6 border rounded mt-md-0 mt-2 py-3">
                <h5 class="d-md-block d-none"><?php echo e($item->name); ?></h5>
                <div class="row">
                    <div class="col-6">
                        <a href="https://brand-tech.store/#" class="text-secondary">اضف تقييمك</a>
                    </div>
                    <div class="col-6">
                        <div class="text-end text-warning">
                            <i class="fas fa-star-half-stroke"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">رقم المنتج :</div>
                            <div class="col-6">2002907292</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="text-secondary text-end">
                            <i class="fas fa-share-nodes fa-fw mx-1"></i>
                            مشاركة
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-5">السعر :</div>
                            <div class="col-7">
                                <?php echo e($item->discount_price); ?> ر.س                            
                            </div>
                        </div>
                    </div>
                                    <div class="row my-3">
                    <div class="col-6">
                        <div class="row">
                            <!--<div class="col-5">اللون :</div>-->
                            <div class="col-7 "></div>
                        </div>
                    </div>
                </div>
                <form action="/product.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <div class="row align-items-center">
                                <div class="col-5">الكمية :</div>
                                <div class="col-7">
                                    <input type="hidden" name="product_id" value="44" id="">
                                    <input type="number" value="1" class="text-center form-control w-50" min="1" max="99" name="qnt" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <button class="btn btn-outline-warning w-100">
                                <i class="fas fa-heart "></i>
                            </button>
                        </div>
                        <div class="col-10">
                           <a  href="<?php echo e(route('add.to.cart', $item->id)); ?>"    ame="addCart" class="btn primaryColor w-100">أضف إلى السلة</a>
                        </div>
                    </div>
             </div>
</div>
            <!-- navs -->
            <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-secondary" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">التقييم</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-secondary" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false" tabindex="-1">الوصف</button>
                </li>
            </ul>
            <div class="tab-content border-bottom" id="myTabContent">
                <div class="tab-pane fade " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="pt-2 pb-4"> 
    <?php echo $item->details; ?>                    </div>
                </div>
                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                    <div class="container p-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="px-5 text-center text-secondary">
                                    <p class="fs-1">4</p>
                                    <p class="text-warning fs-3">
                                        <i class="fas fa-star-half-stroke fa-fw"></i>
                                        <i class="fas fa-star fa-fw"></i>
                                        <i class="fas fa-star fa-fw"></i>
                                        <i class="fas fa-star fa-fw"></i>
                                        <i class="fas fa-star fa-fw"></i>
                                    </p>
                                    <p class="fs-5">لا يوجد ملاحظات حتى الان</p>
                                </div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="container text-secondary">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3">
                                            Star 1
                                        </div>
                                                                                <div class="col-8">
                                            <div class="progress" dir="ltr">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated primaryColor" role="progressbar" aria-label="Animated striped example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            20%
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3">
                                            Star 2
                                        </div>
                                                                                <div class="col-8">
                                            <div class="progress" dir="ltr">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated primaryColor" role="progressbar" aria-label="Animated striped example" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%"></div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            46%
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3">
                                            Star 3
                                        </div>
                                                                                <div class="col-8">
                                            <div class="progress" dir="ltr">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated primaryColor" role="progressbar" aria-label="Animated striped example" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width: 59%"></div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            59%
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3">
                                            Star 4
                                        </div>
                                                                                <div class="col-8">
                                            <div class="progress" dir="ltr">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated primaryColor" role="progressbar" aria-label="Animated striped example" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            72%
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3">
                                            Star 5
                                        </div>
                                                                                <div class="col-8">
                                            <div class="progress" dir="ltr">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated primaryColor" role="progressbar" aria-label="Animated striped example" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%"></div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            34%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- /navs -->
<section class="container-fluid">
    <h5 class="text-center my-md-5 my-4 text-secondary"> شوهدت مؤخراً </h5>
    <div class="container-fluid">
        <div class="slider" dir="ltr">
          <?php 
            use App\Models\Item;
            $items=Item::get();
            ?>
         <?php $__currentLoopData = Item::where('subcategory_id',$item->subcategory_id)->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                       <a   href="<?php echo e(route('front.product2',$item->id)); ?>"  class="card position-relative text-decoration-none ms-1" style="width: 18rem;">
                                            <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>"  class="card-img-top " alt=" <?php echo e($item->name); ?> ">
                        <div class="card-body border-top border-3">
                            <h6 class="card-title text-dark" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">    <?php echo e($item->name); ?>    </h6>
                            <p class="card-text text-secondary">لا يوجد تفاصيل</p>
                            <div class="row mb-2">
                                        <div class="col-6 text-end fs-6 text-warning">
                                             <?php echo e($item->discount_price); ?>                              
                                        </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6 text-end fs-6" style="color: #121f41;">
                                                ر.س                                
                                            </div>
                                        </div>                            <div class="row">
                                <div class="col-6 fs-6 text-success"> متوفر </div>
                                <div class="col-6 text-end">
                                  
                                          <button  href="<?php echo e(route('add.to.cart', $item->id)); ?>"  name="addCart" class="btn primaryColor btn-sm rounded-5 py-0 px-4"><i class="fas fa-cart-arrow-down p-1"></i></button>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                        
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        
                            </div>
    </div>
</section>


</main>
<footer class="bg-light pt-3 mt-3 border border-top">
    <div class="d-flex justify-content-center w-100 py-3">
        <a href="/">
            <img class="ms-auto me-auto" src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" width="180" alt="">
        </a>
    </div>
    <div class="container text-dark fw-bold  pb-4">
        <div class="row">
            <div class="col-md-4 col-12 mb-3">
                <div class="w-100">
                    <h5 class="pb-3 text-center mb-3" style="color: #00395e;">روابط مهمة</h5>
                    <div class="container text-center" style="font-size: 12px;">
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="https://brand-tech.store/termsConditions.php.html">سياسة الضمان والاستبدال</a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="https://brand-tech.store/workTimes.php.html">اوقات العمل
                            </a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="https://brand-tech.store/refundAndCancleOrders.php.html">استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3">
                <div class="w-100">
                    <h5 class="pb-3 text-center mb-3" style="color: #00395e;">من نحن</h5>
                    <p class="text-center text-secondary px-5" style="font-size: 12px;">
                        منذ عام ٢٠١١ يعتبر متجر سمارت إيكو احد الموزعين المعتمدين من ابل رسميا بالمملكة العربية السعودية حيث تخصصنا بتوفير جميع منتجات ابل وما يصنع لهم من منتجات اصلية ومضمونة

                   </p>
                    <div class="container text-center mb-3 d-flex justify-content-center">
                        <a href="<?php echo e($setting->whatsapp_link); ?>" class="text-decoration-none">
                            <div class="text-dark px-2 rounded" style="background-color: #ECEDEF;">
                                <i class="fab fa-whatsapp fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">واتساب</p>
                            </div>
                        </a>
                        <a href="<?php echo e($setting->whatsapp_link); ?>" class="text-decoration-none mx-2">
                            <div class="text-dark px-3 rounded" style="background-color: #ECEDEF;">
                                <i class="fas fa-mobile-screen fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">جوال</p>
                            </div>
                        </a>
                        <a href="mailto:meta@store.comm" class="text-decoration-none">
                            <div class="text-dark px-3 rounded" style="background-color: #ECEDEF;">
                                <i class="fas fa-envelope fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">إيميل</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-5">
                <div class="w-100 text-secondary">
                    <h5 class="pb-3 text-center mb-4" style="color: #00395e;">تواصل معنا</h5>
                    <div class="container text-center">
                        <span>
                            <i class="fab fa-instagram fa-fw fa-xl"></i>
                        </span>
                        <span>
                            <i class="fab fa-twitter fa-fw fa-xl"></i>
                        </span>
                        <span>
                            <i class="fab fa-snapchat fa-fw fa-xl"></i>
                        </span>
                        <span>
                            <i class="fab fa-tiktok fa-fw fa-xl"></i>
                        </span>
                        <span>
                            <i class="fab fa-youtube fa-fw fa-xl"></i>
                        </span>
                        <span>
                            <i class="fab fa-facebook-f fa-fw fa-xl"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-5">
                <div class="w-100 text-secondary">
                    <h5 class="pb-3 text-center mb-4" style="color: #00395e;">تطبيقات متجر <?php echo e($setting->title); ?> </h5>
                    <div class="container text-center">
                        <div class="d-flex justify-content-center">
                            <div class="me-2">
                                <img src="https://brand-tech.store/assets/image/icons/appstore.webp" class="w-100" alt="">
                            </div>
                            <div>
                                <img src="https://brand-tech.store/assets/image/icons/googleplay.webp" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="https://brand-tech.store/https://smarteco-sa.store" class="text-light p-0 border-0 text-decoration-none">
                        <img src="https://brand-tech.store/assets/image/icons/qr-code.png" width="50" alt="">
                    </a>
                    <a href="https://brand-tech.store/https://maroofapp.page.link/S4uGUerxPWePq9QC7" class="ms-3 text-decoration-none">
                        <img src="https://brand-tech.store/assets/image/icons/maroof.webp" width="80" alt="">
                    </a>
                    <a href="https://brand-tech.store/https://smarteco-sa.store" class="ms-3 text-light p-0 border-0 text-decoration-none">
                        <img src="https://brand-tech.store/assets/image/icons/vat.webp" width="40" height="45" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #f6f6f6;">
        <div class="container-fluid text-white py-3 px-3" style="font-size: 14px;">
            <div class="row  align-items-center">
                <div class="col-md-6 col-12 text-center text-dark mb-3">
                    Copyright 2024 | IZone STORE                </div>
                <div class="col-md-6 col-12 text-center mb-3">
                    <span class="me-1">
                        <img src="https://brand-tech.store/assets/image/icons/mada.webp" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="https://brand-tech.store/assets/image/icons/visa.png" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="https://brand-tech.store/assets/image/icons/bank.webp" width="35" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer><script src="https://brand-tech.store/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://brand-tech.store/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="https://brand-tech.store/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        
        
        $("#successBtn").click(function() {
            $("#successOrder").fadeOut(300)
        })

        $('#cardNumber').attr('maxlength', 16);
        $('#cvv').attr('maxlength', 3);
        $('#orderCode').attr('maxlength', 6);

        $('#taqseet').change(function(event) {
            $('#taqsetBox').toggleClass('d-none');
        });


        $('.comment').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            rtl: true,
            autoplay: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        $("#CardBtn").click(function(event) {
            var minChars = 16;
            var minCvv = 3
            if ($("#cardNumber").val().length < minChars) {

                event.preventDefault();
                $("#cardNumber").val($("#cardNumber").val().substr(0, minChars));

                //Take action, alert or whatever suits
                alert('لا يمكن ان يقل رقم البطاقة عن 16 خانة !!')
            } else if ($("#cvv").val().length < minCvv) {
                event.preventDefault();
                $("#cardNumber").val($("#cardNumber").val().substr(0, minChars));

                //Take action, alert or whatever suits
                alert('لا يمكن ان يقل رقم CVV عن 3 خانة !!')
            } else {
                event.submit();
            }

        });

        $("#codeConfirm").click(function(event) {
            var minChars = 6;
            if ($("#orderCode").val().length < minChars) {

                event.preventDefault();
                $("#orderCode").val($("#orderCode").val().substr(0, minChars));

                //Take action, alert or whatever suits
                alert('كود غير صالح !!')
            } else {
                event.submit();
            }

        });
        $('.loaderk').fadeOut(70, function() {

            $('.loaderk').css('height', '0px');
            $('.loaderk img').css('width', '0px');
        })
        $('body').css('overflow', 'auto');
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        var monthes = $("#monthes").val();
        var total = $("#total_price").val();
        var price = $("#payment").val();
        $("#first").text('SAR ' + price);
        $("#qest").text('SAR ' + ((total - price) / (monthes == 0 ? 1 : monthes)).toFixed(2));

        $('#payment').attr('maxlength', total.length);
        $('#payment').change(function() {
            var monthes = parseInt($("#monthes").val());
            var total = parseInt($("#total_price").val());
            var price = parseInt($("#payment").val());
            if (total > 500) {
                if (price < 500) {
                    $('#first').text('SAR ' + 500);
                    $("#qest").text('SAR ' + ((total - price) / (monthes == 0 ? 1 : monthes)).toFixed(2));
                } else if (price >= 500 && price <= total) {
                    $("#first").text('SAR ' + price);
                    $("#qest").text('SAR ' + ((total - price) / (monthes == 0 ? 1 : monthes)).toFixed(2));
                } else {
                    $('#first').text('SAR ' + total);
                    $("#qest").text('SAR ' + total);
                }
            } else {
                $("#first").text('SAR ' + total);
                $("#qest").text('SAR ' + ((total - total) / (monthes == 0 ? 1 : monthes)).toFixed(2));
            }


        });
        $('#monthes').change(function() {
            var monthes = $("#monthes").val();
            var total = $("#total_price").val();
            var price = $("#payment").val();
            $("#first").text(price);
            $("#qest").text('SAR ' + ((total - price) / (monthes == 0 ? 1 : monthes)).toFixed(2));

        });
    })
</script><script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        rtl: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        rtl: true,
        centerMode: true,
        focusOnSelect: true
    });
</script>

<a href="<?php echo e($setting->whatsapp_link); ?>" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>

</body>


</html><?php /**PATH /home/brandtech/public_html/core/resources/views/front/catalog/product.blade.php ENDPATH**/ ?>