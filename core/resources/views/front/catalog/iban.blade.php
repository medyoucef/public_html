

<!doctype html>
<html lang="ar" dir="rtl">
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>الدفع من خلال التحويل البنكي المباشر - بيكسل ستور</title>
      <link rel="icon" type="image/x-icon" href="./icon.ico">
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <link href='style.css' rel='stylesheet'>
      
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400&display=swap');
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
        font-family: 'Tajawal', sans-serif;
      }
        h1 {
          color: #88B04B;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
   </head>




   <body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">☟</i>
        </div>
        <br>
            <h1>تم إستلام طلبك !</h1> 
                <br>
                <p>
                    <li>رقم الطلبية : {{$shippment_number}}</li>
                    <li>طريقة الدفع : تحويل بنكي مباشر</li><li>لا يوجد طلب تقسيط ، سيتم تسديد المبلغ كامل :  {{$total}}ر.س</li>
                </p>
                <br>
                
                <p style="color:red;">
                    قم بالتواصل معنـا عبر واتساب لتأكيد الطلب ، وسيتم إرسال بيانات الحساب البنكي لإرسال الدفعة الأولى.
                </p>            <br><br><br>
            <h5><a href="/">العودة إلى الرئيسية</a></h5>
        </div>
   </body>

   <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript'>
         var myLink = document.querySelector('a[href="#"]');
         myLink.addEventListener('click', function(e) {
           e.preventDefault();
         });
      </script>


         <script>

         </script>

</html>