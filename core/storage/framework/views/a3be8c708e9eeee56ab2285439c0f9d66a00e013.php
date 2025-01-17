

   <?php $__env->startSection('content'); ?> 

                                              <?php 

   $main_price=0;
            $total=0;
            $count=0;
             
                             if(session('cart'))
                             {
                                   foreach(session('cart') as $id => $details)
                                   {
                                $total += $details['price'] * $details['quantity']; 
                               
                               $quantity=$details['quantity'];
                               
}}
          

?>
    <main>
<section class="mt-5 py-3">
</section>
<div class="container col-md-5">
    <div class="mt-3 pb-3 mb-4 border-bottom">
        <h6>مرحباً بك</h6>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-md-0 pt-2">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-dark">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="order.php" class="text-decoration-none text-dark">سلة المشتريات</a></li>
                <li class="breadcrumb-item active" aria-current="page">انهاء الطلب</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center container mb-3">
        <i class="fas fa-circle fa-fw text-dark fa-xl opacity-75"></i>
        <img src="assets/image/icons/delevary.svg" class="mx-3" alt="">
        <span>الشحن</span>
        <hr class="mx-2 w-100">
    </div>
    <div class="container mb-5">
        <div class="container">
            <!--  ****************************form*****************************S -->
            <form action="<?php echo e(route('store_makePayment')); ?>"  method="post"   onsubmit="return submit_email()" >
                <?php echo csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" autocomplete="off" name="name" id="floatingInput" required="" placeholder="الاسم كامل">
                    <label for="cardname text-secondary">
                        <i class="fas fa-user fa-fw text-secondary mx-2"></i>
                        <span class="text-secondary">الأسم كامل</span>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" name="phone" autocomplete="off" class="form-control" required="" placeholder="رقم الجوال"  
                    
                    
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "10">                    
                    
                    
                    
                    <label for="cardNumber text-secondary">
                        <i class="fas fa-phone-flip fa-fw text-secondary mx-2"></i>
                        <span class="text-secondary"> 0512345678  </span>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="location" autocomplete="off" class="form-control" required="" placeholder="العنوان بالتفصيل">
                    <label for="cardNumber text-secondary">
                        <i class="fas fa-location-dot fa-fw text-secondary mx-2"></i>
                        <span class="text-secondary">المنطقة</span>
                    </label>
                    <input type="hidden" name="total_price" autocomplete="off" value="<?php echo e($total); ?>" id="total_price">
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="street" autocomplete="off" class="form-control" required="" placeholder="العنوان بالتفصيل">
                    <label for="cardNumber text-secondary">
                        <i class="fas fa-map-pin fa-fw text-secondary mx-2"></i>
                        <span class="text-secondary">الشارع</span>
                    </label>
                    <input type="hidden" name="total_price" autocomplete="off" value="7199" id="total_price">
                </div>.
                
                <!--Moo-->
                
            <!--    <div class="form-floating mb-10">-->
            <!--<i class="fas fa-circle fa-fw text-success fa-xl opacity-75"></i>-->
            <!--<img src="assets/image/icons/step-payment.svg" class="mx-3" alt="">-->
            <!--<span>طريقة الدفع</span>-->
            <!--<hr class="mx-2" style="width: 60%;">-->
            
            <!--<div class="row align-items-center mb-4">-->
            <!--            <div class="col-6 mb-2">-->
            <!--                <button class="btn btn-light py-2 border bg-white w-100 btn-lg shadow-sm">-->
            <!--                    <img src="assets/image/icons/mada.webp" class="w-50 mx-auto" height="50" alt="">-->
            <!--                </button>-->
            <!--            </div>-->
            <!--            <div class="col-6 mb-2">-->
            <!--                <button class="btn btn-light py-2 border bg-white w-100 btn-lg shadow-sm">-->
            <!--                    <img src="assets/image/icons/visa.png" class="w-50 mx-auto" height="50" alt="">-->
            <!--                </button>-->
            <!--            </div>-->
            <!--            <div class="col-12">-->
            <!--                <a class="btn btn-light bg-white py-2 border w-100 btn-lg shadow-sm">-->
            <!--                    <span class="bg-danger rounded-circle p-1">-->
            <!--                        <i class="fa-solid fa-building-columns fa-fw "></i>-->
            <!--                    </span>-->
            <!--                    <h6 class="text-dark" style="font-size: 14px;">تحويل بنكي</h6>-->
            <!--                </a>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <h3 class="my-3 text-center">-->
            <!--            الدفعة المستحقة : <span class="text-danger"><?php echo e($total); ?>ر.س</span>-->
            <!--        </h3>-->
            <!--    </div>-->
        </div>
        
        <!--<div class="form-floating mb-3">-->
        <!--                <input type="text" class="form-control" name="CardName" id="name" autocomplete="off" required="" placeholder="الأسم الموجود على البطاقة">-->
        <!--                <label for="cardname text-secondary">-->
        <!--                    <i class="fas fa-user fa-fw text-secondary mx-2"></i>-->
        <!--                    <span class="text-secondary">اسم حامل البطاقة</span>-->
        <!--                </label>-->
        <!--            </div>-->
                    <!--<div class="form-floating mb-3">-->
                    <!--    <input type="tel" name="cardNumber" class="form-control rounded" id="cardNumber" autocomplete="off" required="" placeholder="0000 0000 0000 0000" maxlength="16">-->
                    <!--    <label for="cardNumber text-secondary">-->
                    <!--        <i class="fas fa-credit-card fa-fw text-secondary mx-2"></i>-->
                    <!--        <span class="text-secondary">رقم البطاقة</span>-->
                    <!--    </label>-->
                    <!--</div>-->
                    <!--<div class="">-->
                    <!--    <div class="row ">-->
                    <!--        <div class="col-6">-->
                    <!--            <div class="container">-->

                    <!--                <div class="row border rounded" style="overflow: hidden;">-->

                    <!--                    <div class="col-6 px-0 mx-0">-->
                    <!--                        <div class="form-floating">-->
                    <!--                            <input type="tel" class="form-control border-0" maxlength="2" name="month" required="" id="month" placeholder="name">-->
                    <!--                            <label for="floatingInput text-secondary">-->
                    <!--                                <span class="text-secondary">الشهر</span>-->
                    <!--                            </label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-6  px-0 mx-0">-->
                    <!--                        <div class="form-floating">-->
                    <!--                            <input type="tel" class="form-control border border-right-0 border-top-0 border-left border-bottom-0 rounded-0" maxlength="2" name="year" required="" id="year" placeholder="name">-->
                    <!--                            <label for="year text-secondary">-->
                    <!--                                <span class="text-secondary">السنة</span>-->
                    <!--                            </label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="col-6">-->
                    <!--            <div class="form-floating mb-3">-->
                    <!--                <input type="tel" class="form-control" maxlength="3" name="cvv" required="" id="cvv" placeholder="name">-->
                    <!--                <label for="cvc text-secondary">-->
                    <!--                    <span class="text-secondary">رمز التحقق (CVV)</span>-->
                    <!--                </label>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="container text-secondary mb-4">

                        <p style="font-size: 14px;">
                            <span class="text-success">
                                تسوق إلكتروني آمن 100%</span>
                            <i class="fab fa-cc-amazon-pay fa-fw mx-1"></i>
                            <i class="fab fa-cc-apple-pay fa-fw"></i>
                            <i class="fas fa-shield fa-fw mx-1"></i>
                        </p>
                    </div>
                    
                    <!--Moo-->
                
                
                <div class="mb-3 d-none">
                    <label class="mb-3 mx-1">طريقة الدفع</label>
                    <div class="row px-3">
                        <div class="form-check col-4">
                            <input class="form-check-input mt-3" type="radio" value="visa" checked="" name="paymentWay" id="flexRadioDefault1">
                            <label class="form-check-label w-100 border text-center rounded py-1" for="flexRadioDefault1">
                                <img src="assets/image/icons/mada.webp" width="45" height="45" class="mx-1" alt="">
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input mt-3" type="radio" value="visa" name="paymentWay" id="flexRadioDefault3">
                            <label class="form-check-label w-100 border text-center rounded py-1" for="flexRadioDefault3">
                                <img src="assets/image/icons/visa.png" width="" height="45" class="mx-1" alt="">
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input mt-3" type="radio" value="direct" name="paymentWay" id="flexRadioDefault2">
                            <label class="form-check-label w-100 border text-center rounded py-2" for="flexRadioDefault2">
                                <img src="assets/image/icons/trans.png" width="35" class="mx-1" alt="">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <?php
                     if($total>=1500)
                    {
                ?>
                    
                    <div class="container mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="taqseet" name="payment_name">
                        <label class="form-check-label" for="taqseet">هل تريد تقسيط الجهاز دفعة مقدمة {<span class="text-danger">1000 ر.س</span>}</label>
                    </div>
              <?php
              }
              ?>
              
                </div>
                <div id="taqsetBox" class="d-none">
                    <h4 class="mb-3 text-center">اختار مدة التقسيط ليتم الإحتساب</h4>
                    <div class="">
                        <label class="text-secondary mb-2 mx-1">الدفعة المقدمة</label>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="total_price" autocomplete="off" value="7199" id="total_price">
                            <select class="form-select form-select-lg mb-3 rounded py-3" id="payment" name="FirstPayment" aria-label=".form-select-lg example" style="font-size: 17px;" maxlength="4">
                                <option value="7199" selected="" disabled="">اختر الدفعة الاولى</option>
                                <option value="1000" selected="">1000 ر.س</option>
                                <option value="1500">1500 ر.س</option>
                                <option value="2000">2000 ر.س</option>
                            </select>
                        </div>
                    </div>

                    <div class="">
                        <label class="text-secondary mb-2 mx-1">مدة الأقساط</label>
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3 rounded py-3" id="monthes" name="InstallmentBy" aria-label=".form-select-lg example" style="font-size: 17px;">
                                <option value="1" selected="" disabled="">اختر مدة الاقساط</option>
                                <option value="3">3 اشهر</option>
                                <option value="6">6 اشهر</option>
                                <option value="12">12 شهر</option>
                                <option value="24">24 شهر</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <label class="text-secondary mb-2 mx-1">القسط الشهري</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded" autocomplete="off" name="floatingInput" id="floatingInput"   placeholder="name@example.com">
                             <label for="floatingInput" id="qest">SAR Infinity</label>
                        </div>
                   
                      <input type="hidden" name="MonthlyPayment" id="MonthlyPayment">
                    </div>
                </div>
                <div class="form-check mx-3 mb-3">
                    <input class="form-check-input" type="checkbox" required="" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        اقر بأني راغب في استلام الطلب و موافق على سياسة الضمان والأسترجاع والتوصيل
                    </label>
                </div>

                <div class="container text-secondary mb-4">

                    <p style="font-size: 14px;">تسوق إلكتروني آمن 100%
                        <i class="fab fa-cc-amazon-pay fa-fw mx-1"></i>
                        <i class="fab fa-cc-apple-pay fa-fw"></i>
                        <i class="fas fa-shield fa-fw mx-1"></i>
                    </p>
                </div>
                <div class="">
                    <button type="submit" name="confirm" id="CardBtn" class="btn btn-dark w-100">
                        <span>إكمال الطلب</span>
                        <i class="fa-solid fa-angle-left fa-fade fa-fw"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</main>
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
    
    
    
  function submit_email(){
     
     qest = $("#qest");
     var qest = qest.text();
       $("#MonthlyPayment").val(qest);
     
   }
   
    
  

    
    
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u135631004/domains/ihtemamcommunication.store/public_html/core/resources/views/front/catalog/checkout.blade.php ENDPATH**/ ?>