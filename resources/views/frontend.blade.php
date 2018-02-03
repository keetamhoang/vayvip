<!DOCTYPE html>

<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"
      lang="" style="">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64597649-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-64597649-5');
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <meta name="keywords" content="vay tin chap, vay tieu dung, vay tien nhanh, vay khong the chap, vay vip">
    <meta property="fb:app_id" content="114309889249840">

    @yield('meta')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- google font  -->
    <link href="/assets/css_new/css" rel="stylesheet" type="text/css">
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="https://vaytinchap.vpbank.com.vn/LOSWebDE/langding/img/favicon.ico"
          type="image/x-icon">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/bootstrap.min.css">

    <!-- Add venobox -->
    <link rel="stylesheet" href="/assets/css_new/venobox.css" type="text/css" media="screen">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/owl.carousel.css">

    <!-- owl.theme CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/owl.theme.css">

    <!-- owl.transitions CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/owl.transitions.css">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="/assets/css_new/nivo-slider.css">
    <!-- font-awesome.min CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/font-awesome.min.css">

    <!-- animate CSS
   ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/animate.css">

    <!-- normalize CSS
   ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/normalize.css">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/main.css">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/bootstrap-slider.min.css">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/style.css">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="/assets/css_new/responsive.css">
    <link rel="stylesheet" href="/assets/css_new/custom-vayvip.css">
    <!--<script src="js/main.js"></script>-->

    <link rel="stylesheet" href="/form/style.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/css/popup.css">

    <!--  <script src="/assets/js/4052764.js" type="text/javascript" id="hs-analytics"></script><script src="/assets/js/collectedforms.js" type="text/javascript" id="CollectedForms-4052764" crossorigin="anonymous" data-leadin-portal-id="4052764" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4052764" data-hsjs-env="prod"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="/assets/js/conversion_async.js"></script><script type="text/javascript" async="" src="/assets/js/conversion_async.js"></script><script type="text/javascript" async="" src="/assets/js/conversion_async.js"></script><script type="text/javascript" async="" src="/assets/js/analytics.js"></script><script async="" src="/assets/js/gtm.js"></script><script src="/assets/js/modernizr-2.8.3.min.js"></script> -->

    @yield('styles')
</head>
<body class="home-2">



<script>
    window.fbMessengerPlugins = window.fbMessengerPlugins || {
            init: function () {
                FB.init({
                    appId            : '1678638095724206',
                    autoLogAppEvents : true,
                    xfbml            : true,
                    version          : 'v2.10'
                });
            }, callable: []
        };
    window.fbAsyncInit = window.fbAsyncInit || function () {
            window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
            window.fbMessengerPlugins.init();
        };
    setTimeout(function () {
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) { return; }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }, 0);
</script>

@yield('pageId')

<!--Start nav  area -->
<div class="nav_area" id="sticker" >
    <div class="container">
        <div class="row">
            <!--logo area-->
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="logo">
                    <a href="{{ url('/') }}"><img
                                src="/assets/image/logo.png" alt="Tài chính thông minh - Tài chính Smart">
                        <h1>
                            Tài chính thông minh - Tài chính Smart
                        </h1>
                    </a>
                </div>

            </div>
            <!--end logo area-->
            <!--nav area-->
            <div class="col-md-10 col-sm-10 col-xs-6">
                <div class="menu">
                    <ul class="navid">
                        {{--<li class="current">--}}
                            {{--<a href="{{ url('/') }}#vay-tin-chap">Vay--}}
                                {{--nhanh</a></li>--}}
                        {{--<li ><a--}}
                                    {{--href="{{ url('/') }}#khoan-vay">Tính--}}
                                {{--khoản vay</a></li>--}}
                        {{--<li class=""><a--}}
                                    {{--href="{{ url('/') }}#cac-goi-vay">Các--}}
                                {{--gói vay tiêu dùng</a></li>--}}
                        {{--<li class=""><a--}}
                                    {{--href="{{ url('/') }}#hoi-dap">Hỏi--}}
                                {{--đáp</a></li>--}}
                        {{--<li class=""><a--}}
                                    {{--href="{{ url('/') }}#vi-sao-chon-vpbank">Vì--}}
                                {{--sao chọn VPBank</a></li>--}}
                        {{--<li class="vay-ngay"><a--}}
                                    {{--href="{{ url('/') }}#vay-ngay"><img--}}
                                        {{--src="/assets/image/vayvip-btn.png"></a></li>--}}
                        <li ><a href="{{ url('khuyen-mai') }}">Khuyến mãi tối ưu</a></li>
                        <li >
                            <a href="{{ url('vay-von-tin-dung') }}">Vay vốn tín dụng</a></li>
                        <li class=""><a
                                    href="{{ url('san-pham') }}">Sản phẩm thông minh</a></li>
                        {{--<li class=""><a--}}
                                    {{--href="{{ url('dau-tu') }}">Đầu tư hiệu quả</a></li>--}}
                        <li class=""><a
                                    href="{{ url('tin-tuc') }}">Tin tức Tài chính Smart</a></li>

                    </ul>
                </div>
            </div>
            <!--moblie menu area-->
            <div class="dropdown mabile_menu">
                <a data-toggle="dropdown" class="mobile-menu"
                   href="#" ><span>  </span><i
                            class="fa fa-bars" style="font-size: 25px"></i></a>
                <ul class="dropdown-menu mobile_menus drop_mobile navid">
                    <li>
                        <a href="{{ url('/') }}">Trang chủ</a></li>
                    <li ><a
                                href="{{ url('khuyen-mai') }}">Khuyến mãi tối ưu</a></li>
                    <li >
                        <a href="{{ url('vay-von-tin-dung') }}">Vay vốn tín dụng</a></li>
                    <li class=""><a
                                href="{{ url('san-pham') }}">Sản phẩm thông minh</a></li>
                    {{--<li class=""><a--}}
                                {{--href="{{ url('dau-tu') }}">Đầu tư hiệu quả</a></li>--}}
                    <li class=""><a
                                href="{{ url('tin-tuc') }}">Tin tức Tài chính Smart</a></li>
                </ul>
            </div>
            <!--end nav area-->
        </div>
    </div>
</div>

{{--<div style="margin-top: 390px">--}}
    {{--<a  href=".dang-ky-modal" data-toggle="modal">Click</a>--}}
{{--</div>--}}

<div class="modal fade info-modal" style="z-index: 1071;margin-top: 100px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="" style="position: relative">
                <div style="position:absolute;top: 0px;left: 0px">
                    <img src="/assets/image/popup.jpg">
                </div>
                <div class="body-modal-dk" style="">
                    {{--<div >--}}
                        {{--<img style="width: 100%" src="https://static.accesstrade.vn/publisher/www/files/img_promo/offer/img/tikivn/tiki_29.01_3.jpg">--}}
                    {{--</div>--}}
                    <div class="div-content" >
                        <h1 style="">ĐĂNG KÝ ĐỂ NHẬN VOUCHER MIỄN PHÍ T﻿﻿﻿ỐT NHẤT MỖI TUẦN</h1>
                        <hr style="border-top: 1px solid #fff;">
                        <div>
                            <form id="popup-form">
                                <input value="" name="email" style="" placeholder="Email của bạn" id="email-dk" type="email" required>
                                <div class="div-form">
                                    <button type="submit" style="" id="dk-submit">Đăng ký</button>
                                </div>
                                <p id="dismiss-p">Để sau</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="modal-header" style="padding-bottom: 5px;">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}

            {{--</div>--}}
            {{--<div class="modal-footer">--}}

            {{--</div>--}}
        </div>
    </div>
</div>
<!--end header  area -->

@yield('content')

<!-- JS -->
<!-- jquery-1.11.3.min js
============================================ -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap js
============================================ -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel.min js
============================================ -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- bootstrap-slider.min js
============================================ -->
<script src="/assets/js/bootstrap-slider.min.js"></script>

<!-- plugins js
============================================ -->
<!-- counterup js
============================================ -->
<!-- MixItUp js-->
<script src="/assets/js/jquery.mixitup.js"></script>
<!-- Nivo Slider JS -->
<script src="/assets/js/jquery.nivo.slider.pack.js"></script>
<script src="/assets/js/jquery.nav.js"></script>
<!-- wow js
============================================ -->
<script src="/assets/js/wow.js"></script>
<script src="/js/jquery.cookie.js"></script>
<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->
<!-- Add venobox ja -->
<script type="text/javascript" src="/assets/js/venobox.min.js"></script>


<!-- main js
============================================ -->
<script src="/assets/js/main.js"></script>

@yield('scripts')

<script>

    $(document).ready(function () {
        var path = window.location.pathname;

        $('.menu .navid li a').each(function (index) {
            var menu = $(this).attr('href');

            if (menu.search(path) > -1 && path != '/') {
                $(this).parent().addClass('current1');
            }
        });

        console.log($.cookie('popupShow'));
        if ($.cookie('popupShow') == undefined) {
            setTimeout(showPopup, 10000);

            function showPopup() {
                $('.info-modal').modal('show');
            }
        }

        $('#popup-form').submit(function (e) {
            e.preventDefault();

            var email = $('#email-dk').val();

            $.ajax({
                type: 'post',
                data: {email: email},
                url: '{{ url('dang-ky/popup/voucher') }}',
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        $.cookie('popupShow', 'true', { expires: 1 });
                        alert(response.message);
                        $('.info-modal').modal('hide');
                    } else {
                        alert(response.message);
//                        $('.info-modal').modal('hide');
                    }
                }
            });
        });
        
        $('#dismiss-p').click(function () {
            $.cookie('popupShow', 'true', { expires: 1 });
            $('.info-modal').modal('hide');
        })
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>

<script>
    $(document).ready('')
</script>
</html>