
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@if (url()->current() == route('front.index'))
<title>@yield('hometitle')</title>
@else
<title>{{$setting->title}} -@yield('title')</title>
@endif

<!-- SEO Meta Tags-->
@yield('meta')
<meta name="author" content="{{$setting->title}}">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="167x167" href="{{asset('assets/images/'.$setting->favicon)}}">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<!--<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">-->

@yield('styleplugins')

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/styles.min.css')}}">

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/responsive.css')}}">
<!-- Color css -->
<link href="{{ asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color) }}" rel="stylesheet">

<!-- Modernizr-->
<script src="{{asset('assets/front/js/modernizr.min.js')}}"></script>

@if (DB::table('languages')->where('is_default',1)->first()->rtl == 1)
    <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
@endif
<style>
    {{$setting->custom_css}}
</style>
{{-- Google AdSense Start --}}
@if ($setting->is_google_adsense == '1')
    {!! $setting->google_adsense !!}
@endif
{{-- Google AdSense End --}}

{{-- Google AnalyTics Start --}}
@if ($setting->is_google_analytics == '1')
    {!! $setting->google_analytics !!}
@endif
{{-- Google AnalyTics End --}}

{{-- Facebook pixel  Start --}}
@if ($setting->is_facebook_pixel == '1')
    {!! $setting->facebook_pixel !!}
@endif
{{-- Facebook pixel End --}}

</head>
<!-- Body-->
<body class="
@if($setting->theme == 'theme1')
body_theme1
@elseif($setting->theme == 'theme2')
body_theme2
@elseif($setting->theme == 'theme3')
body_theme3
@elseif($setting->theme == 'theme4')
body_theme4
@endif
">
{{-- @if($setting->is_loader == 1) --}}
<!-- Preloader Start -->
@if ($setting->is_loader == 1)
<div id="preloader">
    <img src="{{ asset('assets/images/'.$setting->loader) }}" alt="{{ __('Loading...') }}">
</div>
@endif

<!-- Preloader endif -->
{{-- @endif --}}

<!-- Header-->
<!--<header class="site-header navbar-sticky">-->
    <!--<div class="menu-top-area">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="t-m-s-a">-->
    <!--                    <a class="track-order-link" href="{{route('front.order.track')}}"><i class="icon-map-pin"></i>{{ __('Track Order') }}</a>-->
    <!--                    <a class="track-order-link compare-mobile d-lg-none" href="{{route('fornt.compare.index')}}">{{ __('Compare') }}</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-8">-->
    <!--                <div class="right-area">-->

    <!--                    <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="{{route('user.wishlist.index')}}"><i class="icon-heart"></i>{{ __('Wishlist') }}</a>-->
                        
    <!--                    <div class="t-h-dropdown ">-->
    <!--                        <a class="main-link" href="#">{{ __('Currency') }}<i class="icon-chevron-down"></i></a>-->
    <!--                        <div class="t-h-dropdown-menu">-->
    <!--                            @foreach (DB::table('currencies')->get() as $currency)-->
    <!--                                <a class="{{Session::get('currency') == $currency->id ? 'active' : ($currency->is_default == 1 && !Session::has('currency') ? 'active' : '')}}" href="{{route('front.currency.setup',$currency->id)}}"><i class="icon-chevron-right pr-2"></i>{{$currency->name}}</a>-->
    <!--                            @endforeach-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="login-register ">-->
    <!--                        @if(!Auth::user())-->
    <!--                        <a class="track-order-link mr-0" href="{{route('user.login')}}">-->
    <!--                        {{__('Login/Register')}}-->
    <!--                        </a>-->
    <!--                        @else-->
    <!--                        <div class="t-h-dropdown">-->
    <!--                            <div class="main-link">-->
    <!--                                <i class="icon-user pr-2"></i> <span class="text-label">{{Auth::user()->first_name}}</span>-->
    <!--                            </div>-->
    <!--                            <div class="t-h-dropdown-menu">-->
    <!--                                <a href="{{route('user.dashboard')}}"><i class="icon-chevron-right pr-2"></i>{{ __('Dashboard') }}</a>-->
    <!--                                <a href="{{route('user.logout')}}"><i class="icon-chevron-right pr-2"></i>{{ __('Logout') }}</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        @endif-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
  <!-- Topbar-->
<!--    <div class="topbar">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="d-flex justify-content-between">-->
                        <!-- Logo-->
<!--                        <div class="site-branding">-->
<!--                            <a class="site-logo align-self-center" href="{{route('front.index')}}">-->
<!--                            <img src="{{asset('assets/images/'.$setting->logo)}}" alt="{{$setting->title}}"></a>-->
                            
                            
<!--                            </div>-->
                        <!-- Search / Categories-->
<!--                        <div class="search-box-wrap d-none d-lg-block d-flex">-->
<!--                        <div class="search-box-inner align-self-center">-->
<!--                            <div class="search-box d-flex">-->
         <!--                       <select name="category" id="category_select" class="categoris">-->
									<!--<option value="">{{__('All')}}</option>-->
         <!--                           @foreach (DB::table('categories')->whereStatus(1)->get() as $category)-->
         <!--                           <option value="{{$category->slug}}">{{$category->name}}</option>-->
         <!--                           @endforeach-->
									<!--</select>-->
<!--                                <form class="input-group" id="header_search_form" action="{{route('front.catalog')}}" method="get">-->
<!--                                    <input type="hidden" name="category" value="" id="search__category">-->
<!--                                    <span class="input-group-btn">-->
<!--                                    <button type="submit"><i class="icon-search"></i></button>-->
<!--                                    </span>-->
<!--                                    <input class="form-control" type="text" data-target="{{route('front.search.suggest')}}" id="__product__search" name="search" placeholder="{{__('ادخل كلمة البحث')}}">-->
<!--                                    <div class="serch-result d-none">-->
<!--                                       {{-- search result --}}-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                            <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>-->
<!--                        </div>-->
                        <!-- Toolbar-->
<!--                        <div class="toolbar d-flex">-->

<!--                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">-->
<!--                            <div>-->
<!--                                <i class="icon-search"></i>-->
<!--                            </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">-->
<!--                            <div><i class="icon-menu"></i><span class="text-label">الأقسام</span></div>-->
<!--                            </a>-->
<!--                        </div>-->

                        <!--<div class="toolbar-item hidden-on-mobile"><a href="{{route('fornt.compare.index')}}">-->
                        <!--    <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label compare_count">{{Session::has('compare') ? count(Session::get('compare')) : '0'}}</span></span><span class="text-label">{{ __('Compare') }}</span></div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--@if(Auth::check())-->
                        <!--<div class="toolbar-item hidden-on-mobile"><a href="{{route('user.wishlist.index')}}">-->
                        <!--    <div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count">{{Auth::user()->wishlists->count()}}</span></span><span class="text-label">{{__('Wishlist')}}</span></div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--@else-->
                      <!--  <div class="toolbar-item hidden-on-mobile"><a href="{{route('user.wishlist.index')}}">-->
                      <!--    <div><span class="compare-icon"><i class="icon-heart"></i></span><span class="text-label">{{__('Wishlist')}}</span></div>-->
                      <!--    </a>-->
                      <!--</div>-->
                        <!--@endif-->
<!--                        <div class="toolbar-item"><a href="{{route('front.cart')}}">-->
<!--                            <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span><span class="text-label">سلة المشتريات</span></div>-->
<!--                            </a>-->
                            <!--<div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">-->
                            <!--@include('includes.header_cart')-->
                            <!--</div>-->
<!--                        </div>-->
<!--                        </div>-->

                        <!-- Mobile Menu-->
<!--                        <div class="mobile-menu">-->
                            <!-- Slideable (Mobile) Menu-->
<!--                            <div class="mm-heading-area">-->
<!--                                <h4>أقسام متجرنا</h4>-->
<!--                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">-->
<!--                                    <a href="#">-->
<!--                                        <div> <i class="icon-x"></i></div>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <ul class="nav nav-tabs" role="tablist">-->
                            
<!--                                <li class="nav-item" role="presentation99">-->
<!--                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false">الأقسام</span>-->
<!--                                </li>-->

<!--                              </ul>-->
<!--                              <div class="tab-content p-0" >-->
<!--                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">-->
<!--                                    <nav class="slideable-menu">-->
<!--                                                                          @include('includes.mobile-category')-->

<!--                                    </nav>-->
<!--                                </div>-->
<!--                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">-->
<!--                                    <nav class="slideable-menu">-->
<!--                                        @include('includes.mobile-category')-->

<!--                                    </nav>-->
<!--                                </div>-->
<!--                              </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
  <!-- Navbar-->
<!-- <div class="navbar">-->
<!--        <div class="container">-->
<!--            <div class="row g-3 w-100">-->
                <!--<div class="col-lg-3">-->
                <!--    @include('includes.categories')-->
                <!--</div>-->
<!--                <div class="col-lg-12 d-flex justify-content-center ">-->
<!--                    <div class="nav-inner">-->
<!--                        <nav class="site-menu">-->
<!--                            <ul>-->
<!--                             @foreach (DB::table('categories')->whereStatus(1)->take(6)->OrderBy('id','asc')->get() as $category)-->
<!--                                <li class="{{ request()->routeIs('front.catalog*')  ? 'active' : '' }}"><a href="{{route('front.catalog').'?category='.$category->slug}}" style="font-family: system-ui;-->
<!--    font-weight: 500;">{{$category->name}}</a></li>-->
<!--                               @endforeach-->

        
                          
<!--                            </ul>-->
<!--                        </nav>-->
                        

<!--                    </div>-->
                 
<!--                </div>-->
<!--                    <div class="col-lg-12 d-flex justify-content-center mt-0">-->
<!--                    <div class="nav-inner">-->
<!--                        <nav class="site-menu">-->
<!--                            <ul>-->
<!--                             @foreach (DB::table('categories')->whereStatus(1)->OrderBy('id','desc')->take(4)->get() as $category)-->
<!--                                <li class="{{ request()->routeIs('front.catalog*')  ? 'active' : '' }}"><a href="{{route('front.catalog')}}" style="font-family: system-ui;-->
<!--    font-weight: 500;;">{{$category->name}}</a></li>-->
<!--                               @endforeach-->

        
<!--                              <li class="">-->
<!--                            <a class="childcategory" href="https://moci.gov.kw.mulfat.com/jobs?type=4" style="    font-weight: 500; font-family: system-ui;"> طلب توظيف</a>-->
<!--                              </li> -->
                          
<!--                            </ul>-->
<!--                        </nav>-->
                        

<!--                    </div>-->
                 
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<!-- Page Content-->
@yield('content')

<!--    announcement banner section start   -->
<!--    announcement banner section end   -->

<!-- Site Footer-->
<!--<footer class="site-footer">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-6">-->
          <!-- Contact Info-->
<!--          <section class="widget widget-light-skin">-->
<!--            <h3 class="widget-title">تواصل معنا</h3>-->
<!--            <p class="mb-1"><strong>رقم الجوال </strong> ⁦0000000000+⁩</p>-->
<!--            <p class="mb-3"><strong>البريد الالكتروني </strong> mulfat@gmail.com</p>-->
 
<!--          </section>-->
<!--        </div>-->
<!--        <div class="col-6">-->
<!--             شعار المتجر-->
<!--            <section class="widget">-->


<!--              <div class="pt-3">-->
<!--                   <a class="site-logo align-self-center" href="{{route('front.index')}}">-->
<!--                            <img src="{{asset('assets/images/'.$setting->logo)}}" alt="{{$setting->title}}" style="width:25%"></a>-->
<!--                  </div>-->

<!--            </section>-->

<!--          </div>-->
<!--                                                      <img class="d-block gateway_image" src="{{ $setting->footer_gateway_img ? asset('assets/images/'.$setting->footer_gateway_img) : asset('system/resources/assets/images/placeholder.png') }}">-->

<!--      </div>-->
      <!-- Copyright-->
<!--    </div>-->
<!--  </footer>-->
<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>
<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- Cookie alert dialog  -->
@if ($setting->is_cookie == 1)
@include('cookieConsent::index')
@endif

<!-- Cookie alert dialog  -->


@php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
@endphp

<script>
    var mainbs = {!! $mainbs !!};
    var decimal_separator = '{!! $setting->decimal_separator !!}';
    var thousand_separator = '{!! $setting->thousand_separator !!}';
</script>

<script>
    let language = {
        Days : '{{__('Days')}}',
        Hrs : '{{__('Hrs')}}',
        Min : '{{__('Min')}}',
        Sec : '{{__('Sec')}}',
    }

</script>



<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script type="text/javascript" src="{{asset('assets/front/js/plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/scripts.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/myscript.js')}}"></script>
@yield('script')

@if($setting->is_facebook_messenger	== '1')
 {!!  $setting->facebook_messenger !!}
@endif



<script type="text/javascript">
    let mainurl = '{{route('front.index')}}';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
    </script>

    @if(Session::has('error'))
    <script>
      $(document).ready(function(){
        DangerNotification('{{Session::get('error')}}')
      })

    </script>
    @endif
    @if(Session::has('success'))
    <script>
      $(document).ready(function(){
        SuccessNotification('{{Session::get('success')}}');
      })

    </script>
    @endif

</body>
</html>
