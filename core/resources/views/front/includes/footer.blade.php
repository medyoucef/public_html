@php
use App\Models\File;

                $files = File::get();

@endphp
   
    <footer class="bg-light pt-3 mt-3 border border-top">
    <div class="d-flex justify-content-center w-100 py-3">
        <a href="/">
            <img class="ms-auto me-auto" src="{{asset('assets/images/'.$setting->logo)}}" width="180" alt="">
        </a>
    </div>
    <div class="container text-dark fw-bold  pb-4">
        <div class="row">
            <div class="col-md-4 col-12 mb-3">
                <div class="w-100">
                    <h5 class="pb-3 text-center mb-3" style="color: #00395e;">روابط مهمة</h5>
                    <div class="container text-center" style="font-size: 12px;">
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="termsConditions">سياسة الضمان والاستبدال</a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="workTimes">اوقات العمل
                            </a>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none mainColor" href="RefundAndCancleOrders">استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3">
                <div class="w-100">
                    <h5 class="pb-3 text-center mb-3" style="color: #00395e;">من نحن</h5>
                    <p class="text-center text-secondary px-5" style="font-size: 12px;">
                        منذ عام ٢٠١١ يعتبر متجر{{$setting->title}}   احد الموزعين المعتمدين من ابل رسميا بالمملكة العربية السعودية حيث تخصصنا بتوفير جميع منتجات ابل وما يصنع لهم من منتجات اصلية ومضمونة

                   </p>
                    <div class="container text-center mb-3 d-flex justify-content-center">
                        <a href="{{$setting->whatsapp_link}}" class="text-decoration-none">
                            <div class="text-dark px-2 rounded" style="background-color: #ECEDEF;">
                                <i class="fab fa-whatsapp fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">واتساب</p>
                            </div>
                        </a>
                        <a href="{{$setting->whatsapp_link}}" class="text-decoration-none mx-2">
                            <div class="text-dark px-3 rounded" style="background-color: #ECEDEF;">
                                <i class="fas fa-mobile-screen fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">جوال</p>
                            </div>
                        </a>
                        <a href="{{$setting->footer_email}}" class="text-decoration-none">
                            <div class="text-dark px-3 rounded" style="background-color: #ECEDEF;">
                                <i class="fas fa-envelope fa-fw fs-5 mt-2"></i>
                                <p class="pb-2" style="font-size: 12px;">إيميل</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <!--<div class="col-md-4 col-12 mb-5">-->
            <!--    <div class="w-100 text-secondary">-->
            <!--        <h5 class="pb-3 text-center mb-4" style="color: #00395e;">تواصل معنا</h5>-->
            <!--        <div class="container text-center">-->
            <!--            <span>-->
            <!--                <i class="fab fa-instagram fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--            <span>-->
            <!--                <i class="fab fa-twitter fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--            <span>-->
            <!--                <i class="fab fa-snapchat fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--            <span>-->
            <!--                <i class="fab fa-tiktok fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--            <span>-->
            <!--                <i class="fab fa-youtube fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--            <span>-->
            <!--                <i class="fab fa-facebook-f fa-fw fa-xl"></i>-->
            <!--            </span>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-4 col-12 mb-5">
                <div class="w-100 text-secondary">
                    <!--<h5 class="pb-3 text-center mb-4" style="color: #00395e;">تطبيقات متجر {{$setting->title_en}}</h5>-->
                    <div class="container text-center">
                        <div class="d-flex justify-content-center">
                            <!--<div class="me-2">-->
                            <!--    <img src="assets/image/icons/appstore.webp" class="w-100" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                            <!--    <img src="assets/image/icons/googleplay.webp" class="w-100" alt="">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    
                    
                    
                    
                    
                    
    @foreach($files as $data)
   
                    <a href="{{asset('assets/images/'.$data->photo)}}" class="text-light p-0 border-0 text-decoration-none">
                        <img src="{{asset('assets/images/'.$data->logo)}}" width="70" alt="">
                    </a>
    
      @endforeach
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!--<a href="{{route('qr-code')}}" class="text-light p-0 border-0 text-decoration-none">-->
                    <!--    <img src="assets/image/icons/qr-code.png" width="50" alt="">-->
                    <!--</a>-->
                    <!--<a href="{{route('maroof')}}" class="ms-3 text-decoration-none">-->
                    <!--    <img src="assets/image/icons/maroof.webp" width="80" alt="">-->
                    <!--</a>-->
                    <!--<a href="{{route('vat')}}" class="ms-3 text-light p-0 border-0 text-decoration-none">-->
                    <!--    <img src="assets/image/icons/vat.webp" width="40" height="45" alt="">-->
                    <!--</a>-->
                 
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #f6f6f6;">
        <div class="container-fluid text-white py-3 px-3" style="font-size: 14px;">
            <div class="row  align-items-center">
                <div class="col-md-6 col-12 text-center text-dark mb-3">
                    Copyright 2024 | {{$setting->title_en}}                </div>
                <div class="col-md-6 col-12 text-center mb-3">
                    <span class="me-1">
                        <img src="assets/image/icons/mada.webp" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="assets/image/icons/visa.png" width="35" alt="">
                    </span>
                    <span class="me-1">
                        <img src="assets/image/icons/bank.webp" width="35" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

