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
        <a href="#">
            <i class="fa-solid fa-chevron-right"></i> العودة</a>
        
        <section class="contain-page">

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

        .legend-color.royal { background-color: rgb(104, 159, 56); }
        .legend-color.diamond { background-color: rgb(1, 87, 155); }
        .legend-color.orange { background-color: rgb(255, 111, 0); }
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
            margin-bottom: 5px;
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
    width: 10px;
    height: 10px;
    border-radius: 50%; /* تحويل الشكل إلى دائرة */
    background-color: #7f8c8d;
    transition: transform 0.2s, background-color 0.2s;
    cursor: pointer;
    position: relative;
}

.seat:hover {
    transform: scale(1.2); /* تأثير التكبير عند التمرير */
}


        .seat.royal { background-color: rgb(104, 159, 56); }
        .seat.diamond { background-color: rgb(1, 87, 155); }
        .seat.orange { background-color: rgb(255, 111, 0); }
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
    <div class="legend">
     <?php
      $firstFour = [
        "royal" => 13,
        "diamond" => 25,
        "orange" => 50,
        "black" => 100,
        "silver" => 125,
        "bronze" => 160
       
    ];
    $prices = [];
      $color = ["royal","diamond","orange","black","silver","bronze"];
      $i = 0;
      
      $conn = new mysqli(env('DB_HOST', '127.0.0.1'), env('DB_USERNAME', 'forge'),env('DB_PASSWORD', ''), env('DB_DATABASE', 'forge'));
      $sql = "SELECT specification_name FROM items WHERE id = ".$_GET['id'];
      $result = $conn->query($sql);
      if ($row = $result->fetch_assoc()) {
          $numbersArray = json_decode($row['specification_name'], true);
          foreach ($numbersArray as $number) {
              $prices[$color[$i]] =  $number;
            echo '
            <div class="legend-item">
                <div class="legend-color ' . $color[$i] . '"></div>
                <span>' . $color[$i] . ' - '.$number.' ريال</span>
            </div>
           ';
            $i++;
      }
      $seatCounts = array_slice($firstFour, 0, $i, true);
      }
      $conn->close();
     
   ?>
   </div>
        <div class="stage">المسرح</div>
        <div class="theater">


<?php


$layout = [];
foreach ($seatCounts as $type => $count) {
    $row = []; // صف لكل نوع
    for ($i = 1; $i <= $count; $i++) {
        // تحديد بعض المقاعد على أنها محجوزة عشوائيًا
        $isReserved = rand(0, 4) === 0; // احتمال 1 من 5 لجعل الكرسي محجوزاً
        $row[] = [
            "type" => $isReserved ? "empty" : $type, // إذا محجوز، النوع يكون "empty"
            "seat_number" => $i
        ];
    }
    $layout[] = $row;
}

// عرض المقاطع
    echo "<div class='row'>";

foreach ($layout as $rowIndex => $row) {
    foreach ($row as $seat) {
        $type = $seat['type'];
        $seatNumber = $seat['seat_number'];
        $class = $type === "empty" ? "seat empty" : "seat $type";
        $price = isset($prices[$type]) ? $prices[$type] : 0;

        // عرض معلومات الكرسي
        echo "<div class='$class' data-seat-number='$seatNumber' data-seat-type='$type' data-price='$price'>";
        echo $type === "empty" ? "":"";
        echo "</div>";
    }
}
    echo "</div>";

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
                    <input type="email" id="" name="city" placeholder="أدخل بريدك الإلكتروني" required>
                    <input type="text" id="" placeholder="رقم الهاتف" name="phone" required maxlength="10" type="number">
                    <input type="hidden" name="event_id" value="<?php echo e(request()->get('id')); ?>">
                    <input type="hidden" name="tickectPric" value="1">
                    <input type="hidden" id="ticketsNumber" name="ticketsNumber" value="1">
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
                document.getElementById("ticketsNumber").value = total;
            }
        });
    </script>
</body>
</html>

           
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u290663640/domains/webookriyadhseason.com/public_html/core/resources/views/front/book.blade.php ENDPATH**/ ?>