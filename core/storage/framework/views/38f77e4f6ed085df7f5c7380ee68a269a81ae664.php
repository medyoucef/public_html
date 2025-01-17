
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($setting->title); ?></title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<style media="print">
 @page  {
  size: auto;
  margin: 0;
       }
</style>
<body style="direction: rtl; margin: 0;"  onload="window.print()">>

    <main>
        <!-- Start Container -->
        <section class="container" style="width: 90%; margin-inline: auto; padding-inline: 15px;">
            <!-- Start Header -->
            <header
                style="display: flex; align-items: center; justify-content: center; gap: 30px; padding-block: 20px;">
                <sectoin class="header-right" dir="ltr">
                    <h2 style="    text-align: center;">
 <?php echo e($setting->title_en); ?>

                    </h2>
                    <p>the first store in the kingdom on sudia Arabia</p>
                </sectoin>
                <section class="header-center">
                    <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="logo"
                        width="100px">
                </section>
                <sectoin class="header-left">
                    <h2> 
                    <?php echo e($setting->title); ?>

                    </h2>
                    <p>الأول في المملكة العربية السعودية - الرياض</p>
                </sectoin>
            </header>
            <!-- End Header -->

            <!-- Start Content -->
            <section class="content">
                <h2 class="title-section" style="width: 100%; 
                text-align: center;
                padding: 5px; 
                border: 2px solid #808080; 
                border-radius: 100px; 
                font-weight: normal;
    font-weight: 600;">
                    عقد بيع بالتقسيط
                </h2>
                <p style="line-height: 1.6; font-size: 18px;
    font-weight: 700;">
                    التاريخ:<?php echo e($order->created_at); ?>

                    <br>
                    نعم انا السيد / <?php echo e($order->name); ?>  
                    <br>
                    برقم جوال <?php echo e($order->whatsApp); ?>

                    <br>
                    وعنوان /<?php echo e($order->address); ?>

                     <br>
                    أقر وأعترف وانا في حالتي الشرعية وبكامل قواي العقلية بأني في ذمتي للمؤسسة المدعوة /  <?php echo e($setting->title); ?> 
                    مبلغ وقدره / <?php echo e($order->total); ?> ريال فقط.
                    <br>
                    وذلك قيمة عن ما تبقي من ثمن جهاز /              <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                  <?php echo e($CC['name']); ?>         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   علي ان يدفع
                    المبلغ علي أقساط شهرية متتالية ومستمرة بدون انقطاع بما فيها شهر رمضان والاعياد.
                    قيمة الدفعة الشهرية / <?php echo e($order->MonthlyPayment); ?>ريال فقط اعتبارا من تاريخ /<?php echo e($order->created_at); ?>

                    نهاية المبلغ المذكور اعلاه وأنني بسداد الاقساط في موعدها بدون تأخر عن أي قسط عن موعده المحدد فإني
                    ملتزم التزاما تاما بسداد المبلغ المتبقي كاملا دفعة واحدة.
                    <br>
                    كما انني أقر علي نفسي بأنه لا يوجد التزامات مالية ولا كفالات غرامية وقد اذنت والله خير شهيد.
                </p>

                <!-- Start the signature -->
                <section class="signature"
                    style="display: flex; align-items: flex-start; justify-content: space-between; margin-top: 20px;">
                    <section class="name">
                        <h4 style="font-size: 22px;">الاسم : <?php echo e($order->name); ?></h4>
                        <h4 style="font-size: 22px;">التوقيع: ...........</h4>
                    </section>
                    <section class="seal">
                        <h4 style="font-size: 22px;">الختم</h4>
                        <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="logo"
                        width="100px" style="margin-top: -10px">
                    </section>
                </section>
                <!-- End the signature -->

                <!-- Start The Footer -->
                <!--<footer style="margin-top: 20px; text-align: center;">-->
                <!--    <p style="font-size: 20px;">arabcomputers  <?php echo e($setting->title); ?> </p>-->
                <!--    <p style="font-size: 20px;">www.arabcomputers.com</p>-->
                <!--</footer>-->
                <!-- End The Footer -->

            </section>
            <!-- End Content -->

        </section>
        <!-- End Container -->

    </main>

</body>

</html><?php /**PATH /home/u135631004/domains/ksa-pixeil.com/public_html/core/resources/views/front/order/contract-of-sale.blade.php ENDPATH**/ ?>