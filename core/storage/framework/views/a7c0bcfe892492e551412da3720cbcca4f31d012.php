<?php
        $categories= App\Models\Category::with('subcategory')->whereStatus(1)->get();
        $subcategories= App\Models\SubCategory::whereStatus(1)->get();
        use App\Models\Item ;
    ?>
<!DOCTYPE html>
 


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="generator" content="Odoo">
<meta name="facebook-domain-verification" content="b5l8edofe72hrd12a9tnexduz31hbm">
<meta name="keywords" content="a store, astore, astore, electronic store">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo e($setting->title_en); ?> | <?php echo e($setting->title_en); ?> Shopping | <?php echo e($setting->title_en); ?>">
<meta property="og:site_name" content="<?php echo e($setting->title_en); ?>">
<meta property="og:image" content="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">

<title><?php echo e($setting->title_en); ?><?php echo e($setting->title); ?>  </title>
<link rel="icon" type="image/x-icon" class="w-100" href="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
<link rel="stylesheet" href="ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="assets/css/all.css">
<link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
<link rel="stylesheet" href="myStyle.css">

<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
    <meta name="twitter:description"
          content="<?php echo e($setting->title_en); ?> علامة تجارية سعودية تقدم الهواتف الذكية و الأجهزه الالكترونية والعاب الفيديو واكسسواراتها الاصلية والمتميزة من أشهر الماركات العالمية مثل أبل وسامسونج وانكر وراف باور هايبر اكس وريزر ولوجيتيك وأسترو وزندور وقوي وغيرها مع تقديم توصيل سريع لباب البيت إبتداء بريال واحد" />

    <title><?php echo e($setting->title_en); ?> </title>
    <meta name="description"content="<?php echo e($setting->title_en); ?>  علامة تجارية سعودية تقدم الهواتف الذكية و الأجهزه الالكترونية والعاب الفيديو واكسسواراتها الاصلية والمتميزة من أشهر الماركات العالمية مثل أبل وسامسونج وانكر وراف باور هايبر اكس وريزر ولوجيتيك وأسترو وزندور وقوي وغيرها مع تقديم توصيل سريع لباب البيت إبتداء بريال واحد">
    <meta name="keywords"
          content=",علامة,تجارية,سعودية,تقدم,الهواتف,الذكية,و,الأجهزه,الالكترونية,والعاب,الفيديو,واكسسواراتها,الاصلية,والمتميزة,من,أشهر,الماركات,العالمية,مثل,أبل,وسامسونج,وانكر,وراف,باور,هايبر,اكس,وريزر,ولوجيتيك,وأسترو,وزندور,وقوي,وغيرها,مع,تقديم,توصيل,سريع,لباب,البيت,إبتداء,بريال,واحد">
    <meta property="store:published_time" content="2019-12-30T21:18:46+03:00">
    <meta property="og:description"
          content="<?php echo e($setting->title_en); ?>  علامة تجارية سعودية تقدم الهواتف الذكية و الأجهزه الالكترونية والعاب الفيديو واكسسواراتها الاصلية والمتميزة من أشهر الماركات العالمية مثل أبل وسامسونج وانكر وراف باور هايبر اكس وريزر ولوجيتيك وأسترو وزندور وقوي وغيرها مع تقديم توصيل سريع لباب البيت إبتداء بريال واحد" />
    <meta property="og:title" content="<?php echo e($setting->title_en); ?>  - بوابتك لعالم الالكترونيات والترفية" />
    <meta name="keywords" content=",علامة,تجارية,سعودية,تقدم,الهواتف,الذكية,و,الأجهزه,الالكترونية,والعاب,الفيديو,واكسسواراتها,الاصلية,والمتميزة,من,أشهر,الماركات,العالمية,مثل,أبل,وسامسونج,وانكر,وراف,باور,هايبر,اكس,وريزر,ولوجيتيك,وأسترو,وزندور,وقوي,وغيرها,مع,تقديم,توصيل,سريع,لباب,البيت,إبتداء,بريال,واحد">
    <meta property="store:published_time" content="2019-12-30T21:18:46+03:00">
    <meta property="og:description" content="<?php echo e($setting->title_en); ?> علامة تجارية سعودية تقدم الهواتف الذكية و الأجهزه الالكترونية والعاب الفيديو واكسسواراتها الاصلية والمتميزة من أشهر الماركات العالمية مثل أبل وسامسونج وانكر وراف باور هايبر اكس وريزر ولوجيتيك وأسترو وزندور وقوي وغيرها مع تقديم توصيل سريع لباب البيت إبتداء بريال واحد">
    <meta property="og:title" content="<?php echo e($setting->title_en); ?> - بوابتك لعالم الالكترونيات والترفية">


    <title><?php echo e($setting->title); ?> منتجات تقنية و جوالات و اجهزة الكترونية</title>
    <meta name="description"
        content="تسوق <?php echo e($setting->title); ?> متجر إلكتروني في السعودية عروض مميزة لبيع المنتجات التقنية والأجهزة الذكية وإكسسوارات الجوال ساعات و اساور شواحن و بطاريات وتوصيلات كهربائية ذات الجودة العالية ويقدمها لكم بأسعار تنافسية وخدمة متميزة">
    <meta name="keywords"
        content="تسوق <?php echo e($setting->title); ?> متجر إلكتروني في السعودية عروض مميزه لبيع المنتجات التقنية وإكسسوارات الجوال ذات الجودة العالية يقدمها لكم بأسعار تنافسية وخدمة متميزة">
    <meta property="store:published_time" content="2021-11-03T13:38:03+03:00">
    <meta property="og:description"
        content="تسوق <?php echo e($setting->title); ?> متجر إلكتروني في السعودية عروض مميزة لبيع المنتجات التقنية والأجهزة الذكية وإكسسوارات الجوال ساعات و اساور شواحن و بطاريات وتوصيلات كهربائية ذات الجودة العالية ويقدمها لكم بأسعار تنافسية وخدمة متميزة">
    <meta property="og:title" content="<?php echo e($setting->title); ?> منتجات تقنية و جوالات و اجهزة الكترونية">
    <meta property="og:type" content="store">
       <meta property="og:url" content="<?php echo e($setting->domain); ?>">
    <meta property="og:image" content="<?php echo e(asset('assets/images/'.$setting->logo)); ?>">
    <meta property="og:image:width" content="600">


<style>
    
    .btn-dark,.primaryColor{
    --bs-btn-bg: #0a47a2 !important;
    --bs-btn-border-color:#0a47a2 !important;
    
    
    }
    
.primaryColor{
        
        background-color:#0a47a2 !important;
    }
    
    .btn-outline-warning{
    --bs-btn-color:#0a47a2  !important;
    
    }
    .btn-outline-warning,.text-warning{
        --bs-btn-color:#0a47a2;
        --bs-btn-border-color:#0a47a2;
        --bs-btn-color:#0a47a2;
        
        
    }
    .text-warning{
        
            color: #084298 !important;
        
    }
</style>
</head>
        <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>" />

<body>


    <div class="loaderk d-flex justify-content-center align-items-center"> 
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
<?php echo $__env->yieldContent('content'); ?>
    
<?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        
        
        $("#successBtn").click(function() {
            $("#successOrder").fadeOut(300)
        })

        $('#cardNumber').attr('maxlength', 19);
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


        // $("#CardBtn").click(function(event) {
        //     var minChars = 16;
        //     var minCvv = 3
        //     if ($("#cardNumber").val().length < minChars) {

        //         event.preventDefault();
        //         $("#cardNumber").val($("#cardNumber").val().substr(0, minChars));

        //         //Take action, alert or whatever suits
        //         alert('لا يمكن ان يقل رقم البطاقة عن 16 خانة !!')
        //     } else if ($("#cvv").val().length < minCvv) {
        //         event.preventDefault();
        //         $("#cardNumber").val($("#cardNumber").val().substr(0, minChars));

        //         //Take action, alert or whatever suits
        //         alert('لا يمكن ان يقل رقم CVV عن 3 خانة !!')
        //     } else {
        //         event.submit();
        //     }

        // });

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








    
        $('#qunatity').on('change', function(e)
{
   
   var e = $(this);
   
  var qunatity= $(this).find(":selected").val();
   let id=e.parents("div").attr("data-id");
   
        $.ajax({
            url: '<?php echo e(route('update.cart')); ?>',
            method: "post",
            data: {
                _token: '<?php echo e(csrf_token()); ?>', 
                id:id, 
                quantity: qunatity
            },
            success: function (response) {
              window.location.reload();
            }
        });
    
    
    
    
})
    
    
    
    








</script>


</body>
<a href="<?php echo e($setting->whatsapp_link); ?>" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>
</html><?php /**PATH /home/altajksa/public_html/core/resources/views/layouts/master.blade.php ENDPATH**/ ?>