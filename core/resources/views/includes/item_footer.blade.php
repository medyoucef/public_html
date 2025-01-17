@if ($sitem->item_type != 'affiliate')
    @if ($sitem->is_stock())
  

         <button class="product-button add_to_single_cart btn btn-outline-primary bg-light" data-target="{{ $sitem->id }}" href="javascript:;" title="To Cart" style="    width: 100%;">إضافة للسلة
                                            </button>
    @else
    <a class="product-button" href="{{route('front.product',$sitem->slug)}}" title="{{__('Details')}}"><i class="icon-arrow-right"></i></a>
    @endif
@else
<a class="product-button" href="{{$sitem->affiliate_link}}" target="_blank" title="{{__('Buy Now')}}"><i class="icon-arrow-right"></i></a>
@endif