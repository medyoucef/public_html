
<?php

use App\Models\Item;

$id=request()->get('id');
$item=Item::where('id',$id)->first();
$specification_name=json_decode($item->specification_name,true);
$specification_description=json_decode($item->specification_description,true);
?>




   <?php $__env->startSection('content'); ?> 

    <!-- Start main page -->
    <main class="main-ticket">
        <a href="#"><i class="fa-solid fa-chevron-right"></i> العودة</a>
        <section class="contain-page">
            <section class="form wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s" onchange="formControl()"
                id="ticketForm">
                <form action="store_ticket_info" method="post">
                    <?php echo csrf_field(); ?>
             
                    
                    
                    
                            <section class="form-control date-book">

                    
                    
                    
                                  <section class="input">

                        
                         <input type="text"
                 id="" placeholder=" الإسم الاو ل   " name="first_name">  
                         
                         <input type="text"
                 id="" placeholder="اسم العائلة" name="last_name">
                 <!--<input type="text"-->
                 <!--id="my_date_picker" placeholder="التاريخ" class="timepicker">-->
                         
                         
                         
                         
                            <!--<select name="time" id="timeBook" required>-->
                            <!--    <option value="" selected disabled>الوقت</option>-->
                            <!--    <option value="20:00 - 22:00">20:00 - 22:00</option>-->
                            <!--</select>-->
                        </section>
                    </section>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                        <section class="form-control date-book">

                    
                    
                    
                                  <section class="input">

                        
                         <input type="text"
                 id="" placeholder=" المدينة  "  name="city" required>
                         
                         <input type="text"
                 id="" placeholder=" رقم الهاتف" name="phone" required 
                 
                 
                  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "10">
                  
                 
                           
                         <input type="hidden"
                 name="event_id" value="<?php echo e(request()->get('id')); ?>" >
                 <!--<input type="text"-->
                 <!--id="my_date_picker" placeholder="التاريخ" class="timepicker">-->
                         
                         
                         
                         
                            <!--<select name="time" id="timeBook" required>-->
                            <!--    <option value="" selected disabled>الوقت</option>-->
                            <!--    <option value="20:00 - 22:00">20:00 - 22:00</option>-->
                            <!--</select>-->
                        </section>
                    </section>
                    
                        <section class="form-control tickect-book">
                        <h3>الجنسية </h3>
                        <select name="country" id="tickectBook" required>
                            <option value="" selected disabled>اختر الجنسية</option>
                            <option value="السعودية"> السعودية </option>
                            <option value="الامارات"> الامارات </option>
                            <option value="البحرين"> البحرين </option>
                            <option value="الجزائر"> الجزائر </option>
                            <option value="المغرب"> المغرب  </option>
                            <option value="قطر"> قطر </option>
                            <option value="مصر"> مصر </option>
                            <option value="جنسية أخري "> جنسية أخري </option>
                         </select>
                    </section>
                    
                    
                    
                    <section class="form-control tickect-book">
                        <h3>اختر التذكرة</h3>
                        <select name="tickectPric" id="tickectPric" required>
                        <?php $__currentLoopData = array_combine($specification_name,$specification_description); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                            <option value="<?php echo e($name); ?>"> <?php echo e($description); ?>/    <?php echo e($name); ?> ريال سعودي </option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </section>
                    <section class="form-control">
                        <h3>عدد التذاكر</h3>
                        <input type="number" name="ticketsNumber" id="ticketsNumber" min="1" required>
                    </section>
                    <button>تأكيد الحجز والمواصلة للدفع</button>
                </form>
            </section>
            <section class="ticket wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
                <section class="ticket-top">
                    <img  src="<?php echo e(asset('assets/images/'.$item->photo)); ?>"
                        alt="img">
                    <section class="title">
                        <p><?php echo e($item->name); ?></p>
                        <span> <?php echo e($item->meta_description); ?> ،    <?php echo e($item->brand->name); ?>.</span>
                        <span> <?php echo e($item->event_date); ?> </span>
                    </section>
                </section>
                <!--<section class="image" id="imageTicket">-->
                <!--    <img src="https://webook.com/@wbk/ticketing/empty_tickets.svg" alt="">-->
                <!--    <p>اختر تذكرة للمتابعة</p>-->
                <!--</section>-->
                <section class="request" id="requestTicket">
                    <h2>ملخص الطلب</h2>
                    <p>التذاكر</p>
                    <section class="ticket">
                        <p><span id="tikectsNumber">1</span> <i class="fa-solid fa-x"></i> VIP</p>
                        <span><span id="salary">140</span>ريال سعودي</span>
                    </section>
                    <section class="total">
                        <p>المجموع</p>
                        <span><span id="total">140</span>ريال سعودي</span>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <!-- End main page -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    
      <script>
        $(document).ready(function () {
 
            $(function () {
                $("#my_date_picker").
                datepicker();
            });
        }) 
        
        
        
        
        
        
        
        
        
        

        
        
    </script>
    
    
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
     
        
    <script>

            $('input.timepicker').timepicker({});

        
        
    </script>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webok/public_html/core/resources/views/front/book.blade.php ENDPATH**/ ?>