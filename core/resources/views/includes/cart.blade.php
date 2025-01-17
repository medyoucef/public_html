@php
    $cart = Session::has('cart') ? Session::get('cart') : [];
    $total =0;
    $option_price = 0;
    $cartTotal = 0;

@endphp

<div class="card">
    <div class="card-body">
        <div class="table-responsive shopping-cart">
            <table class="table table-bordered">

              <thead>
                <tr>
                  <th>اسم المنتج</th>
                  <th>سعر المنتج </th>
                  <th class="text-center">الكمية </th>
                  <th class="text-center">الاجمالي</th>
                  <th class="text-center"><a class="btn btn-sm btn-primary" href="{{route('front.cart.clear')}}"><span>حذف السلة</span></a></th>
                </tr>
              </thead>

              <tbody id="cart_view_load" data-target="{{route('cart.get.load')}}">

                @foreach ($cart as $key => $item)
                @php

                    $cartTotal +=  ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                @endphp
                <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="{{route('front.product',$item['slug'])}}"><img src="{{asset('assets/images/'.$item['photo'])}}" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title" style="margin-right: 10%;"><a href="{{route('front.product',$item['slug'])}}">
                            {{ strlen(strip_tags($item['name'])) > 200 ? substr(strip_tags($item['name']), 0, 200) . '...' : strip_tags($item['name']) }}

                        </a></h4>

                          @foreach ($item['attribute']['option_name'] as $optionkey => $option_name)
                          <span><em>{{$item['attribute']['names'][$optionkey]}}:</em> {{$option_name}} ({{PriceHelper::setCurrencyPrice($item['attribute']['option_price'][$optionkey])}})</span>
                          @endforeach
                        </div>
                      </div>
                    </td>
                    <td class="text-center text-lg">{{PriceHelper::setCurrencyPrice($item['main_price'])}}</td>

                    <td class="text-center">
                     @if ($item['item_type'] != 'digital')
                        <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="{{$item['qty']}}">
                        <span class="increaseQtycart cartaddclick" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}" data-item="{{ implode(",", $item['options_id']) }}"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div>
                     @endif

                    </td>
                    <td class="text-center text-lg">{{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}</td>

                    <td class="text-center"><a class="remove-from-cart" href="{{route('front.cart.destroy',$key)}}" data-toggle="tooltip" title="Remove item"><i class="icon-x"></i></a></td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
    </div>
</div>

        <div class="card">
            <div class="card-body">
                <h6>تفاصيل الفاتورة</h6>

          <form id="checkoutBilling" action="{{route('front.checkout.store')}}" method="POST">
            @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn">الاسم الاول </label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln">الاسم الثاني</label>
              <input class="form-control" name="bill_last_name" type="text" required id="checkout-ln" value="{{isset($user) ? $user->last_name : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone">رقم الجوال</label>
              <input class="form-control" name="bill_phone" type="text" id="checkout-phone" required value="{{isset($user) ? $user->phone : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1">العنوان بالتفصيل </label>
              <input class="form-control" name="bill_address1" required type="text" id="checkout-address1" value="{{isset($user) ? $user->bill_address1 : ''}}">
            </div>
          </div>
        @if (PriceHelper::CheckDigital())
        
        </div>
        @endif




        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input d-none" type="checkbox"  id="same_address" name="same_ship_address" {{Session::has('shipping_address') ? 'checked' : 'checked'}} >
          </div>
        </div>

        @if ($setting->is_privacy_trams == 1)
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition" >
            <label class="custom-control-label" for="trams__condition">
                                 الموافقة على خصوصية وسياسة الموقع
                </label>
          </div>
        </div>
        @endif

        <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-primary btn-sm" href="{{route('front.cart')}}"><span class=""><i class="icon-arrow-right"></i>العودة للسلة</span></a>
            @if ($setting->is_privacy_trams == 1)
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="">استمرار</span><i class="icon-arrow-left"></i></button>
            @else
            <button class="btn btn-primary btn-sm" type="submit"><span class="">استمرار</span><i class="icon-arrow-left"></i></button>
            @endif
          </div>
        </form>
            </div>
        </div>

</div>


