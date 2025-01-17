
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
                <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مسرح دائري مع المقاعد المحجوزة</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #f39c12;
            margin: 20px 0;
        }

        .stage {
            background-color: #d35400;
            color: #fff;
            font-weight: bold;
            width: 200px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 25px;
            margin-bottom: 20px;
        }

        .theater {
            display: grid;
            grid-template-columns: repeat(21, 1fr);
            gap: 5px;
            width: 80%;
            max-width: 800px;
            position: relative;
        }

        .seat {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #7f8c8d;
            transition: transform 0.2s, background-color 0.2s;
            cursor: pointer;
            position: relative;
        }

        .seat:hover {
            transform: scale(1.2);
        }

        .seat.blue { background-color: rgb(184, 116, 240); }
        .seat.green { background-color: rgb(141, 203, 215); }
        .seat.orange { background-color: rgb(202, 42, 82); }
        .seat.black { background-color: rgb(204, 198, 46); }

        /* المقعد المحجوز */
        .seat.empty {
            background-color: #000;
            cursor: not-allowed;
        }

        .seat.empty:hover {
            transform: none;
        }

        /* إضافة تنسيق للنص الذي يظهر للمقاعد المحجوزة */
        .seat-text {
            color: #fff;
            font-size: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        p {
            margin: 20px;
        }

        /* إضافة تنسيق للمقعد المختار */
        .seat.selected {
            background-color: #28a745 !important;
        }

    </style>
</head>
<body>
    <h1>اختيار المقاعد مع المقاعد المحجوزة</h1>
    <div class="stage">المسرح</div>
    <div class="theater">
        <?php
        $layout = [
            // الصف الأول
            ["empty", "empty", "empty", "blue", "blue", "blue", "blue", "blue", "empty", "empty", "blue", "blue", "blue", "blue", "empty", "empty", "blue", "blue", "empty", "empty", "empty"],
            // الصف الثاني
            ["empty", "blue", "blue", "blue", "blue", "blue", "empty", "empty", "empty", "blue", "empty", "empty", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "empty"],
            // الصف الثالث
            ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "empty", "empty", "blue", "blue", "blue", "blue", "blue", "blue"],
            // الصف الرابع
            ["green", "green", "green", "green", "green", "green", "empty", "empty", "empty", "empty", "green", "green", "green", "green", "green", "green", "green", "green", "green", "green", "green"],
            // الصف الخامس
            ["green", "green", "empty", "empty", "green", "green", "green", "empty", "empty", "green", "green", "green", "green", "empty", "empty", "green", "green", "green", "green", "green", "green"],
            // الصف السادس
            ["orange", "orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange"],
            // الصف السابع
            ["orange", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "empty", "empty", "empty", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange"],
            // الصف الثامن
            ["orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange"],
            // الصف التاسع
            ["orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange"],
            
            ["orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange"],
            // الصف التاسع
            ["orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "orange", "orange", "orange", "orange", "orange"],
            
            ["black", "black", "black", "black", "black", "empty", "empty", "black", "black", "empty", "empty", "black", "empty", "empty", "empty", "black", "black", "black", "black", "black", "black"],
            
            ["black", "black", "empty", "empty", "empty", "black", "black", "black", "black", "black", "empty", "empty", "black", "empty", "empty", "empty", "empty", "black", "black", "black", "black"],
             
        
          ];

        foreach ($layout as $rowIndex => $row) {
            foreach ($row as $colIndex => $seat) {
                $class = $seat === "empty" ? "seat empty" : "seat $seat";
                $dataSeat = "row" . ($rowIndex + 1) . "-seat" . ($colIndex + 1);
                $text = $seat === "empty" ? "<div class='seat-text'></div>" : ""; // نص للمقاعد المحجوزة
                echo "<div class='$class' data-seat='$dataSeat'>$text</div>";
            }
        }
        ?>
    </div>

    <p id="selectedSeats">المقاعد المختارة: </p>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const seats = document.querySelectorAll(".seat");
        const selectedSeatsDisplay = document.getElementById("selectedSeats");

        seats.forEach(seat => {
            seat.addEventListener("click", () => {
                if (seat.classList.contains("empty")) return; // تجاهل المقاعد المحجوزة
                seat.classList.toggle("selected");
                updateSelectedSeats();
            });
        });

        function updateSelectedSeats() {
            const selectedSeats = Array.from(document.querySelectorAll(".seat.selected"))
                .map(seat => seat.getAttribute("data-seat"));
            selectedSeatsDisplay.textContent = "المقاعد المختارة: " + selectedSeats.join(", ");
        }
    });
</script>
</body>
</html>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292165191/domains/greenyellow-herring-254530.hostingersite.com/public_html/core/resources/views/front/book.blade.php ENDPATH**/ ?>