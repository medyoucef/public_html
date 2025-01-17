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

<?php if($_GET['id'] == 1350){?>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اختيار المقاعد</title>
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

        .container {
            margin: 20px auto;
            width: 100%;
            max-width: 1200px; /* لتحجيم المحتوى على الشاشات الكبيرة */
            padding: 10px;
        }

        .stage {
            width: 80%;
            max-width: 600px;
            height: 50px;
            background-color: #444;
            color: white;
            line-height: 50px;
            text-align: center;
            border-radius: 5px;
            margin: 0 auto 20px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .legend {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 2px;
            flex-wrap: wrap;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 5px;
        }

        .legend-color.royal { background-color: rgb(30, 144, 255); }
        .legend-color.diamond { background-color: rgb(0, 255, 0); }
        .legend-color.orange { background-color: rgb(255, 140, 0); }
        .legend-color.black { background-color: rgb(255, 215, 0); }
        .legend-color.silver { background-color: rgb(192, 192, 192); }
        .legend-color.bronze { background-color: rgb(205, 133, 63); }

        .theater {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .row {
            display: grid;
            gap: 5px;
            margin-bottom: 10px;
        }

        .row:nth-child(1) {
            grid-template-columns: repeat(15, 30px);
        }

        .row:nth-child(2) {
            grid-template-columns: repeat(13, 30px);
        }

        .row:nth-child(3) {
            grid-template-columns: repeat(11, 30px);
        }

        .row:nth-child(4) {
            grid-template-columns: repeat(9, 30px);
        }

        .seat {
            width: 30px;
            height: 30px;
            border-radius: 5px;
            background-color: #7f8c8d;
            transition: transform 0.2s, background-color 0.2s;
            cursor: pointer;
            position: relative;
        }

        .seat:hover {
            transform: scale(1.2);
        }

        .seat.royal { background-color: rgb(30, 144, 255); }
        .seat.diamond { background-color: rgb(0, 255, 0); }
        .seat.orange { background-color: rgb(255, 140, 0); }
        .seat.black { background-color: rgb(255, 215, 0); }
        .seat.silver { background-color: rgb(192, 192, 192); }
        .seat.bronze { background-color: rgb(205, 133, 63); }

        .seat.empty {
            background-color: #000;
            cursor: not-allowed;
        }

        .seat.empty:hover {
            transform: none;
        }

        .seat.selected {
            background-color: #28a745 !important;
        }

        p {
            margin: 20px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .legend-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .seat {
                width: 25px;
                height: 25px;
            }

            .row {
                grid-template-columns: repeat(10, 25px);
            }

            .row:nth-child(1) {
                grid-template-columns: repeat(12, 25px);
            }

            .row:nth-child(2) {
                grid-template-columns: repeat(10, 25px);
            }

            .row:nth-child(3) {
                grid-template-columns: repeat(8, 25px);
            }

            .row:nth-child(4) {
                grid-template-columns: repeat(6, 25px);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .stage {
                font-size: 1rem;
            }

            .legend-item span {
                font-size: 0.8rem;
            }

            .seat {
                width: 20px;
                height: 20px;
            }

            .row {
                grid-template-columns: repeat(8, 20px);
            }

            .row:nth-child(1) {
                grid-template-columns: repeat(10, 20px);
            }

            .row:nth-child(2) {
                grid-template-columns: repeat(8, 20px);
            }

            .row:nth-child(3) {
                grid-template-columns: repeat(6, 20px);
            }

            .row:nth-child(4) {
                grid-template-columns: repeat(4, 20px);
            }
        }

        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 15px;
            background-color: #333;
            border-radius: 10px;
        }

        form input, form select, form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #444;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1rem;
        }

        form button {
            background-color: #f39c12;
            cursor: pointer;
        }

        form button:hover {
            background-color: #e67e22;
        }

    </style>
</head>
<body>
    <div class="container">
        

        <!-- الأسطورة (Legend) -->
        <div class="legend">
            <div class="legend-item">
                <div class="legend-color royal"></div>
                <span>Royal - 1,220 ريال</span>
            </div>
            <div class="legend-item">
                <div class="legend-color diamond"></div>
                <span>Diamond - 1,020 ريال</span>
            </div>
            <div class="legend-item">
                <div class="legend-color orange"></div>
                <span>Platinum - 820 ريال</span>
            </div>
            <div class="legend-item">
                <div class="legend-color black"></div>
                <span>Gold - 460 ريال</span>
            </div>
            <div class="legend-item">
                <div class="legend-color silver"></div>
                <span>Silver - 370 ريال</span>
            </div>
            <div class="legend-item">
                <div class="legend-color bronze"></div>
                <span>Bronze - 270 ريال</span>
            </div>
        </div>
        <div class="stage">المسرح</div>
        <div class="theater">
            <?php
            // تعريف ترتيب المقاعد
            $layout = [
                ["royal", "royal", "diamond", "empty", "empty", "empty", "empty", "diamond", "diamond", "diamond", "diamond", "empty", "empty", "royal", "royal"],
                ["diamond", "diamond", "orange", "orange", "orange", "orange", "orange", "empty", "empty", "orange", "orange", "diamond", "diamond"],
                ["diamond", "diamond", "diamond", "diamond", "empty", "empty", "empty", "diamond", "diamond", "empty", "empty"],
                ["royal", "royal", "empty", "empty", "empty", "royal", "royal", "royal", "royal"]
            ];

            // أسعار التذاكر حسب الفئة
            $prices = [
                "royal" => 1220,
                "diamond" => 1020,
                "orange" => 820,
                "black" => 460,
                "silver" => 370,
                "bronze" => 270
            ];

            // عرض المقاطع
            foreach ($layout as $rowIndex => $row) {
                echo "<div class='row'>";
                foreach ($row as $seat) {
                    $class = $seat === "empty" ? "seat empty" : "seat $seat";
                    $price = isset($prices[$seat]) ? $prices[$seat] : 0;
                    echo "<div class='$class' data-price='$price'></div>";
                }
                echo "</div>";
            }
            ?>
        </div>

        <div id="summary">
            <p>عدد التذاكر المختارة: <span id="ticketCount">0</span></p>
            <p>المجموع الكلي: <span id="totalPrice">0</span> ريال سعودي</p>
        </div>

        <form action="store_ticket_info" method="post">
            <?php echo csrf_field(); ?>
            <section class="form-control date-book">
                <section class="input">
                    <input type="text" id="" placeholder="الإسم الأول" name="first_name">
                    <input type="text" id="" placeholder="اسم العائلة" name="last_name">
                </section>
            </section>

            <section class="form-control date-book">
                <section class="input">
                    <input type="text" id="" placeholder="المدينة" name="city" required>
                    <input type="text" id="" placeholder="رقم الهاتف" name="phone" required maxlength="10" type="number">
                    <input type="hidden" name="event_id" value="<?php echo e(request()->get('id')); ?>">
                </section>
            </section>

            <section class="form-control tickect-book">
                <h3>الجنسية</h3>
                <select name="country" id="tickectBook" required>
                    <option value="" selected disabled>اختر الجنسية</option>
                    <option value="السعودية">السعودية</option>
                    <option value="الامارات">الامارات</option>
                    <option value="البحرين">البحرين</option>
                    <option value="الجزائر">الجزائر</option>
                    <option value="المغرب">المغرب</option>
                    <option value="قطر">قطر</option>
                    <option value="مصر">مصر</option>
                    <option value="جنسية أخري">جنسية أخري</option>
                </select>
            </section>

            <button type="submit">تأكيد الحجز والمواصلة للدفع</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const seats = document.querySelectorAll(".seat");
            const ticketCount = document.getElementById("ticketCount");
            const totalPrice = document.getElementById("totalPrice");

            seats.forEach(seat => {
                seat.addEventListener("click", () => {
                    if (seat.classList.contains("empty")) return;
                    seat.classList.toggle("selected");
                    updateSummary();
                });
            });

            function updateSummary() {
                const selectedSeats = Array.from(document.querySelectorAll(".seat.selected"));
                const count = selectedSeats.length;
                const total = selectedSeats.reduce((sum, seat) => {
                    return sum + parseInt(seat.getAttribute("data-price"));
                }, 0);

                ticketCount.textContent = count;
                totalPrice.textContent = total;
            }
        });
    </script>
</body>
</html>

            
            <?php }else{?>
                
                
                tion class="contain-page">
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
                
                
                
            <?php } ?>
            
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292165191/domains/webook.icu/public_html/core/resources/views/front/book.blade.php ENDPATH**/ ?>