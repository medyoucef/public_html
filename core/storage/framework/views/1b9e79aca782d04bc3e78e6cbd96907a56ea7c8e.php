<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاتورة شراء</title>

    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..<?php echo e($order->FirstPayment); ?>&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Cairo", sans-serif;
            direction: rtl;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
            line-height: 1.6;
        }

        h2 {
            font-size: 18px;
        }

        h4,
        p {
            font-size: 14px;
        }

        .container {
            margin-inline: auto;
            padding-inline: 15px;
        }

        @media (min-width: 786px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width: 991px) {
            .container {
                width: 950px;
            }
        }

        @media (min-width: 1199px) {
            .container {
                width: 1150px;
            }
        }



        .header .container {
            border-bottom: 2px solid #0000001d;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-block: 10px;

            img {
                width: 100px;
            }
        }

        .request .container {
            border-bottom: 2px solid #0000001d;
            display: flex;
            justify-content: space-between;
            padding-block: 25px;

            >section h2 {
                color: #0a47a2;
            }

            h4 span {
                color: red;
            }
        }

        .export .container {
            border-bottom: 2px solid #0000001d;
            padding-block: 25px;
            display: flex;
            justify-content: space-between;
            gap: 70px;

            >section {
                flex: 1;

                h2 {
                    color: #0a47a2;
                }

                h4,
                p {
                    margin-bottom: 5px;
                }

                h4 span,
                p {
                    font-weight: 600;
                }

                h4 {
                    display: flex;
                    justify-content: space-between;

                    span {
                        font-weight: 600;
                    }
                }
            }
        }

        .payment .container {
            border-bottom: 2px solid #0000001d;
            padding-block: 25px;
            display: flex;
            justify-content: space-between;
            gap: 70px;

            >section {
                flex: 1;

                h2 {
                    color: #0a47a2;
                }

                h4 {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 5px;

                    span {
                        font-weight: 600;
                    }
                }
            }
        }

        .request-det .container {
            border-bottom: 2px solid #0000001d;
            padding-block: 25px;

            h2 {
                color: #0a47a2;
                margin-bottom: 15px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                text-align: center;
                margin-bottom: 15px;

                th {
                    background-color: #0a47a2;
                    color: #fff;
                    padding-block: 2px;
                }

                td {
                    padding-block: 2px;
                }

                td img {
                    width: 65px;
                }

                tr:nth-child(odd) {
                    background-color: #0000001d;
                }
            }

            .req>section {
                display: flex;
                justify-content: space-between;
                padding: 5px;
            }

            .req>section:nth-child(odd) {
                background-color: #0000001d;
            }

        }


        .website .container {
            border-bottom: 2px solid #0000001d;
            padding-block: 25px;
            display: flex;
            justify-content: space-around;
            gap: 70px;

            >section {
                text-align: center;

                p {
                    margin-bottom: 2px;
                }

                img {
                    width: 150px;
                }
            }
        }

        footer {
            text-align: center;
            padding: 3px;

            p {
                font-size: 12px;
            }
        }

        @media  print {

            .header .container img {
                width: 80px;
            }


            h2 {
                font-size: 14px;
            }

            h4,
            p {
                font-size: 12px;
            }

            .website .container,
            .header .container,
            .request .container,
            .export .container,
            .payment .container,
            .request-det .container {
                padding-block: 5px;
            }

            .website .container img {
                width: 75px;
            }
        }
    </style>
</head>
<style media="print">
 @page  {
  size: auto;
  margin: 0;
       }
</style>
<body onload="window.print()" style="
    width: 80%%;
">

    <!-- Start Header -->
    <section class="header">
        <section class="container">
            <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="Logo">
                
        </section>
    </section>
    <!-- End Header -->

    <!-- Main Section -->

    <!-- Start First Section -->
    <section class="request">
        <section class="container">
            <section class="request-right">
                <h2>تفاصيل  الطلب</h2>
                <h4>رقم الطالب: <span dir="ltr">#<?php echo e($order->order_number); ?></span></h4>
            </section>
            <section class="request-left">
                <h2>تاريخ الطلب</h2>
                <p>     <?php echo e($order->created_at); ?></p>
            </section>
        </section>
    </section>
    <!-- End First Section -->

    <!-- Start Export -->
    <section class="export">
        <section class="container">
            <section class="export-right">
                <h2>مصدرة من:</h2>
                <h4>
                    المتجر الإلكتروني:
                    <span><?php echo e($setting->title); ?> |  <?php echo e($setting->title_en); ?></span>
                </h4>
                <h4>
                    الرقم الضريبي:
                    <span><?php echo e($setting->tax_number); ?></span>
                </h4>
                <h4>
                    الموقع:
                    <span> <?php echo e($setting->footer_address); ?></span>
                </h4>
                <h4>
                    الايميل
                    <span><?php echo e($setting->footer_email); ?></span>
                </h4>
            </section>
            <section class="export-left">
                <h2>مصدرة الي:</h2>
                <p> <?php echo e($order->name); ?></p>
                <p>   <?php echo e($order->address); ?> </p>
                <p><?php echo e($order->whatsApp); ?></p>
            </section>
        </section>
    </section>
    <!-- End Export -->

    <!-- Start payment -->
    <section class="payment">
        <section class="container">
            <section class="payment-right">
                <h2>تفاصيل الدفع</h2>
                <h4>المبلغ: <span><?php echo e($order->total); ?><?php echo e($setting->currency); ?></span></h4>
                
                <?php
                
                if($order->payment_type==1){
                ?>
                <h4>الدفعة الأولي: <span><?php echo e($order->FirstPayment); ?><?php echo e($setting->currency); ?></span></h4>
                <h4> الباقي:<span>أقساط علي <?php echo e($order->InstallmentBy); ?>شهور</span></h4>
                <?php

                }
                ?>
                <h4>طريقة الدفع: 
                 <?php
                
                if($order->payment_method==1||$order->payment_method==2)
                
                {
                
                ?>
                
                
                <span> بطاقة ائتمانية      </span>
                     <?php
                
               }else{
                ?>
                <span> حوالة بنكية        </span>

               
<?php               
    }            
                ?>
                
                </h4>
            </section>
            <section class="payment-left">
                <h2>تفاصيل الشحن</h2>
                <h4>بواسطة: <span>مندوب توصيل</span></h4>
                <h4>رقم الشحنة: <span>2345678</span></h4>
                <h4>الوقت المتوقع للشحن: <span>من 8 الي 48 ساعة</span></h4>
            </section>
        </section>
    </section>
    <!-- End payment -->


    <!-- Start Request Det -->
    <setion class="request-det">
        <section class="container">
            <h2>المشتريات</h2>
            <table>
                <tr>
                    <th>#</th>
                    <th>المنتج</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>الإجمالي</th>
                </tr>

                <tbody>
                    
                      <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    
                    <tr>
                        <td><img src="<?php echo e($setting->domain); ?>/assets/images/<?php echo e($CC['image']); ?>"
                                alt="img"></td>
                        <td><?php echo e($CC['name']); ?></td>
                        <td><?php echo e($CC['quantity']); ?></td>
                        <td><?php echo e($CC['price']); ?> <?php echo e($setting->currency); ?></td>
                        <td><?php echo e($CC['quantity']*$CC['price']); ?>  <?php echo e($setting->currency); ?></td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <section class="req">
                <section>
                    <h4>اجمالي الطلب:</h4>
                    <p><?php echo e($order->total); ?> <?php echo e($setting->currency); ?></p>
                </section>
              
               <?php
                
                if($order->payment_type==1){
                ?> 
                <section>
                    <h4>الدفعة الأولي:</h4>
                    <p><?php echo e($order->FirstPayment); ?> <?php echo e($setting->currency); ?></p>
                </section>
                                <section>
                    <h4>القسط  الشهري:</h4>
                    <p><?php echo e($order->MonthlyPayment); ?> </p>
                </section>
                
                
                
                <section>
                    <h4>المتبقي:</h4>
                    <p><?php echo e($order->total-$order->FirstPayment); ?> <?php echo e($setting->currency); ?></p>
                </section>
                
                     <?php
                
                       }
                ?>
                
                
                
                
                
                
            </section>
        </section>
    </setion>
    <!-- End Request Det -->
    <!-- Start Website -->
    <section class="website">
        <section class="container">
            <section class="website-right">
                <!--<h4>لزيارة موقعنا الإلكتروني قم بمسح الكود</p>-->
                <!--  <img src="<?php echo e(asset('assets/images/'.$setting->qr)); ?>"-->
                <!--        alt="">-->
            </section>
            <section class="website-left">
                <h4>للإطلاع علي شهادة المتجر لدي وزراة التجارة امسح الكود</p>
                    <img src="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>"
                        alt="">
            </section>
        </section>
    </section>
    <!-- End Website -->

    <!-- Footer -->
    <footer>
        <p>شكرا لشرائك من متجرنا. نتمني لك يوما رائعا</p>
    </footer>
    <!-- Main Section -->
</body>

</html><?php /**PATH /home/u593058701/domains/altaj-ksa.store/public_html/core/resources/views/front/order/print.blade.php ENDPATH**/ ?>