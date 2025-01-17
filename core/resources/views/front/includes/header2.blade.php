<!DOCTYPE html>
@php
        $categories = App\Models\Category::with('subcategory')->whereStatus(1)->orderby('serial','desc')->take(8)->get();
    @endphp
<html lang="ar" dir="rtl">

<head>
    <style>

        @import url('theme/assets.salla.cloud/fonts/default2d19.css');</style>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="theme-color" content="#727272">
    <meta name="msapplication-navbutton-color" content="#727272">
    <meta name="apple-mobile-web-app-status-bar-style" content="#727272">

    <link rel="icon" type="image/png" href="{{asset('assets/images/'.$setting->logo)}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/'.$setting->logo)}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/{{asset('assets/images/'.$setting->logo)}}">
    <meta name="_token" content="LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS">

    <title>&#x645;&#x624;&#x633;&#x633;&#x629; &#x62A;&#x632;&#x627;&#x64A;&#x62F; _ &#x645;&#x62A;&#x62C;&#x631; &#x645;&#x644;&#x641;&#x62A; &#x633;&#x62A;&#x648;&#x631;   Mulfet Store </title>
    <meta name="description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta name="keywords" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;-">
    <meta property="store:published_time" content="2019-09-02T02:36:19+03:00">
    <meta property="og:description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta property="og:title" content="&#x645;&#x624;&#x633;&#x633;&#x629; &#x62A;&#x632;&#x627;&#x64A;&#x62F; _ &#x645;&#x62A;&#x62C;&#x631; &#x645;&#x644;&#x641;&#x62A; &#x633;&#x62A;&#x648;&#x631;   Mulfet Store ">
    <meta property="og:type" content="store">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:locale:alternate" content="ar_AR">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:url" content="https://mulfetstr.com/">
    <meta property="og:image" content="/{{asset('assets/images/'.$setting->logo)}}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="300">
    <meta name="twitter:description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta name="twitter:image" content="/{{asset('assets/images/'.$setting->logo)}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="&#x645;&#x624;&#x633;&#x633;&#x629; &#x62A;&#x632;&#x627;&#x64A;&#x62F; _ &#x645;&#x62A;&#x62C;&#x631; &#x645;&#x644;&#x641;&#x62A; &#x633;&#x62A;&#x648;&#x631;   Mulfet Store ">
    <meta name="twitter:url" content="https://mulfetstr.com/">
    <meta name="twitter:site" content="Mulfet Store ">
    <meta name="twitter:creator" content="Mulfet Store ">
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebPage","name":"Over 9000 Thousand!","description":"ايفون 13 برو ماكس - بلاي ستيشن 5 - سوني 5  -"}</script>
    <link rel="stylesheet" href="theme/assets.salla.cloud/css/app9d6c.css?id=afd29fb09b6554d13af9846ce72da9ea">

    <link rel="stylesheet" href="theme/assets.salla.cloud/css/themes4b5f.css?id=3ee4c615e0fdf12513b2507d3b268ed2">
    <link rel="stylesheet" href="theme/assets.salla.cloud/css/pluginsd278.css?id=51437878867e69288ff737f568585dde">

    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/default/assets/css/slick-theme2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="theme/assets.salla.sa/cp/assets/css/icons/sallaicons/style.css">
    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/theme_6/assets/css/main2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style type="text/css">
        :root {
            --main-color: #727272;
            --main-text-color: #525252;
            --main-text-color2: #181818;
            --infinte-color: #525252;
            --main-text-color-dark: #727272;
            /* New Coloring Pattern: */
            --color-main: #727272;
            --color-main-d: #585858;
            --color-main-l: #989898;
            --color-main-reverse: #727272;
            --color-text: #5a5a5a;
            --color-text-reverse: #ffffff;
            --color-title: #252525;
        }

        .store-header, .header-bar, .store-header-min {
            background: var(--main-color);
        }

            .store-header h1 a, .store-header-min h1 {
                color: #fff;
            }

        .dropdown-store-header.open .dropdown-toggle, .dropdown-store-header.open .dropdown-toggle {
            background: var(--main-color);
            color: #fff;
        }
        /* .store-contact a { color: var(--main-text-color); } */
        /*a.media-heading, a.product-link { color: var(--main-text-color); }*/
        .pace-demo {
            background: var(--main-text-color) !important; /*darker*/
        }

        .pace .pace-progress {
            background: var(--main-text-color2) !important; /*darker*/
        }

        .add-cart {
            color: var(--main-text-color); /*darker*/
            border: 1px solid var(--main-text-color); /*darker*/
        }

            .add-cart:hover, .add-cart:focus, .add-cart-large:hover, .add-cart-large:focus, .order-btn:hover, .order-btn:focus {
                background: var(--main-text-color); /*darker*/
                border-color: var(--main-text-color);
            }

        .cart-nav-submit, .cart-nav-more, .cart-nav-solid {
            background: var(--main-text-color); /*darker*/
            border-color: var(--main-text-color); /*darker*/
        }

        .add-cart-large, .order-btn {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .cart-nav-light:hover, .cart-nav-light:active, .cart-nav-light:focus {
            color: var(--main-color);
        }

        .cart-nav-light {
            border-color: var(--main-text-color); /*darker*/
            color: var(--main-text-color); /*darker*/
        }

        .cart-line {
            border-color: var(--main-color); /*lighter*/
        }

        .cart-number {
            color: var(--main-text-color); /*lighter*/
            border-color: var(--main-color); /*lighter*/
        }

        .active-step .cart-number {
            background: var(--main-color);
            border-color: var(--main-color);
        }

        .cart-title {
            color: var(--main-color) !important; /*lighter*/
        }

        #salla_bar {
            border-top-color: var(--main-color);
        }

            #salla_bar .checkout-button {
                background: var(--main-text-color);
            }

        .choice.border-info-600.text-info-800 {
            color: var(--main-text-color) !important;
            border-color: var(--main-text-color) !important;
        }

        .payment-method.active {
            background: var(--main-text-color) !important;
        }

        .pagination > .active > span {
            background-color: var(--main-text-color) !important;
            border-color: var(--main-text-color) !important;
        }
        /*.order-num { color: var(--main-text-color); }*/

        .product-side-container .product-order-container .panel-heading {
            background: var(--main-color) !important;
            border-bottom-color: var(--main-color) !important;
            color: #fff !important;
        }

        .testimonial-header, .owl-theme .owl-nav [class*=owl-] {
            background: var(--main-color) !important;
        }

        a:hover, a:focus {
            color: #fff;
        }

        .sub-nav__menu:hover svg {
            fill: var(--main-text-color);
        }

        .site-header__cart .badge {
            background: var(--main-text-color);
        }

        .circle-action:hover {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .sub-nav .main-menu > li:hover > a, .sub-nav .main-menu > li:hover > a > i {
            color: var(--main-text-color);
        }

        .sub-nav li > ul a:hover {
            color: var(--main-text-color2);
        }

        .slick-active button {
            background-color: var(--main-text-color) !important;
        }

        .product:hover .product-title {
            color: var(--main-text-color);
        }

        .product-price, .product-details__price {
            color: var(--main-text-color);
        }

        .product-add:hover {
            background-color: var(--main-color) !important;
            border-color: var(--main-color);
        }

        .sub-nav__menu:hover {
            color: var(--main-color) !important;
        }

        .login-container .border-yellow-dark {
            border-color: var(--main-text-color);
        }

        .login-container .text-yellow-dark {
            color: var(--main-text-color);
        }


        .sub-nav-header {
            background: var(--main-color);
        }

            .sub-nav-header a {
                color: var(--main-color);
            }

        .btn-primary {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

            .btn-primary:focus, .btn-primary.focus, .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.active:hover, .btn-primary:active:hover {
                background: var(--main-text-color2);
                border-color: var(--main-text-color2);
            }

        .page-box .panel-heading .product-title {
            color: var(--main-text-color) !important;
        }

        #ask_register_link {
            color: var(--main-text-color) !important;
        }

        .product-details__hot strong {
            color: var(--main-text-color) !important;
        }

        @media (min-width: 992px) {
            .sub-nav li > ul a:hover {
                background: var(--main-text-color);
                color: #fff;
            }
        }



        .site-header__cart .badge {
            background: var(--main-text-color);
        }

        .circle-action:hover {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .sub-nav .main-menu > li:hover > a {
            color: var(--main-text-color2);
        }

        .slick-active button {
            background-color: var(--main-text-color) !important;
        }

        .product:hover .product-title {
            color: var(--main-text-color);
        }

        .product-price:hover {
            color: var(--main-text-color);
        }

        .product-add:hover {
            background: var(--main-text-color);
        }

        .social__item a:hover {
            background: #fff;
            border-color: var(--main-text-color);
        }

        .footer-main {
            border-top-color: var(--main-color);
        }

        .feature-item__icon {
            border-color: var(--main-text-color);
        }

        .landing-page-feature-item__icon {
            color: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .checker span {
            border-color: var(--main-text-color) !important;
        }

        .btn-order-details {
            background: var(--main-text-color) !important;
        }

        .section-header .section--title {
            color: var(--main-text-color);
        }


        .footer-main .container::before {
            text-align: center !important;
            display: block;
            height: 70px !important;
            background-image: url({{asset('assets/images/'.$setting->logo)}});
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }

        .sub-nav-header::before {
            content: "";
            text-align: center !important;
            display: block;
            height: 50px !important;
            background-image: url({{asset('assets/images/'.$setting->logo)}});
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }
    </style>
    <link href="theme/assets.salla.cloud/css/intlTelInput0309.css?id=53d3f9e5ce3c027b0bddc8be6f8c1283" rel="stylesheet">
    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/theme_6/assets/css/theme-custom2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="css/mainStyleSheet.css">
    <script src="theme/cdn.polyfill.io/v3/polyfill.mina9ef.js?flags=gated&amp;features=Promise%2CObject.assign%2CObject.values%2CArray.prototype.find%2CArray.prototype.findIndex%2CArray.prototype.includes%2CString.prototype.includes%2CString.prototype.startsWith%2CString.prototype.endsWith%2Cdocument.getElementsByClassName%2CPromise.prototype.finally%2CString.prototype.includes%2CNumber.isNaN%2Ces6%2CEvent%2CCustomEvent" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://mulfetstr.com/","name":"\u0627\u0644\u0631\u0626\u064a\u0633\u064a\u0629","image":null}}]}</script>
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"&#x645;&#x624;&#x633;&#x633;&#x629; &#x62A;&#x632;&#x627;&#x64A;&#x62F; _ &#x645;&#x62A;&#x62C;&#x631; &#x645;&#x644;&#x641;&#x62A; &#x633;&#x62A;&#x648;&#x631;  : Mulfet Store ","url":"https://mulfetstr.com/","logo":"86f57512-d65f-496c-9b1b-a2501ec0ceec.png","address":{"@type":"PostalAddress","addressCountry":"السعودية","addressRegion":"الرياض"}}]}</script>
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","name":"&#x645;&#x624;&#x633;&#x633;&#x629; &#x62A;&#x632;&#x627;&#x64A;&#x62F; _ &#x645;&#x62A;&#x62C;&#x631; &#x645;&#x644;&#x641;&#x62A; &#x633;&#x62A;&#x648;&#x631;  : Mulfet Store ","url":"https://mulfetstr.com/","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","actionPlatform":"https://mulfetstr.com/\/search?q={query}","urlTemplate":"https://mulfetstr.com/\/search?q={query}"},"query-input":"required name=query","query":"required"}}]}</script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript">
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({"equalHeight":{"isEnabled":true,"max":null,"classType":"contain"},"page":{"fingerprint":"9686b9a9e03b99aa82f28ef898c7578cece3a380","pageName":"home","mobileApp":0,"referrer":"https://mulfetstr.com/","theme":"theme_6"},"store":{"store":"Mulfet Store ","app_key":"2d5c10d4a8f70ce9f26e9f5e40e33939b671dac8","site_id":53381,"facebook_pixel_id":null,"google_analytics_id":null,"snapchat_pixel_id":null},"customer":{"isGuest":true}});
    </script>
    
    
</head>
<body class="store-home salla-theme_6 color-mode-light font-dinnextltarabic-regular">
    
    
    <noscript>
        To get full functionality of this site you need to enable JavaScript. Here is how
        <a href="https://www.enable-javascript.com/" rel="nofollow noopener noreferrer" target="_blank">To enable JavaScript on webpage</a>.
    </noscript>
  <header class="site-header sticky">
        <div class="sub-header p-10 d-none d-lg-block">
            <div class="container">
                <div class="row header-wrapper">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6 text-left">
                        <div id="cl_switcher_wrapper">
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3 header-top">
            <div class="row header-wrapper">
                <div class="col-md-3 logo-wrapper d-flex d-lg-block">
                    <a href="#" class="sub-nav__menu ml-2">
                        <svg width="30px" height="30px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23 29c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3zm0 18c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3zm0 18c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3z"></path>
                        </svg>
                    </a>
                    <h1 class="logo">
                        <a href="/">
                            <img src="/Images/Original/86f57512-d65f-496c-9b1b-a2501ec0ceec.png" alt="مؤسسة تزايد _ متجر ملفت ستور  : Mulfet Store ">
                        </a>
                    </h1>
                </div>
                <div class="col-sm-12 col-md-6 d-lg-flex search-container">
                    <div class="search-wrapper">
                        <div id="search">
                            <form id="search_form" action="https://mulfetstr.com//search">
                                <div class="ui category search">
                                    <div class="ui icon input">
                                        <input id="searchbox" name="q" class="prompt form-control" type="text" placeholder="أدخل كلمة البحث" autocomplete="off">
                                        <i class="search icon"></i>
                                    </div>
                                    <div class="results"></div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center d-lg-block actions-container">
                    <a data-cart-small="" href="my_cart" class="ml-1 site-header__cart d-none d-lg-flex" rel="nofollow">
                        <div><span class="sicon-cart"></span></div>
                        <div>
                            <span><strong>سلة المشتريات</strong></span>
                            <span id="cart_badge" class="cart_badge" data-cart-badge="" style="float: right">
  @php 
                             $count = 0; 
                              $total = 0;
                              @endphp
                                  @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    
                                    @php 
                                    $count++;
                                    $total+= $details['price'] * $details['quantity']
                                    
                                    @endphp
                                 @endforeach
                                 {{$count}}

                                 @else
                                 
                                 {{$count}}
                                 
                                 @endif
                                 </span>
                            <span style="float: right">
                                &nbsp;منتج -&nbsp;
                            </span>
                            <span id="cart_badge_total_price" data-cart-total="" style="float: right">
                              {{$total}} &#x631;.&#x633;
                            </span>
                        </div>
                    </a>
                    <a data-cart-small="" href="my_cart" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
                        <span class="sicon-cart"></span>
                        <span class="badge cart_badge" data-cart-badge="">0</span>
                    </a>
                    <div class="d-lg-none" style="vertical-align: middle">
                        <div class="dropdown dropdown-store-header dropdown-store-header-left hidden-xs">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>    <div class="sub-nav">
        <div class="container-fluid sub-nav-content">
            <button class="sub-nav__close">
                <svg width="100pt" height="100pt" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <path d="m50 10c-22.109 0-40 17.883-40 40 0 22.109 17.891 40 40 40 22.117 0 40-17.891 40-40 0-22.121-17.879-40-40-40zm-15.25 23c0.074219-0.003906 0.14453-0.003906 0.21875 0 0.53906-0.003906 1.0586 0.20703 1.4375 0.59375l13.594 13.562 13.562-13.562c0.36328-0.37109 0.85547-0.58203 1.375-0.59375 0.82812-0.035156 1.5938 0.44922 1.918 1.2109 0.32812 0.76562 0.14844 1.6484-0.44922 2.2266l-13.594 13.594 13.594 13.562c0.37891 0.375 0.58984 0.88672 0.58984 1.4219 0 0.53125-0.21094 1.043-0.58984 1.4219-0.375 0.375-0.88672 0.58984-1.4219 0.58984s-1.043-0.21484-1.4219-0.58984l-13.562-13.594-13.594 13.594c-0.78516 0.78516-2.0586 0.78516-2.8438 0s-0.78516-2.0586 0-2.8438l13.562-13.562-13.562-13.594c-0.56641-0.54297-0.76562-1.3633-0.50781-2.1016 0.25391-0.73828 0.91797-1.2617 1.6953-1.3359z" fill-rule="evenodd"></path>
                </svg>
            </button>

            
<ul class="main-menu">
@foreach ($categories as $key => $pcategory)
        <li id="1" class="has-children">
            <a href="javascript:;">{{$pcategory->name}}</a>
             @if ($pcategory->subcategory->count() > 0)
            <ul>
                @foreach ($pcategory->subcategory as $scategory)
                    <li id="12">
                        <a href="/">{{$scategory->name}}</a>
                    </li>
                   
                   @endforeach 
            </ul>
            
             @endif
        </li>
 
 @endforeach
    <li class="sub-menu-header categories-holder">
        <span>
            <i class="sicon-tag"></i>
            فئات المنتجات
        </span>
        <ul class="store-categories">
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x644;&#x647;&#x648;&#x627;&#x62A;&#x641; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="12">
                                <a href="store/category/12.html">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="24">
                                <a href="store/category/24.html">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="50">
                                <a href="store/category/50.html">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="51">
                                <a href="store/category/51.html">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="52">
                                <a href="store/category/52.html">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                            </li>
                            <li id="53">
                                <a href="store/category/53.html">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                            </li>
                            <li id="57">
                                <a href="store/category/57.html">&#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="58">
                                <a href="store/category/58.html">&#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x631;&#x648; </a>
                            </li>
                            <li id="59">
                                <a href="store/category/59.html">&#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x628;&#x644;&#x633;</a>
                            </li>
                            <li id="60">
                                <a href="store/category/60.html">&#x627;&#x64A;&#x641;&#x648;&#x646; 15 &#x639;&#x627;&#x62F;&#x64A;</a>
                            </li>
                            <li id="61">
                                <a href="store/category/61.html">&#x633;&#x627;&#x645;&#x633;&#x648;&#x646;&#x62C; </a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="8">
                                <a href="store/category/8.html">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="6">
                                <a href="store/category/6.html">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="7">
                                <a href="store/category/7.html">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                            </li>
                            <li id="36">
                                <a href="store/category/36.html">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    <ul style="position:inherit">
                            <li id="1">
                                <a href="store/category/1.html">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                            </li>
                            <li id="2">
                                <a href="store/category/2.html">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                            </li>
                            <li id="3">
                                <a href="store/category/3.html">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                            </li>
                            <li id="4">
                                <a href="store/category/4.html">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                            </li>
                            <li id="5">
                                <a href="store/category/5.html">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="18">
                                <a href="store/category/18.html">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
                    <ul style="position:inherit">
                            <li id="27">
                                <a href="store/category/27.html">&#x671;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
                    <ul style="position:inherit">
                            <li id="28">
                                <a href="store/category/28.html">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
                    <ul style="position:inherit">
                            <li id="29">
                                <a href="store/category/29.html">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                            </li>
                            <li id="30">
                                <a href="store/category/30.html">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                            </li>
                            <li id="31">
                                <a href="store/category/31.html">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                            </li>
                            <li id="32">
                                <a href="store/category/32.html">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
                            </li>
                    </ul>
                </li>

        </ul>
    </li>


</ul>
        </div>
    </div>
 @include('front.includes.whatsapp')

    