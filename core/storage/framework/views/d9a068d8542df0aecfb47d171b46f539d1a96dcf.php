
   <?php $__env->startSection('content'); ?> 

  <main><main>
    <section class="mt-5 py-3">
    </section>
    <section class="container-fluid mt-3">
        <div class="d-flex align-items-center justify-content-center">
            <h6 class="text-start text-secondary">
                مراجعة الطلب
            </h6>
            <h6 class="text-start text-secondary mx-2">
                .......
            </h6>
            <h6 class="text-start text-secondary">
                عنوان
            </h6>
            <h6 class="text-start text-secondary mx-2">
                .......
            </h6>
            <h6 class="text-start text-secondary">
                الدفع
            </h6>
        </div>
        <div class="">

        <div class="row my-2">
                            <!-- itmes -->
             <div class="col-md-8 my-2">  
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
                               

          

?>
<div class="container rounded border bg-white shadow" style="margin-bottom: 20px;">
                                    <div class="row align-items-center py-2">
                                        <div class="col-2">
                                            <div class="rounded shadow">
                                                <img class="ms-auto me-auto d-md-block d-none w-100" src="uploads//1887828483.jpg" alt="<?php echo e($details['name']); ?> ">
                                                <div class="row">
                                                    <img class="ms-auto me-auto d-md-none w-100" src="<?php echo e(asset('assets/images/'.$details['image'])); ?>"  alt="<?php echo e($details['name']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 mt-md-0 mt-3 px-0 mx-0">
                                            <a  href="<?php echo e(route('front.product',$details['slug'])); ?>"  class="px-2 text-decoration-none h6 d-block text-dark text-center">
                                                     <?php echo e($details['name']); ?>

                                                        </a>
                                        </div>
                                        <div class="col-4 my-3 px-0">
                                                      <div class="col-6" data-id="<?php echo e($id); ?>"  >
                                                <select  name="Quantity" class="form-control   qunatity" id="qunatity">
                                                <option <?php if($quantity==0): ?> selected <?php endif; ?>   value="0" >0</option>
                                                <option <?php if($quantity==1): ?> selected <?php endif; ?>   value="1" >1</option>
                                                <option <?php if($quantity==2): ?> selected <?php endif; ?>  value="2" >2</option>
                                                <option <?php if($quantity==3): ?> selected <?php endif; ?>  value="3" >3</option>
                                                <option  <?php if($quantity==4): ?> selected <?php endif; ?>  value="4">4</option>
                                                <option <?php if($quantity==5): ?> selected <?php endif; ?>  value="5">5</option>
                                               <option  <?php if($quantity==6): ?> selected <?php endif; ?>  value="6">6</option>
                                                </select>                                                    </div>
                                                    <!--<div class="col-6 text-end fs-6 text-warning">-->
                                                    <!--    <?php echo e($details['price']); ?> ر.س                                                -->
                                                    <!--</div>-->
                                          </div>
                                        <div class="col-2 mt-md-0 my-2">
                                              <form action="remove_cart" method="get">
                                                <input type="hidden" name="id" value="<?php echo e($id); ?>" >
                                                <div>
                                                    <button name="deleteItem" class="btn btn-outline-secondary w-100" style="height: 35px;"><i class="fas fa-trash-can"></i></button>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                                </div>                                                             
                                                            
                             <?php
}}                                ?>
                                    
                                                                    </div>

                          <div class="col-md-4 text-secondary">
                                <div class="container rounded bg-white shadow border my-2 px-3 py-2">
                                    <h5 class="border-bottom py-3 mb-3 fw-normal">تفاصيل الفاتورة</h5>
                                    <div class="row my-2">
                                        <div class="col-6">قيمة المنتجات :</div>
                                        <div class="col-6 text-end"><?php echo e($total); ?> ر.س</div>
                                    </div>
                               
                                    <div class="row my-2 border-top pt-2 text-dark fw-semibold">
                                        <div class="col-6">المجموع الكلي :</div>
                                        <div class="col-6 text-end text-success"><?php echo e($total); ?> ر.س</div>
                                    </div>
                                    <div class="row mt-5 mb-3">
                                        <div class="col-12">
                                            <a href="checkout" class="btn w-100 btn-outline-dark">
                                                <i class="fas fa-angle-right fa-fw"></i>
متابعة عملية الشراء                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </section>

    <a href="https://wa.me/+966502254940" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>
</main>
<footer class="bg-light pt-3 mt-3 border border-top">
    <div class="d-flex justify-content-center w-100 py-3">
        <a href="index.php.html">
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
                            <a class="text-decoration-none mainColor" href="termsConditions.php.html">سياسة الضمان والاستبدال</a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="workTimes.php.html">اوقات العمل
                            </a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="refundAndCancleOrders.php.html">استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ
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
                        <a href="https://wa.me/+966502254940" class="text-decoration-none">
                            <div class="text-dark px-2 rounded" style="background-color: #ECEDEF;">
                                <i class="fab fa-whatsapp fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">واتساب</p>
                            </div>
                        </a>
                        <a href="https://wa.me/+966502254940" class="text-decoration-none mx-2">
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
                    <h5 class="pb-3 text-center mb-4" style="color: #00395e;">تطبيقات متجر SmartEco STORE</h5>
                    <div class="container text-center">
                        <div class="d-flex justify-content-center">
                            <div class="me-2">
                                <img src="assets/image/icons/appstore.webp" class="w-100" alt="">
                            </div>
                            <div>
                                <img src="assets/image/icons/googleplay.webp" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="https://smarteco-sa.store" class="text-light p-0 border-0 text-decoration-none">
                        <img src="assets/image/icons/qr-code.png" width="50" alt="">
                    </a>
                    <a href="https://maroofapp.page.link/S4uGUerxPWePq9QC7" class="ms-3 text-decoration-none">
                        <img src="assets/image/icons/maroof.webp" width="80" alt="">
                    </a>
                    <a href="https://smarteco-sa.store" class="ms-3 text-light p-0 border-0 text-decoration-none">
                        <img src="assets/image/icons/vat.webp" width="40" height="45" alt="">
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
                        <img src="assets/image/icons/mada.webp" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="assets/image/icons/visa.png" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="assets/image/icons/bank.webp" width="35" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--<script src="jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>-->
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
</script>



<script>
    
    function deleteItem(id)
{
                    $.ajax({
                        type: "get",
                        url: '/remove-from-cart/' + id,
                        success: function (data) {
                                location.reload();

 	                                        	toastr.success('We do have the Kapua suite available.', 'Success Alert', {timeOut: 2000});
                                                           location.reload().delay(20000);

                         }
                    });
}




 $('.qunatity').on('change', function(e)
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












</main>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/almmlakamobail/public_html/core/resources/views/front/catalog/cart.blade.php ENDPATH**/ ?>