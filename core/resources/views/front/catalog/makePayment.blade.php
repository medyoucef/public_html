

<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>بيكسل ستور - صفحة الدفع</title>
    <meta content="بلاستيشن
هواتف ذكية
ساعات ذكية
إكس بوكس
ملحقات احترافية" name="description">
    <meta content="بلاستيشن
هواتف ذكية
ساعات ذكية
إكس بوكس
ملحقات احترافية" name="keywords">
    <!-- Favicons -->
    <link href="uploads/1691613282_ppixelstore.jpg" rel="icon">
    <link href="uploads/1691613282_ppixelstore.jpg" rel="apple-touch-icon">      <!-- Start Resource -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/996fc7b00b.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://js.stripe.com/v3/"></script>
    <script src="jquery.creditCardValidator.js"></script>



       <!-- New Files -->
       <link rel="stylesheet"  href="mystyle/owl.carousel.min.css">
       <link rel="stylesheet"  href="mystyle/owl.theme.default.min.css">
       <link href="mystyle/templatemo-pod-talk.css" defer rel="stylesheet">
      <link href="assets/css/custome.css" defer rel="stylesheet">

       <!-- End Resource -->
  </head>
  <style>
    #loading{
        
        position:fixed ;
        top:0px;
        bottom:0px;
        right:0px;
        left:0px;
        z-index:555   
}
</style>
  <body>
    <style> :root{--main-color:#29265d}  </style>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <!-- ======= Header ======= -->

           @include('front.includes.header')            
            
    <!-- End Header --> 
<body className='snippet-body'>
      <style>
      .input_group_i 
      {
        display: flex;
        justify-content: flex-start;
        gap: 20px;
      }
      .input_group_i .input 
      {
        width: calc(100% / 2);
      }
      .input_group_i .input span 
      {
        display: block;
        margin-bottom: 10px;
        color: var(--main-color);
        font-weight: bold;
        font-size: 18px;
      }
      .input_group_i .input input 
      {
        background-color: #e17055;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
      }
      .input_radio  
      {
        text-align: center;
      }
      .input_radio span 
      {
         font-size: 18px;
         font-weight: bold;
         padding: 4px 10px;
         display: block;
         width: fit-content;
         border-radius: 5px;
         margin: 0 auto;
         margin-bottom: -18px;
         margin-top: 22px;

      }
      #heading_table 
      {
        
        color: #fff;
      }

      .btn_show_table
      {
       
        border-radius: 5px;
        padding: 4px 10px;
        color: #fff;
        cursor: pointer;
        width: fit-content;
        margin: 10px auto;
      }
      input:invalid{
         background-color: #cccccc4a;
      }

   </style>
   <div id="mainSite" >
      <section class="portfolio section-bg">
         <div class="container mgtop" data-aos="fade-up">
            <div class="section-title" style="margin-top: 20px;margin-bottom: 20px;">
               <h2 style="color: white !important;font-size: larger !important;">صفحة الدفع</h2>
            </div>
            <div class="container" style="position: relative;">
               
            
            
            <div  class="">
                  <div class="card">
                     <div class="card-header p-0">
                        <h2 class="mb-0">
                           <button class="btn btn-light btn-block text-left p-3 rounded-0" style="width: 100%;">
                              <div class="d-flex align-items-center justify-content-between">
                                 <span id="barTitle">نظام التقسيط - طرق الدفع المتاحة </span>
                              </div>
                           </button>
                        </h2>
                     </div>
                     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body payment-card-body">
                          <div id="input_group_i" class="input_group_i">
                               <div class="input">
                                <span class="font-weight-normal" style="color:#29265d">التقسيط على  </span>
                            
                                  <select id="divOnMonth" class="form-control">
                                      <option selected value="full_payment">الدفع بدون أقساط ( كامل المبلغ )</option>
                                      <option value="3">3 شهور </option>
                                      <option value="6">6 شهور </option>
                                      <option value="12">12 شهور </option>
                                  </select>
                                </div>

                                  <div class="input">
                                    <span id="textfirsttext" class="font-weight-normal" style="color:#29265d">الدفعة الأولى   </span>

                                      <input type="hidden" id="is_active" value="true" />
                                      <input type="hidden" id="moreThan" value="1200" />
                                      <input type="hidden" id="phpFirstPay" value="1000" />
                                      <input type="hidden" id="newcurrency" name="newcurrency" value="ر.س">
                                      <input id="firstPay" type="text" class="form-control" readonly value="0.00" />
                                  </div>


                                
                                  
                          </div>

   
                              <hr>
                              <div>  <div id="show_all_takset" class="btn_show_table" style="background-color: #29265d;"> عرض جدول الأقساط </div></div>
                              <div class="Table_payment">
                               
                                    <table class="table   table-hover table-border">
                                       <thead id="heading_table" style="background-color:#29265d">
                                          <tr>
                                            <td>#</td>
                                            <td>تاريخ الدفعة</td>
                                            <td>قيمة الدفعة الشهرية</td>
                                            <td>إجمالي المدفوع</td>
                                          </tr>
                                            <tbody id="bodyTable">
                                               
                                            </tbody>
                                       </thead>
                                    </table>
                              </div>



                              <hr>        
                            <div class="input input_radio mt-10" style="margin-top: 10px;">
                              <span style="background-color:#29265d ;color:#fff ;">طرق الدفع المتاحة </span>
                              <br>
                           
                              <input type="radio" name="paymentMethod" id="creditCard" value="1" checked>
                                    <label for="creditCard">بطاقة بنكية</label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="paymentMethod" id="BankTransfer" value="2"> 
                                    <label for="BankTransfer">تحويل بنكي مباشر</label>                            </div>
     
                        </div>
                     </div>
                  </div>
               </div>



            </div>
            <form name="makePayment" id="makePayment" action="{{route('store_makePayment')}}" method="POST" onSubmit="return validate();">
              @csrf
               <div class="container d-flex justify-content-center mt-5 mb-5">
                  <div class="row g-3" style="width: 100%;">
                     <div class="col-md-6"> 
                        
                             <div class="card">
                                <div class="accordion" id="accordionExample_1">
                                   <div class="card">
                                      <div class="card-header p-0">
                                         <h2 class="mb-0">
                                            <span class="btn btn-light btn-block text-left p-3 rounded-0" style="width: 100%;" data-toggle="collapse" data-target="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                               <div class="d-flex align-items-center justify-content-between">
                                                  <span>معلومات الفاتورة</span>
                                               </div>
                                            </span>
                                         </h2>
                                      </div>
                                      <div id="collapseOne_1" class="collapse_1 show" aria-labelledby="headingOne_1" data-parent="#accordionExample_1">
                                         <div class="card-body payment-card-body">
                        
                                            <span class="font-weight-normal">إسم الشخص </span>
                                            <div class="input">
                                               <i class=""></i>
                                               <input type="text" name="CusName" class="form-control" placeholder="" required>
                                               </div>
                        
                                               <span class="font-weight-normal">رقم الهاتف</span>
                                               <div class="input">
                                                  <i class=""></i>
                                                  <input type="text" name="phone" class="form-control"  placeholder="5x xxx xxxx" required>
                                                  </div><span class="font-weight-normal">اسم الشارع</span>
                                                    <div class="input">
                                                       <i class=""></i>
                                                       <input type="text" name="street" class="form-control" placeholder="" required>
                                                       </div><span class="font-weight-normal">اسم الحي</span>
                                                    <div class="input">
                                                       <i class=""></i>
                                                       <input type="text" name="area" class="form-control" placeholder="" required>
                                                       </div><span class="font-weight-normal">المدينة</span>
                                                    <div class="input">
                                                       <i class=""></i>
                                                       <input type="text" name="city" class="form-control" placeholder="" required>
                                                       </div>
                                                  <span class="font-weight-normal">الدولة</span>
                                                  <div class="input">
                                                     <i class=""></i>
                                                     <select name="country" class="form-control" required>
    <option value="SA" selected>المملكة العربية السعودية</option>
</select></div>
                                                  <span class="font-weight-normal">البريد الإلكتروني</span>
                                                  <div class="input">
                                                     <i class=""></i>
                                                     <input type="email" name="email" class="form-control" placeholder="" required>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                             </div>
                     <div class="col-md-6 ">
                        <div class="card" id="credit_card_box">
                           <div class="accordion" id="accordionExample">
                              <div class="card">
                                 <div class="card-header p-0">
                                    <h2 class="mb-0">
                                       <span class="btn btn-light btn-block text-left p-3 rounded-0" style="width: 100%;">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <span>الدفع بواسطة البطاقة الائتمانية</span>
                                             <div class="icons">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                             </div>
                                          </div>
                                       </span>
                                    </h2>
                                 </div>
                                                              @php 
   $main_price=0;
            $total=0;
            $count=0;
               @endphp

  @if(session('cart'))
 
             @foreach(session('cart') as $id => $details)
                 @php $total += $details['price'] * $details['quantity'] @endphp
                
                @endforeach
                @endif
                                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body payment-card-body">
                                       <input type="hidden" name="makePayment" value="makePayment">
                                       <input type="hidden" id="ourTotal" name="total" value="{{$total}}">
                                       <input type="hidden" name="order" value="8955025">
                                       <input type="hidden" name="cur" value="ر.س">
                                          <input type="hidden" name="qunt" value="2">
                                        <input type="hidden" id="tlg_payment_method" name="tlg_payment_method" value="1">
                                       <input type="hidden" id="tlg_divOnMonth" name="tlg_divOnMonth" value="full_payment">
                                       
                                       <span class="font-weight-normal card-text">الإسم على البطاقة</span>
                                       <div class="input">
                                          <i class="fa fa-credit-card"></i>
                                          <input type="text" id="NameOnCard" name="NameOnCard" class="form-control" placeholder="" required>
                                       </div>
                                       <span class="font-weight-normal card-text">رقم البطاقة</span>
                                       <div class="input">
                                          <i class="fa fa-credit-card"></i>
                                          <input type="text" name="CardNumber" id="CardNumber" maxlength="16" minlength="15" class="form-control" placeholder="0000 0000 0000 0000" required>
                                       </div>
                                       <div class="row mt-3 mb-3">
                                          <div class="col-md-6">
                                             <span class="font-weight-normal card-text">تاريخ الإنتهاء</span>
                                             <div class="d-flex" style="margin-top: 24px;position: relative;">
                                                <i class="fa fa-calendar" style="position: absolute;top: -20px;"></i>
                                                <select class="form-control" style="margin-left: 5px;" id="ExpireDate" name="ExpireDate">
                                                   <option value="01">01</option>
                                                   <option value="02">02</option>
                                                   <option value="03">03</option>
                                                   <option value="04">04</option>
                                                   <option value="05">05</option>
                                                   <option value="06">06</option>
                                                   <option value="07">07</option>
                                                   <option value="08">08</option>
                                                   <option value="09">09</option>
                                                   <option value="10">10</option>
                                                   <option value="11">11</option>
                                                   <option value="12">12</option>
                                                </select>
                                                <select  class="form-control" id="ExpireYear" name="ExpireYear">
                                                   <option value="2023">2023</option>
                                                   <option value="2024">2024</option>
                                                   <option value="2025">2025</option>
                                                   <option value="2026">2026</option>
                                                   <option value="2027">2027</option>
                                                   <option value="2028">2028</option>
                                                   <option value="2029">2029</option>
                                                   <option value="2030">2030</option>
                                                   <option value="2031">2031</option>
                                                   <option value="2032">2032</option>
                                                   <option value="2033">2033</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="font-weight-normal card-text">كلمة السر CVC/CVV</span>
                                             <div class="input">
                                                <i class="fa fa-lock"></i>
                                                <input type="text" id="Cvv" name="Cvv" maxlength="3" minlength="3" class="form-control" placeholder="000" required>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="text-muted certificate-text">
                                       <i class="fa fa-lock"></i> سوف يتم إنجار معاملتك من خلال الشهادة الآمنة SSL </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        
                        <div id="summary" class="card">
                        <span style="display: block;padding: 8px 19px;font-size: 20px;background-color: #f8f9fa;padding-top: 12px;">ملخص الطلبية</span>
                           <hr class="mt-0 line">
                           
                           <div class="p-3 d-flex justify-content-between">
                           
                              <div class="d-flex flex-column">
                                 <span>
                                 <li>رقم الطلبية 8955025 </li>
                                 
                  @php   
                  $count=0;
                                 @endphp
 
                  
                                   @if(session('cart'))
 
             @foreach(session('cart') as $id => $details)
                 @php $total += $details['price'] * $details['quantity'] @endphp
                                 @php   

                $count++;
                
                @endphp
                                 <li>{{$details['name']}}</li>

    @php
                              $main_price=$total;
                                @endphp
                                 @endforeach           
                                 @endif
                                             <li>عدد الأصناف المطلوبة {{$count}}</li>
                                             <li>تكلفة الشحن مجانا</li>                                 </span>
                              </div>
                           </div>
                           <div class="p-3">
                              <button id="submit_button" class="btn btn-primary btn-block free-button" style="height: 52px;width: 100%;background-color:#29265d;">الدفع الآن ( 9398 ر.س) </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
   </div>
   </section>
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

   $(document).ready(function(){


    function disable_takset(){
        $("#barTitle").text("طرق الدفع المتاحة");
        $("#input_group_i,hr,.Table_payment,.btn_show_table").fadeOut(0);
      }


      $(".Table_payment").slideUp(0);
      $(".btn_show_table").click(()=> 
      {
          $(".Table_payment").slideToggle(300);
      });
      
      
      var newcurrency = $("#newcurrency").val();
      var divOnMonth = $("#divOnMonth").val();
      var is_active = $("#is_active").val();
      var phpFirstPay = $("#phpFirstPay").val();
      var moreThan = $("#moreThan").val();
      var orderTotal = $("#ourTotal").val();
      var bodyTable = $("#bodyTable");
      var firstPayBox = $("#firstPay");
      var submit_button = $("#submit_button");
      
      if(is_active == "true"){
          if(parseFloat(orderTotal) >= parseFloat(moreThan)){}
        else{
          disable_takset();
        }
      }
      else{
        disable_takset();
      }

      if(divOnMonth == "full_payment"){
        $("#textfirsttext").text("إجمالي المبلغ");
        firstPayBox.css("background-color","green");
        firstPayBox.val(orderTotal + " " + newcurrency);
        $("#ourTotal").val(orderTotal);
        submit_button.text("الدفع الآن ( "+ orderTotal + " " + newcurrency +") ");
        $(".Table_payment,.btn_show_table").fadeOut(0);
        $("#tlg_divOnMonth").val("full_payment");
      }

      $("#divOnMonth").change(function(){

        var divOnMonth = $("#divOnMonth").val();
         bodyTable.empty();

        if(divOnMonth == "full_payment"){

         $("#textfirsttext").text("إجمالي المبلغ");
        firstPayBox.css("background-color","green");
        firstPayBox.val(orderTotal + " " + newcurrency);
        $("#ourTotal").val(orderTotal);
        submit_button.text("الدفع الآن ( "+ orderTotal + " " + newcurrency +") ");
        $(".Table_payment,.btn_show_table").fadeOut(0);
        $("#tlg_divOnMonth").val("full_payment");
      }
      else if(divOnMonth == "3"){

         $("#tlg_divOnMonth").val("3");
        $("#textfirsttext").text("الدفعة الأولى");
        firstPayBox.css("background-color","#e17055");
        var newdiv = parseFloat(orderTotal) - parseFloat(phpFirstPay);
        var result = (newdiv / 3).toFixed(1);
        firstPayBox.val(parseFloat(phpFirstPay) + " " + newcurrency);
        $("#ourTotal").val(parseFloat(phpFirstPay));
        submit_button.text("الدفع الآن ( "+ parseFloat(phpFirstPay) + " " + newcurrency +") ");
        var d = new Date();
        var totalpaid = parseFloat(phpFirstPay);
        for(var x=0; x<3; x++){

         totalpaid = totalpaid + parseFloat(result);
          d.setMonth(d.getMonth() + 1);
          var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
          bodyTable.append("<tr><td> الدفعة "+ (x+1) +"</td><td>"+strDate+"</td><td>"+result+"</td><td>"+totalpaid.toFixed(1)+"</td></tr>");
        }
        $(".btn_show_table").fadeIn(0);

      }
      else if(divOnMonth == "6"){

         $("#tlg_divOnMonth").val("6");
        $("#textfirsttext").text("الدفعة الأولى");
        firstPayBox.css("background-color","#e17055");
        var newdiv = parseFloat(orderTotal) - parseFloat(phpFirstPay);
        var result = (newdiv / 6).toFixed(1);
        firstPayBox.val(parseFloat(phpFirstPay) + " " + newcurrency);
        $("#ourTotal").val(parseFloat(phpFirstPay));
        submit_button.text("الدفع الآن ( "+ parseFloat(phpFirstPay) + " " + newcurrency +") ");
        var d = new Date();
        var totalpaid = parseFloat(phpFirstPay);
        for(var x=0; x<6; x++){

         totalpaid = totalpaid + parseFloat(result);
          d.setMonth(d.getMonth() + 1);
          var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
          bodyTable.append("<tr><td> الدفعة "+ (x+1) +"</td><td>"+strDate+"</td><td>"+result+"</td><td>"+totalpaid.toFixed(1)+"</td></tr>");
        }
        $(".btn_show_table").fadeIn(0);

      }
      else if(divOnMonth == "12"){

         $("#tlg_divOnMonth").val("12");
         $("#textfirsttext").text("الدفعة الأولى");
        firstPayBox.css("background-color","#e17055");
        var newdiv = parseFloat(orderTotal) - parseFloat(phpFirstPay);
        var result = (newdiv / 12).toFixed(1);
        firstPayBox.val(parseFloat(phpFirstPay) + " " + newcurrency);
        $("#ourTotal").val(parseFloat(phpFirstPay));
        submit_button.text("الدفع الآن ( "+ parseFloat(phpFirstPay) + " " + newcurrency +") ");
        var d = new Date();
        var totalpaid = parseFloat(phpFirstPay);
        for(var x=0; x<12; x++){

         totalpaid = totalpaid + parseFloat(result);
          d.setMonth(d.getMonth() + 1);
          var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
          bodyTable.append("<tr><td> الدفعة "+ (x+1) +"</td><td>"+strDate+"</td><td>"+result+"</td><td>"+totalpaid.toFixed(1)+"</td></tr>");
        }
        $(".btn_show_table").fadeIn(0);

      }

      });

      $("#show_all_takset").click(function(){
         var txt = $("#show_all_takset").text();
         if(txt == "إخفاء جدول الأقساط"){
            $("#show_all_takset").text("عرض جدول الأقساط");
         }else{
            $("#show_all_takset").text("إخفاء جدول الأقساط");
         }
      });

      if($("input[name = paymentMethod]:checked").val() == "2"){
         $("#tlg_payment_method").val("2");
            $("#credit_card_box").css("display","none");
            $("#summary").css("margin-top","-24px");
            $("#NameOnCard").val("تحويل بنكي مباشر");
            $("#CardNumber").val("4111111111111111");
            $("#Cvv").val("000");
      }
 if($("input[name = paymentMethod]:checked").val() == "1"){
         $("#tlg_payment_method").val("1");
             $("#NameOnCard").val("");
       }

      $("input[name = paymentMethod]").change(function(){
         var value = $("input:checked").val();
         
         if(value == "1"){
            $("#tlg_payment_method").val("1");
            $("#credit_card_box").css("display","block");
            $("#summary").css("margin-top","0px");
            $("#NameOnCard").val("");
            $("#CardNumber").val("");
            $("#Cvv").val("");
         }
         if(value == "2"){
            $("#tlg_payment_method").val("2");
            $("#credit_card_box").css("display","none");
            $("#summary").css("margin-top","-24px");
            $("#NameOnCard").val("تحويل بنكي مباشر");
            $("#CardNumber").val("4111111111111111");
            $("#Cvv").val("000");
         }

      });

   });

</script>
<script>
   function validate() {
     var valid = true;
     var cardNumber = $("#CardNumber").val();
     var Cvv = $("#Cvv").val();
     if (!$.isNumeric(Cvv)) {
       $("#Cvv").css('background-color', 'cornsilk');
       valid = false;
     } else {
       $("#Cvv").css('background-color', 'initial');
     }
     if (cardNumber != "") {
       $('#CardNumber').validateCreditCard(function(result) {
         if (!(result.valid)) {
           $("#CardNumber").css('background-color', 'cornsilk');
           valid = false;
         } else {
           $("#CardNumber").css('background-color', 'initial');
         }
       });
     }
     //alert(valid);
     return valid;
   }
   $(document).ready(function() {
     var stext = "";
     var newText = "";
     $("#ExpireDate").keypress(function() {
       stext = $(this).val();
       if (stext.length == 2) {
         newText = stext + "/";
         $("#ExpireDate").val(newText);
       }
     });
   });
   var barVal = 12.5;
   var newVal = 0;
   setInterval(function() {
     newVal = newVal + barVal;
     $('#loadingbar').attr('aria-valuenow', newVal);
     $('#loadingbar').css("width", newVal + "%");
     $('#loadingbar').text(newVal + "%");
     if (newVal >= 55) {
       $('#avalab').removeClass('hidden');
       $('#avalab').animate({
         zoom: '102%'
       }, "slow");
       $('#avalab').animate({
         zoom: '100%'
       }, "slow");
     }
   }, 1000);
   setTimeout(function() {
     $('#loading').addClass('hidden');
     $('#mainSite').removeClass('hidden');
   }, 8000);
</script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src=https&#x3A;&#x2F;&#x2F;js.stripe.com&#x2F;v3&#x2F; type=text&#x2F;javascript></script>
<script type=text&#x2F;javascript>//
   <!--
   function toggleLoading(b){if(b){$('#loading-screen').show();$('#main-screen').hide()}else{$('#main-screen').show();$('#loading-screen').hide()}}
   $(function(){$('#card-errors').hide();window.countryCode='DE';window.countryCodeCallback=null;window.countryCodeSet=!1;function SetCountryCode(cc){window.countryCode=cc;window.countryCodeSet=!0;if(typeof(window.countryCodeCallback)==='function'){window.countryCodeCallback()}}
   $.ajax({'url':'https://wtfismyip.com/json',success:function(data){if(typeof(data.YourFuckingCountryCode)!=='undefined'){SetCountryCode(data.YourFuckingCountryCode)}},error:function(){$.ajax({'url':'https://ipinfo.io/json',success:function(data){if(typeof(data.country)!=='undefined'){SetCountryCode(data.country)}}})}});var stripe=Stripe('pk_live_51LWkquLpQHgmT6JOuDWOXatYgBPW7x6dpllTf5y5PnUTSiPwVLhvTiuglKSd4NZMjMQjUaMajFXQP5gUc57G7iMt006wKRjAN5');var elements=stripe.elements();var style={base:{color:'#32325d',lineHeight:'18px',fontFamily:'"Helvetica Neue", Helvetica, sans-serif',fontSmoothing:'antialiased',fontSize:'16px','::placeholder':{color:'#aab7c4'}},invalid:{color:'#fa755a',iconColor:'#fa755a'}};var card=elements.create('card',{style:style});card.mount('#card-element');$(card).on('change',function(event){var displayError=$('#card-errors');if(event.error){displayError.text(event.error.message);displayError.show()}else{displayError.text('');displayError.hide()}});var form=$('#payment-cc-form');var metadata={invoiceId:"1031139",invoiceHash:"dc57ef7f3fa62682528afbabb4ce5d453ceb280304767a0639bdfcae83d29471"};form.on('submit',function(event){event.preventDefault();$('#payment-cc-form button[type="submit"]').attr('disabled','disabled');stripe.handleCardPayment('pi_3M4P8NLpQHgmT6JO1CAo4NVR_secret_oFeC54Uv5TzLTr35ktmEgGwOb',card,{payment_method_data:{billing_details:{email:'master.solve2\x40gmail.com',name:$('#name').val()==''?'John Johnson':$('#name').val()}}}).then(function(result){var errorElement=$('#card-errors');console.log(result);if(result.error){errorElement.show();errorElement.text(result.error.message);$('#payment-cc-form button[type="submit"]').attr('disabled',null)}else{window.location.href="https://www.engineowning.to/shop/purchase/21/purchase-success"+"?stripe=1&payment_intent="+result.paymentIntent.client_secret}})});$('#sofort-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'sofort',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},sofort:{country:window.countryCode,},owner:{email:'master.solve2\x40gmail.com',},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#giropay-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'giropay',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com',name:$('#name-giropay').val()==''?'John Johnson':$('#name-giropay').val()},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#ideal-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'ideal',amount:'499',currency:"EUR",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com'},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#multibanco-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'multibanco',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com',},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#bancontact-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'bancontact',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com',name:$('#name-bancontact').val()==''?'John Johnson':$('#name-bancontact').val()},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#eps-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'eps',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com',name:$('#name-eps').val()==''?'John Johnson':$('#name-eps').val()},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#alipay-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');metadata.amount_eur='499';metadata.conv_h_gbp='cf77662b371ac60bd06a5757da0447e0c9b4632e7cab7e84a473633f2f3cbf91';metadata.conv_h_pln='cf0adbdad4602fc871152f9fe6e30de9e921a733c0e4c43584c0487c3f904da9';metadata.conv_h_chf='cf0adbdad4602fc871152f9fe6e30de9e921a733c0e4c43584c0487c3f904da9';stripe.createSource({type:'alipay',amount:'439',currency:"GBP",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com'},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#przelewy24-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');stripe.createSource({type:'p24',amount:'499',currency:"EUR",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com'},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{window.location.href=result.source.redirect.url}})});$('#wechat-btn').on('click',function(e){toggleLoading(!0);var errorElement=$('#card-errors');metadata.amount_eur='499';metadata.conv_h_gbp='cf77662b371ac60bd06a5757da0447e0c9b4632e7cab7e84a473633f2f3cbf91';metadata.conv_h_pln='cf0adbdad4602fc871152f9fe6e30de9e921a733c0e4c43584c0487c3f904da9';metadata.conv_h_chf='cf0adbdad4602fc871152f9fe6e30de9e921a733c0e4c43584c0487c3f904da9';stripe.createSource({type:'wechat',amount:'439',currency:"GBP",statement_descriptor:"ENGINEOWNING",redirect:{return_url:'https://www.engineowning.to/shop/purchase/21/purchase-success',},owner:{email:'master.solve2\x40gmail.com'},metadata:metadata}).then(function(result){if(result.error){toggleLoading(!1);errorElement.text(result.error.message);errorElement.show()}else{$('#loading-text').text('Waiting for payment...');$('#main-screen').show();$('#main-screen').html('<div class="text-center fullwidth"><img src="https://chart.googleapis.com/chart?cht=qr&chs=400x400&chl='+encodeURI(result.source.wechat.qr_code_url)+'" width="400" height="400"><\/img><\/div>');setInterval(function(){stripe.retrieveSource(result.source).then(function(res){if(typeof(res.source)!=='undefined'){if(res.source.status=='chargeable'){window.location.href="https://www.engineowning.to/shop/purchase/21/purchase-success"}}})},2000)}})});$('#v-pills-wallet-tab').on('click',function(e){toggleLoading(!0);$('#error-no-wallet-available').hide();var paymentRequest=stripe.paymentRequest({country:'CH',currency:'eur',total:{label:'EngineOwning\x20for\x20Call\x20of\x20Duty\x3A\x20Modern\x20Warfare\x20and\x20Warzone',amount:499,},requestPayerName:!1,requestPayerEmail:!1});paymentRequest.on('paymentmethod',function(event){stripe.confirmCardPayment('pi_3M4P8NLpQHgmT6JO1CAo4NVR_secret_oFeC54Uv5TzLTr35ktmEgGwOb',{payment_method:event.paymentMethod.id},{handleActions:!1}).then(function(confirmResult){if(confirmResult.error){event.complete('fail');window.location.href="https://www.engineowning.to/shop/purchase/21/purchase-success"+"?stripe=1&payment_intent="+confirmResult.paymentIntent.client_secret}else{event.complete('success');if(confirmResult.paymentIntent.status==="requires_action"||confirmResult.paymentIntent.status==="requires_source_action"){stripe.confirmCardPayment('pi_3M4P8NLpQHgmT6JO1CAo4NVR_secret_oFeC54Uv5TzLTr35ktmEgGwOb').then(function(result){window.location.href="https://www.engineowning.to/shop/purchase/21/purchase-success"+"?stripe=1&payment_intent="+result.paymentIntent.client_secret})}else{window.location.href="https://www.engineowning.to/shop/purchase/21/purchase-success"+"?stripe=1&payment_intent="+confirmResult.paymentIntent.client_secret}}})});if(typeof(window.prButton)==='undefined'){window.prButton=elements.create('paymentRequestButton',{paymentRequest:paymentRequest,})}
   paymentRequest.canMakePayment().then(function(result){toggleLoading(!1);if(result){window.prButton.mount('#payment-request-button')}else{$('#payment-request-button').hide();$('#error-no-wallet-available').show()}})})});$(document).ready(function(){var getParameters={};location.search.substr(1).split("&").forEach(function(item){getParameters[item.split("=")[0]]=item.split("=")[1]});if(typeof(getParameters.type)!=='undefined'){switch(getParameters.type){default:break;case 'sofort':toggleLoading(!0);if(window.countryCodeSet){$('#sofort-btn').click()}else{window.countryCodeCallback=(function(){$('#sofort-btn').click()})}
   break;case 'giropay':$('#v-pills-giropay-tab').click();break;case 'ideal':$('#ideal-btn').click();break;case 'alipay':$('#alipay-btn').click();break;case 'wechat':$('#wechat-btn').click();break;case 'bancontact':$('#v-pills-bancontact-tab').click();break;case 'multibanco':$('#multibanco-btn').click();break;case 'eps':$('#v-pills-eps-tab').click();break;case 'p24':$('#przelewy24-btn').click();break;case 'wallet':$('#v-pills-wallet-tab').click();break}}})
   //-->
</script>
<script type=text&#x2F;javascript>//
   <!--
   var onPageLoad=function(first){$('[data-toggle="tooltip"]').tooltip();if(first){$(document).on('click','[data-toggle="lightbox"]',function(event){event.preventDefault();$(this).ekkoLightbox()})}
   try{yaCounter50848101.hit(window.location.href)}catch(e){}
   try{ga('send','pageview',location.pathname+location.search)}catch(e){}};var reload=!1;if(typeof(InstantClick)!=='undefined'){InstantClick.on('receive',function(url,body,title){reload=!1;if(typeof(title)!=='string'||title.length<1){reload=!0}});InstantClick.on('change',function(first){if(reload){location.reload()}
   $(function(){onPageLoad(first);if(typeof(updateImg)!=='undefined'){updateImg()}})})}else{$(document).ready(function(){onPageLoad(!0)})}
   //-->
</script>
<script crossorigin=anonymous data-no-instant=on src=&#x2F;shop&#x2F;js&#x2F;d99437ed257e27a89e8c8b56abf0dbe006cde908.js type=text&#x2F;javascript></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"76a84f7ba945cd59","token":"bccdf14e2cd344b7bb45298b8f2301db","version":"2022.11.0","si":100}' crossorigin="anonymous"></script> 



           @include('front.includes.footer')            
  <!-- End Footer -->
  <div id="preloader"></div>
  <a style="background-color: #e3e3e3;color:var(--main-color);cursor: pointer;" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"  style="color:var(--main-color)"></i>
  </a>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <script src="https://use.fontawesome.com/1744f3f671.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}


  </script>

    <script>
    
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			,
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}


  </script>
    <script>
$(function() {
    $("#loading").fadeOut(2000, function() {
        $("#mainSite").fadeIn(1000);        
    });
});
 </script>
  
  
  
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
</body>
  </html>


