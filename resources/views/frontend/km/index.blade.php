@extends('frontend')

@section('title')
    <title>Mã giảm giá, khuyến mãi, kinh nghiệm mua hàng | TaichinhSMART.vn</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/khuyen-mai">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Khuyến mãi tối ưu, tiêu dùng thông minh với TaichinhSMART.vn"/>
    <meta property="og:description"
          content="Cập nhật các thông tin Mã giảm giá, Khuyến mãi mới nhất. Ưu đãi mua sắm từ các sàn thương mại điện tử Lazada, Tiki, Adayroi, Lotte, Yes24, Robins. Các chương trình giảm giá dịch vụ du lịch, đặt phòng khách sạn Agoda, Booking.com, Mytour.vn"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.jpg"/>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css"
          href="/assets/km/css/1516957853index.css"
          media="all">

    <link rel="stylesheet" type="text/css"
          href="/css/style.css"
          media="all">

    <style>.rpwe-block ul {
            list-style: none !important;
            margin-left: 0 !important;
            padding-left: 0 !important;
        }

        .rpwe-block li {
            border-bottom: 1px solid #d6d4d4;
            margin-bottom: 10px;
            padding-bottom: 10px;
            list-style-type: none;
        }

        .rpwe-block a {
            display: block;
            text-decoration: none;
        }

        .rpwe-block h3 {
            background: none !important;
            clear: none;
            margin-bottom: 0 !important;
            margin-top: 0 !important;
            font-weight: 500;
            font-size: 15px !important;
            line-height: 1.4em;
            padding-bottom: 0px;
        }
        .rpwe-thumb {
            border: 1px solid #eee;
            box-shadow: none !important;
            margin: 2px 10px 2px 0;
            padding: 3px !important;
        }

        .rpwe-time {
            display: none;
        }

        .rpwe-alignleft {
            display: inline;
            float: left;
        }

        .rpwe-alignright {
            display: inline;
            float: right;
        }

        .rpwe-aligncenter {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .rpwe-clearfix:before,
        .rpwe-clearfix:after {
            content: "";
            display: table !important;
        }

        .rpwe-clearfix:after {
            clear: both;
        }

        .rpwe-clearfix {
            zoom: 1;
        }
    </style>
@endsection

@section('content')
    <div class="home blog custom-header content-sidebar magazine-pro-blue primary-nav magazine-home js">
        <div class="site-container">
            <nav class="nav-primary" id="child-menu-km">
                <div class="wrap">
                    <ul id="menu-main-menu"
                        class="menu genesis-nav-menu menu-primary js-superfish responsive-menu sf-js-enabled sf-arrows"
                        style="touch-action: pan-y;">
                        <li id="menu-item-1536"
                            class="firstmenu1 menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1536">
                            <a href="{{ url('khuyen-mai') }}" itemprop="url"><span itemprop="name">TẤT CẢ</span></a></li>
                        <li id="menu-item-16456"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16456"><a
                                    href="{{ url('khuyen-mai/moi-nhat') }}" itemprop="url"><span
                                        itemprop="name">KHUYẾN MẠI MỚI NHẤT</span></a></li>
                        <li id="menu-item-16457"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16457"><a
                                    href="{{ url('khuyen-mai/coupon') }}" itemprop="url"><span itemprop="name">MÃ GIẢM GIÁ</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <header class="site-header">
                <div class="wrap">
                    {{--<div class="title-area"><h1 class="site-title" itemprop="headline"><a href="https://www.offers.vn/">Mã giảm--}}
                    {{--giá, khuyến mãi, kinh nghiệm mua hàng</a></h1>--}}
                    {{--<p class="site-description" itemprop="description">Offers.vn</p></div>--}}
                    <div class="widget-area header-widget-area">
                        <section class="widget offer-widget">
                            <div class="widget-wrap"><a href="http://bit.ly/2FmB279" target="_blank" class="external"
                                                        rel="nofollow"><img
                                            src="/assets/km/image/adayroi_16.01.jpg"
                                            width="728" height="90" border="0"></a></div>
                        </section>
                    </div>
                </div>
            </header>
            <div class="site-inner">
                <div class="content-sidebar-wrap">
                    <main class="content">
                        <div class="home-bottom widget-area">
                            @yield('content_km')
                        </div>
                    </main>

                    @include('frontend.km.sidebar')
                </div>
            </div>
            <div class="footer-widgets">
                <div class="wrap">
                    <div class="widget-area footer-widgets-1 footer-widget-area">
                        <section id="text-56" class="widget widget_text">
                            <div class="widget-wrap">
                                <div class="textwidget"><img
                                            style="border: 0;padding-bottom: 10px;margin-top: -20px;"
                                            alt="Tài chính SMART: Mã giảm giá, Voucher giảm giá, Khuyến mãi"
                                            src="/assets/km/image/ngang-footer.png"
                                            width="180" height="57">
                                    <p style="font-size:15px;"><span>TaichinhSMART.vn</span>
                                        không cung cấp hàng hóa hay dịch vụ. Nhưng chúng tôi luôn tìm kiếm, nỗ
                                        lực mỗi ngày để mang đến cho bạn những chương trình mã giảm giá, khuyến
                                        mãi, kinh nghiệm mua sắm hữu ích nhất. Và phía sau mỗi khuyến mãi, ưu
                                        đãi được cập nhật là nhịp đập của một trái tim yêu thương!</p></div>
                            </div>
                        </section>
                    </div>
                    <div class="widget-area footer-widgets-2 footer-widget-area">
                        <section id="text-64" class="widget widget_text">
                            <div class="widget-wrap"><h4 class="widget-title widgettitle">Thông tin</h4>
                                <div class="textwidget">
                                    <div style="font-size:15px;"><a href="#" target="_blank"
                                                                    rel="nofollow">Giới thiệu</a><br> <a
                                                href="#" target="_blank" rel="nofollow">Hợp Tác</a><br>
                                        <a href="#" target="_blank" rel="nofollow">Bảo
                                            mật</a><br> <a href="#" target="_blank"
                                                           rel="nofollow">Điều khoản sử dụng</a><br>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="widget-area footer-widgets-3 footer-widget-area">
                        <section id="text-41" class="widget widget_text">
                            <div class="widget-wrap"><h4 class="widget-title widgettitle">Liên Hệ</h4>
                                <div class="textwidget">
                                    <div style="font-size: 15px;">Mọi vấn đề liên quan xin liên hệ tới địa chỉ Email:
                                        taichinhsmart.vn@gmail.com<br>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <footer class="site-footer" itemscope="" itemtype="https://schema.org/WPFooter">
            <div class="wrap"><p>© {{ \Carbon\Carbon::now()->year }} TaichinhSMART.vn</p></div>
        </footer>

    <span style="display:none" class="tl-placeholder-f-type-lightbox"></span>

    <a href="#" class="topbutton" style="display: inline;"></a>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.dotdotdot.js"></script>
    <script>
        function clickCoupon(link, couponId) {
            var copyText = $('.copy-' + couponId);
            copyText.select();
            document.execCommand("Copy");
            window.open(link,'_blank');
        }
        $(document).ready(function () {

            $('.entry-header p span').each(function (index) {
                if ($(this).height() > 90) {
                    $(this).dotdotdot({
                        height: 90
                    });
                }
            });

            $('.entry-header p span').each(function (index) {
                if ($(this).height() > 90) {
                    $(this).dotdotdot({
                        height: 90
                    });
                }
            });
        })
    </script>

    <script src="/assets/km/js/1516957833index.js"
            type="text/javascript"></script>
    <!--[if lt IE 9]>
    <![endif]-->
    <script src="/assets/km/js/1516957832index.js"
            type="text/javascript"></script>

    <script>jQuery(function () {
            var
                $offerslider869781291 = jQuery(".offer-slider-869781291");
            $offerslider869781291.on("unslider.ready",
                function () {
                    jQuery("div.custom-slider ul li").css("display", "block");
                });
            $offerslider869781291.unslider({
                delay: 25000, autoplay: true,
                nav: false, arrows: false
            });
            $offerslider869781291.on("mouseover",
                function () {
                    $offerslider869781291.unslider("stop");
                }).on("mouseout",
                function () {
                    $offerslider869781291.unslider("start");
                });
        });</script>
    <script>jQuery(function () {
            var
                $offerslider1277640232 = jQuery(".offer-slider-1277640232");
            $offerslider1277640232.on("unslider.ready",
                function () {
                    jQuery("div.custom-slider ul li").css("display", "block");
                });
            $offerslider1277640232.unslider({
                delay: 12000, autoplay: true,
                nav: false, arrows: false
            });
            $offerslider1277640232.on("mouseover",
                function () {
                    $offerslider1277640232.unslider("stop");
                }).on("mouseout",
                function () {
                    $offerslider1277640232.unslider("start");
                });
        });</script>
@endsection