<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>	{{$setting->title}}</title>
    <link rel="stylesheet" href="https://picxelstore.alfuratt-group.com/nicepage.css" media="screen">
         <link rel="stylesheet" href="https://picxelstore.alfuratt-group.com/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="https://picxelstore.alfuratt-group.com/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="https://picxelstore.alfuratt-group.com/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.8.8, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "/"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en" onload="window.print()" id="page-top">
         <div id="wrapper">
           <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<div class="container" style="
     width: 90%;
        text-align: center;
" >
      
    <section class="u-clearfix u-section-1" id="sec-b16c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('assets/images/'.$setting->logo)}}" alt="" data-image-width="957" data-image-height="375" style="    width: 200px;
    height: 70px;">
        <h3 class="u-text u-text-1">الأول في المملكة العربية السعودية&nbsp;</h3>
        <h3 class="u-text u-text-2">	{{$setting->title}} </h3>
        <h3 class="u-text u-text-3">الالكتروني</h3>
 
        <h3 class="u-hidden-md u-hidden-sm u-hidden-xs u-text u-text-7">السعودية - الرياض&nbsp;</h3>
        <div class="u-border-2 u-border-grey-75 u-container-style u-group u-opacity u-opacity-80 u-radius u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-8">عقد بيع بالتقسيط&nbsp;</h3>
          </div>
        </div>
        <h3 class="u-text u-text-9"> التاريخ:{{$order->created_at}} </h3>
        <h3 class="u-align-right u-text u-text-default u-text-10"> نعم انا السيد /   {{$order->name}}<br> 	{{$order->whatsApp}} / رقم جوال&nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp;العنوان / 
        
    	{{$order->address}}    
        <br>أقرا واعترف وأنا في حالتي الشرعية وبكامل قواي العقلية بأني&nbsp; في ذمتي للمؤسسة<br>المدعوة/	{{$setting->title}} مبلغ وقدره /	{{$order->total}} ريال فقط وذلك عن ماتبقي من ثمن جهاز  / &nbsp; &nbsp
        
        
        @foreach($cart as $CC)
        
        {{$CC['name']}}
        @endforeach                                                        
        
        علي ان يدفع المبلغ علي أقساط شهرية متتالية ومستمرة وبلا انقطاع بما فيها شهر رمضان والاعياد&nbsp;<br>&nbsp; قيمة الدفعة الشهرية /{{$order->FirstPayment}}  ريال&nbsp; فقط اعتبار من تاريخ&nbsp;14-4-2024 نهايى المبلغ المذكور أعلاه&nbsp; وأنني بسداد الأقساط في موعدها بدون تأخر أي قسط عن موعده&nbsp; المحدد فاني ملتزم التزاما تاما بسداد المبلغ المتبقي كاملا دفعة واحدة&nbsp;<br>كما أنني اقر عل نفسي بأنة لايوجد أي التزمات مالية ولا كفالات غرامية وقد اذنت والله خير الشاهدين&nbsp; &nbsp;
        </h3>
        <h3 class="u-align-right u-hidden-sm u-hidden-xs u-text u-text-11">الاسم / 	{{$order->name}}                                                        </h3>
         <h3 class="u-align-right u-text u-text-13">............../التوقيع </h3>
        <div class="u-align-center-xs u-rotation-parent u-rotation-parent-1">
      
        </div>
      </div>
    </section>
    
          </div>
      </div>
      </div>

    
 
</body></html>