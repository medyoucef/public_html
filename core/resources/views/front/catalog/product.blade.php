@php

use App\Models\Item;



@endphp


@extends('layouts.master')
   @section('content') 


    <!-- Start Main -->
    <main class="main" id="blur">
        <!-- Start Location -->
        <section class="location wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
            <p><a href="#">الفعاليات <i class="fa-solid fa-chevron-left"></i></a> <span> |    
               
               
               {{$item->name}}
                    </span></p>
        </section>
        <!-- End Location -->

        <!-- Start Poster -->
        <section class="main-poster wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
            <section class="head">
                <section class="title">
                    <span>{{$item->brand->name}}    </span>
                    <h2>{{$item->name}}</h2>
                </section>
                <a href="#"><i class="fa-solid fa-arrow-up-from-bracket"></i> مشاركة</a>
            </section>
            <section class="main-image">
                <img  src="{{asset('assets/images/'.$item->photo)}}"
                    alt="">

            </section>
        </section>
        <!-- End Poster -->

        <!-- Start Details -->
        <sectionj class="details wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <section class="box">
                <section class="date">
                    <section>
                        <i class="fa-solid fa-calendar-days"></i>
                        <section class="title">
                            <p>يبدأ من</p>
                            <p>{{$item->event_date}}</p>
                        </section>
                    </section>
                    <section>
                        <i class="fa-solid fa-location-dot"></i>
                        <section class="title">
                            <p>الموقع</p>
                            <p>{{$item->meta_description}}     {{$item->brand->name}}</p>
                        </section>
                    </section>
                </section>
                <section class="text">
                    <p>عن الفعالية</p>
                    <span> 
                    
                    {!!$item->details!!}
                        </span>
                </section>
                <section class="text">
                    <p>الشروط الأحكام</p>
                    <ul>
                        <li>1. إلغاء الحدث من قبل المنظم يحتفظ المنظم بالحق في إلغاء الحدث بسبب انخفاض التسجيل، الأحوال
                            الجوية السيئة، أو غيرها من الظروف التي تجعل الحدث غير قابل للتنفيذ. إذا قام المنظم بإلغاء
                            الحدث،
                            سيتم عرض استرداد كامل للرسوم للمسجلين.
                            في حالة الإلغاء، سيقوم المنظم بإخطار المسجلين عبر البريد الإلكتروني و/أو الهاتف في أقرب وقت
                            ممكن. إذا تم تأجيل الحدث، سيكون لدى المسجلين الخيار إما لاسترداد كامل للرسوم أو تحويل
                            التسجيل
                            إلى نفس الحدث في التاريخ الجديد. 2. إلغاء التسجيل من قبل المشارك الإلغاءات التي يتم استلامها
                            في
                            غضون 3 أيام من التسجيل ستتلقى استردادًا كاملاً. الإلغاءات التي يتم استلامها بعد 3 أيام من
                            تاريخ
                            التسجيل غير قابلة للاسترداد.
                            سيتم معالجة الاستردادات في غضون 7 أيام عمل بعد استلام الطلب الكتابي.</li>
                        <li>
                            2. عدم الحضور لن يتم توفير أي استردادات للمسجلين الذين لا يحضرون الحدث دون إشعار مسبق
                            بالإلغاء
                            كما هو محدد في القسم
                        </li>
                        <li>
                            3. القوة القاهرة لا يتحمل المنظم أي مسؤولية عن أي خسارة أو ضرر نتيجة استبدال أو تغيير أو
                            إلغاء/تأجيل الحدث. في حالة إلغاء أو تأجيل الحدث بسبب كارثة طبيعية أو وباء أو أي حدث آخر خارج
                            عن
                            سيطرة المنظم، لن يكون المنظم مسؤولًا عن أي نفقات يتكبدها المسجل. في مثل هذه الحالات، سيبذل
                            المنظم جهودًا معقولة لإعادة جدولة الحدث أو تقديم ترتيبات بديلة، ولكن لن يتم تقديم أي
                            استردادات.
                        </li>
                        <li>
                            4. سياسة الاستبدال يمكن للمسجلين إرسال بديل مكانهم بدلاً من إلغاء تسجيلهم، بشرط أن يتم إخطار
                            المنظم كتابيًا قبل 7 أيام على الأقل من الحدث. تخضع الاستبدالات لموافقة المنظم ويجب أن تكون
                            ذات
                            قيمة مساوية أو أقل.
                        </li>
                        <li>
                            5. عملية الاسترداد يجب تقديم جميع طلبات الاسترداد كتابيًا عبر البريد الإلكتروني
                            [admin@dreamrockltd.com]. يرجى تضمين اسمك ورقم تأكيد التسجيل وسبب طلب الاسترداد. سيتم معالجة
                            الاستردادات المعتمدة وإصدارها إلى طريقة الدفع الأصلية في غضون 7 أيام عمل.

                            إخفاء المزيد
                        </li>
                    </ul>
                </section>
            </section>
            <section class="reg">
                <section class="box">
                    <h2>احجز مكانك</h2>
                    <span>يبدأ من</span>
                    <p>{{$item->discount_price}}
                        ريال سعودي</p>
                    <span>شامل ضريبة القيمة المضافة</span>
                    <a href="{{$setting->domain}}/book?id={{$item->id}}">احجز التذاكر</a>
                    <section>
                        <i class="fa-solid fa-bolt"></i>
                        <section class="title">
                            <p>حجز فوري</p>
                            <span>سيتم حجزك مباشرة على {{$setting->domain}}</span>
                        </section>
                    </section>
                </section>
            </section>
        </sectionj>
        <!-- End Details -->

        <!-- Start Liked -->
        <section class="liked wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <!-- استكشف الفئات -->
            <section class="slides wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <section class="title">
                    <h2>قد يعجبك هذا</h2>
                </section>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        
                        
                        @foreach (Item::where('subcategory_id',$item->subcategory_id)->take(4)->get()  as $item)
  
                        
                        
                        <div class="swiper-slide">
                            <a  href="{{route('front.product',$item->slug)}}">
                                <div class="content">
                                    <img src="{{asset('assets/images/'.$item->photo)}}"
                                        alt="">
                                    <section class="text shadow">
                                        <p>الآنشطة والمغامرات</p>
                                    </section>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- استكشف الفئات -->
        </section>
        <!-- End Liked -->
       @endsection