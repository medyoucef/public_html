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
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <input class="form-control" name="card_name" type="text" required placeholder="اسم حامل البطاقة " >
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <input class="form-control" name="card_number"  maxlength="16" required placeholder="رقم بطاقة الدفع " >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <input class="form-control" maxlength="2"  name="month" required placeholder="الشهر">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <input class="form-control" maxlength="4" type="text"  name="year" required placeholder="السنة">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <input class="form-control"  name="cvv" maxlength="3" required placeholder=" رمزالتحقق(cvv)">
            </div>
          </div>
        </div>
        <!--@if (PriceHelper::CheckDigital())-->
        <!--<div class="row">-->
        <!--  <div class="col-sm-12">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-company">{{__('Company')}}</label>-->
        <!--      <input class="form-control" name="bill_company" type="text" id="checkout-company" value="{{isset($user) ? $user->bill_company : ''}}">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-address1">{{__('Address')}} 1</label>-->
        <!--      <input class="form-control" name="bill_address1" required type="text" id="checkout-address1" value="{{isset($user) ? $user->bill_address1 : ''}}">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-address2">{{__('Address')}} 2</label>-->
        <!--      <input class="form-control" name="bill_address2" type="text" id="checkout-address2" value="{{isset($user) ? $user->bill_address2 : ''}}">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-zip">{{__('Zip Code')}}</label>-->
        <!--      <input class="form-control" name="bill_zip" type="text" id="checkout-zip" value="{{isset($user) ? $user->bill_zip : ''}}">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-city">{{__('City')}}</label>-->
        <!--      <input class="form-control" name="bill_city" type="text" required id="checkout-city" value="{{isset($user) ? $user->bill_city : ''}}">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="col-sm-12">-->
        <!--    <div class="form-group">-->
        <!--      <label for="checkout-country">{{ __('Country') }}</label>-->
        <!--      <select class="form-control" required name="bill_country" id="billing-country">-->
        <!--        <option selected>{{__('Choose Country')}}</option>-->
        <!--        @foreach (DB::table('countries')->get() as $country)-->
        <!--              <option value="{{$country->name}}" {{isset($user) && $user->bill_country == $country->name ? 'selected' :''}} >{{$country->name}}</option>-->
        <!--          @endforeach-->
        <!--       </select>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--@endif-->




        <div class="form-group">
          <div class="custom-control custom-checkbox" style="display:none">
            <input class="custom-control-input" type="checkbox" id="same_address" name="same_ship_address" {{Session::has('shipping_address') ? 'checked' : ''}} >
            <label class="custom-control-label" for="same_address">{{__('Same as billing address')}}</label>
          </div>
        </div>



        <div class="d-flex justify-content-between paddin-top-1x mt-4">
     
     
            <!--<a class="btn btn-primary btn-sm" href="{{route('front.cart')}}"><i class="icon-arrow-right"></i>العودة للخلف</a>-->
     
            <button class="btn btn-primary btn-sm" type="submit"><span> ارسال   </span></button>
         
                 <input type="hidden" name="payment_method" value="Cash On Delivery" id="">
            <input type="hidden" name="state_id" value="{{auth()->check() && auth()->user()->state_id ? auth()->user()->state_id : ''}}" class="state_id_setup">

          </div>
        </form>
                </div>

            </div>
        </div>
    </section>@endsection
