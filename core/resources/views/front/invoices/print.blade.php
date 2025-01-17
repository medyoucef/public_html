<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon"  type="image/x-icon" href="{{ asset('assets/images/'.$setting->favicon) }}"/>

  <title>{{ $setting->title }}</title>
<!-- Bootstrap -->
<link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/front/css/fontawesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/front/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('assets/front/css/jquery-ui.css') }}" rel="stylesheet">

<link href="{{ asset('assets/front/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/front/css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}

*{
    
 font-size:10px;
    font-weight: 600;
 
}

</style>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
 
<!-- Main css -->
<link href="{{ asset('assets/front/css/main.css') }}" rel="stylesheet">
</head>

<body id="invoice-print" onload="window.print()" id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @php
        if($order->state){
            $state = json_decode($order->state,true);
        }else{
            $state = [];
        }
    @endphp
<div class="container" style="
     width: 90%;
        text-align: center;
" >
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
<img src="{{asset('assets/images/'.$setting->logo)}}" style="width:20%">    			
    			<h3 class="pull-right"> #{{$order->order_number}}  : تفاصيل الطلب </h3>
     		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>:مصدرة الي </strong><br>
    					{{$order->name}}<br>
    					{{$order->address}}<br>
    					{{$order->whatsApp}}<br>
    					{{$order->email}}<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>:مصدرة من </strong><br>
{{$setting->title}}:المتجر الالكتروني
<br>
{{$setting->tax_number}}
 الرقم الضريبي:    					
    					<br>
  {{$setting->contact_email}}
:البريد الالكتروني    		


</address>

    			</div>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>   : شركة الشحن 
   </strong><br>
       @if($order->delivaryCompanyId==1)
      شركة أرامكس
    			       					@endif

    			      @if($order->delivaryCompanyId==2)
		سمسا
    					@endif
    					<br>
#{{$order->shippment_number}}: رقم الشحنة  
<br>    			
(من 8 الي 48 ساعة ):  الوقت  المتوقع للوصول    

</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>تفاصيل الدفع  </strong><br>
اجمالي المبلغ:
      {{$order->total}} 		ر.س 		
    				<br>
      الدفعة الأولي :
      {{$order->FirstPayment}} 		ر.س 		
    				<br>
    				          الباقي يتم سداده على   :
      {{$order->InstallmentBy}} 	شهور 		
    				<br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong> تفاصيل الفاتورة   </strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-right"><strong>الاجمالي الفرعي</strong></td>
        							 <td class="text-right"><strong>الكمية</strong></td>
        							 <td class="text-right"style="width: 35%;"><strong>السعر</strong></td>
        							 <td class="text-right"style="width: 35%;" ><strong>المنتج</strong></td>

                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    					    @foreach($cart as $CC)

                                                         <tr>
    								<td class="text-right">{{$setting->currency}} {{$CC['price']*$CC['quantity']}} </td>
    								<td class="text-right">{{$CC['quantity']}}</td>
    								<td class="text-right">{{$CC['price']}}{{$setting->currency}}</td>
    								<td class="text-right" >{{$CC['name']}} <img src="{{asset('assets/images/'.$CC['image'])}}" style="
    width: 20%;padding:10px
"></td>

    							  </tr>
 
                            @endforeach
                              
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								    								<td class="thick-line text-right">{{$setting->currency}}{{$order->total}}</td>

    								<td class="thick-line text-center"><strong>اجمالي الطلب </strong></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								    								<td class="no-line text-right"><span>{{$setting->currency}}</span>{{$order->shippment_cost}}</td>

    								<td class="no-line text-center"><strong>الشحن</strong></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								    								<td class="no-line text-right">{{$setting->currency}}{{$order->total}}</td>

    								<td class="no-line text-center"><strong>الاجمالي الكلي </strong> </td>
    							</tr>
    							<tr>
    							    	<td class="no-line"></td>
    								<td class="no-line"></td>
    							     
    							       <td style="text-align:center">
    							           
    							               							        <p>لزيارة المتجر امسح الكود </p>

    							           
    							        <img src="{{asset('assets/images/'.$setting->qr)}}" style="width:20%">
    							    </td>
    							      <td style="text-align:center">
 
     							    </td> 
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

</body>

</html>

