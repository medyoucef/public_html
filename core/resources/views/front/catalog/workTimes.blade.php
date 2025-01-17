 
@extends('layouts.master')
   @section('content') 
   
   
    <main><section class="mt-4 py-3">
</section>
<section class="container">
    <h4 style="color: #17a3a1;" class="my-4">اوقات العمل</h4>
    <div class="bg-white rounded">
        <div class="container p-4">
            <h6 class="mb-4">اوقات العمل لخدمة العملاء :</h6>
            <p style="text-align: justify;" class="mb-3 pb-3">
                التواصل مع رقم خدمة العملاء عن طريق الواتساب <span dir="ltr"> </span> خلال اوقات العمل يومياً من الساعة 9صباحا حتى 12 مساءً من يوم السبت حتى الخميس ماعدا يوم الجمعة وأيام العطل والاعياد الرسمية .
            </p>
        </div>
    </div>
</section>
<iframe class="d-none" src="" frameborder="0"></iframe>
<a href="{{$setting->whatsapp_link}}" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>
</main>
   
   
      @endsection