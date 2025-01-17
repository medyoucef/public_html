<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند قبض رقم #12345679</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1;
        }

        body {
            font-family: "Cairo", sans-serif;
            direction: rtl;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        .container {
            padding-inline: 15px;
            margin-inline: auto;
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

        /* Start Header */
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding-top: 50px;
            padding-bottom: 25px;
            border-bottom: 2px solid #4c4c4c;
        }

        .header .container .title {
            text-align: center;
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 10px;

            h2 {
                font-size: 20px;
                line-height: 1.3;
            }

            p {
                font-size: 18px;
                line-height: 1.3;
            }
        }

        .header .container .logo a img {
            width: 140px;
        }

        /* End Header */

        /* Start Main */
        .main .container .main-header {
            width: fit-content;
            margin: auto;
            margin-bottom: 50px;
        }

        .main .container .main-header h2 {
            text-align: center;
            padding: 15px;
            position: relative;
        }

        .main .container .main-header h2::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 40%;
            transform: translateX(-40%);
            width: 35px;
            height: 5px;
            background-color: #fffb00;
        }

        .main .container .main-header h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 15%;
            transform: translateX(-40%);
            width: 35px;
            height: 5px;
            background-color: #000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;

            tr {
                border: 1px solid #00000047;
            }

            th {
                padding: 10px;
                background-color: #fffb007a;
            }

            td {
                font-size: 16px;
                font-weight: 600;
            }
        }

        .table > span {
            display: block;
            margin-bottom: 5px;
            color: red;
        }

        .signature-content .container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 2px solid #4c4c4c;

            img {
                width: 160px;
                transform: rotate(-25deg);
            }

        }

        footer .container {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 70px;
            font-size: 20px;
            font-weight: 700;
            position: relative;
            padding-bottom: 50px;
            width: fit-content;
        }

        footer .container::before {
            content: "";
            position: absolute;
            bottom: 35px;
            left: 40%;
            transform: translateX(-40%);
            width: 70px;
            height: 5px;
            background-color: #fffb00;
        }

        footer .container::after {
            content: "";
            position: absolute;
            bottom: 35px;
            right: 32%;
            transform: translateX(-40%);
            width: 70px;
            height: 5px;
            background-color: #000;
        }

        /* End Main */


        @media  print {

            .header .container .logo a img {
                width: 100px;
            }

            .header .container .title {

                h2 {
                    font-size: 16px;
                    line-height: 1.3;
                }

                p {
                    font-size: 14px;
                    line-height: 1.3;
                }
            }

            .main .container .main-header {
                margin-bottom: 25px;
            }

            .signature-content .container h2 {
                font-size: 18px;
            }

            .footer footer p {
                line-height: 1.6;
                font-size: 16px;
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
<body onload="window.print()">
    <section class="header">
        <section class="container">
            <section class="title">
                <h2>متجر <?php echo e($setting->title); ?>الالكتروني</h2>
                <p>الأول في المملكة العربية السعودية</p>
                <h2>المملكة العربية السعودية <br> </h2>
            </section>

            <section class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>"
                        alt="logo">
                </a>
            </section>

            <section class="title">
                <h2><?php echo e($setting->title_en); ?></h2>
                <p>The first store in the kingdom on <br> Saudi Arabia</p>
                <h2>Kingdom on Saudi Arabia <br> Electronic Shop</h2>
            </section>
        </section>
    </section>

    <main class="main">
        <section class="container">
            <section class="main-header">
                <h2>سند قبض</h2>
            </section>

            <section class="table">
                <span dir="ltr"><i>NO. #<?php echo e($order->order_number); ?></i></span>
                <table>
                    <tr>
                        <th>المبلغ</th>
                        <td><span>   <?php echo e($order->FirstPayment); ?></span>ر.س</td>
                    </tr>
                    <tr>
                        <th>استلمت من السيد</th>
                        <td> <?php echo e($order->name); ?>      </td>
                    </tr>
                    <tr>
                        <th>رقم الجوال</th>
                        <td>  
                        <?php echo e($order->whatsApp); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>العنوان</th>
                        <td> <?php echo e($order->address); ?>   </td>
                    </tr>
                    <!--<tr>-->
                        <!--<th>المبلغ بالحروف</th>-->
                        <!--<td> فقط ألف ريال لا غير </td>-->
                    <!--</tr>-->
                    <tr>
                        <th>وذلك عن</th>
                        <td>    
                         <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php echo e($CC['name']); ?>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </table>
            </section>

            <section class="signature-content">
                <section class="container">
                    <section class="signature">
                        <h2>توقيع المـسـتلم/</h2>
                        <br>
                        <h2>...................</h2>
                    </section>
                    <section class="Seal">
                        <h2>الخـتـم</h2>
                        <br>
                        <br>
                        <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>"
                            alt="logo">
                    </section>
                </section>
            </section>

            <section class="footer">
                <footer>
                    <section class="container">
                        <p>متجر <?php echo e($setting->title); ?>الالكتروني</p>
                        <p><?php echo e($setting->domain); ?></p>
                    </section>
                </footer>
            </section>
        </section>
    </main>
</body>

</html><?php /**PATH /home/altajksa/public_html/core/resources/views/front/order/RecepitVoucher.blade.php ENDPATH**/ ?>