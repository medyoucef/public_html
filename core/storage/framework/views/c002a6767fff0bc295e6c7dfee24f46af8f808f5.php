<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Cairo", sans-serif;
        }

        .container {
            max-width: 90%;
            margin-inline: auto;
            padding-inline: 15px;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            padding-block: 15px;
        }

        .header-left {
            display: flex;
            justify-content: space-between;
            align-items: start;
            flex-direction: column;
            row-gap: 15px;
        }

        .contact {
            display: flex;
            align-items: flex-start;
            column-gap: 10px;
            align-items: center;
        }

        .header-right {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .date {
            margin-bottom: 10px;
        }

        .date .container {
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 2px solid #000;
            border-radius: 15px;
        }

        .date .container p {
            flex: 1;
            text-align: center;
        }

        .date .container p:first-child {
            border-right: 2px solid #000;
        }

        .buyer-details {
            margin-bottom: 10px;
        }

        .buyer-details .container {
            padding: 10px;
            display: flex;
            align-items: start;
            justify-content: space-around;
            border: 2px solid #000;
            border-radius: 15px;
            direction: rtl;
        }

        .buyer-details .container>section {
            flex: 1;
            text-align: center;
            padding-inline: 5px;
        }

        .buyer-details .container>section:first-child {
            border-left: 2px solid #000;
        }

        .device-details {
            direction: rtl;
        }

        .device-details {
            margin-bottom: 10px;
        }

        .device-details .container {
            display: flex;
            flex-direction: column;
        }

        .device-details .container table,
        .installment .container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .device-details .container table tr,
        .installment .container table tr {
            text-align: center;
            padding:10px;
            border-bottom: 1px solid #000;
        }

        .device-details .container table tr td,
        .installment .container table tr td {
            padding:10px;
        }

        .device-details .container table tr th,
        .installment .container table tr th {
            padding:10px;
            color: #2d8ebd;
        }

        .device-details .container,
        .installment .container {
            text-align: center;
        }

        .installment {
            margin-bottom: 10px;
            direction: rtl;
        }

        .delivery .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 15px;
            padding:10px;
            border: 2px solid #000;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .delivery .container img {
            width: 100px;
            transform: rotate(-30deg);
        }

        footer {
            text-align: center;
        }
               @media  print {
 .device-details .container table tr th,
        .installment .container table tr th{
            padding:5px;
            color: white;
           background-color:#2d8ebd !important;
-webkit-print-color-adjust: exact;
}
 .device-details .container table tr th,
        .installment .container table tr th{
            padding:5px;
            color: white;
           background-color:#2d8ebd !important;
-webkit-print-color-adjust: exact;


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

    <!-- Start Header -->
    <section class="header">
        <section class="container">
            <section class="header-left">
                <section class="contact">
                    <img width="25px"
                        src="https://th.bing.com/th/id/R.96d49fa98516cfdae36a925ff0c30588?rik=6O0cEORyx30Ekg&pid=ImgRaw&r=0"
                        alt="logo">
                    <p><?php echo e($setting->whatsapp); ?></p>
                </section>
                <section class="contact">
                    <img width="25px"
                        src="https://cdn4.iconfinder.com/data/icons/social-media-black-white-2/1227/X-64.png" alt="logo">
                    <p><?php echo e($setting->twitter); ?></p>
                </section>
                <section class="contact">
                    <img width="25px" src="https://th.bing.com/th/id/OIP.-ZirgQE5pr8e7htQWowJIgHaHa?rs=1&pid=ImgDetMai"
                        alt="logo">
                    <p><?php echo e($setting->instegram); ?></p>
                </section>
            </section>
             <section class="header-center">
                <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="logo"
                    width="100px">
            </section>

            <section class="header-right">
                <p><?php echo e($setting->twitter); ?></p>
                <p><?php echo e($setting->domain); ?></p>
                <p dir="rtl">السعوديه - الرياض</p>
            </section>
        </section>
    </section>
    <!-- End Header -->

    <!-- Start Date -->
    <section class="date">
        <section class="container">
            <p><?php echo e($order->created_at); ?></p>
            <p>#<?php echo e($order->order_number); ?></p>
        </section>
    </section>
    <!-- End Date -->

    <!-- Start Buyer details -->
    <section class="buyer-details">
        <section class="container">

            <section class="name">
                <section>
                    <p>الاسم: <span> <?php echo e($order->name); ?>  </span></p>
                    <p>رقم الجوال: <span><?php echo e($order->whatsApp); ?></span></p>
                    <p>العنوان: <spa> <?php echo e($order->country); ?>- <?php echo e($order->address); ?>      </span></p>
                </section>
            </section>

            <section class="thanks">
                <p>عميلنا
                    <br>
                    شكرا لتسوقك من <?php echo e($setting->title); ?>

                    <br>
                    تم انشاء طلبك بنجاح
                </p>
            </section>

        </section>
    </section>
    <!-- End Buyer details -->

    <!-- Start Device Details -->
    <section class="device-details">
        <section class="container">
            <table>
                <tr>
                    <th>اسم الجهاز</th>
                    <th>السعر</th>
                    <th>العدد</th>
                    <th>الاجمالي</th>
                </tr>
                  <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($CC['name']); ?></td>
                    <td><?php echo e($CC['price']); ?> ر.س</td>
                    <td><?php echo e($CC['quantity']); ?></td>
                    <td><?php echo e($CC['price']*$CC['quantity']); ?> ر.س</td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <p>اجمالي سعر الجهاز : <?php echo e($order->total); ?> ر.س</p>
            <p>نوع المعامله : 
            <?
if($order->payment_type==1){
?>
أقساط
<?}
?>

 <?
if($order->payment_type==0){
?>
نقدا
<?}
?>     
            </p>
        </section>
    </section>
    <!-- End Device Details -->
<?
if($order->payment_type=="1"){
?>
    <!-- Start Installment -->
    <section class="installment">
        <section class="container">
            <table>
                <tr>
                    <th>#</th>
                    <th>قيمة الدفعه</th>
                    <th>مدة القسط</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td> <?php echo e($order->MonthlyPayment); ?>   </td>
                    <td><?php echo e($order->InstallmentBy); ?> شهر</td>
                </tr>
            </table>
            <p>دفعة اولى : <?php echo e($order->FirstPayment); ?> ر.س</p>
        </section>
    </section>
    <!-- End Installment -->
<?
}
?>
    <!-- Start Delivery -->
    <section class="delivery">
        <section class="container">
            <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="img" width="50px">
            <p>التوصيل من خلال شركه اراميكس خلال 24 ساعه من الدفعة</p>
        </section>
    </section>
    <!-- End Delivery -->

    <footer>
        <p><?php echo e($setting->title); ?> الالكتروني</p>
        <p><?php echo e($setting->domain); ?></p>
    </footer>
</body>

</html><?php /**PATH /home/ksapixeil/public_html/core/resources/views/front/order/print.blade.php ENDPATH**/ ?>