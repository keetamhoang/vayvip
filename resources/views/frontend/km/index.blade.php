@extends('frontend')

@section('title')
    <title>Mã giảm giá, khuyến mãi, kinh nghiệm mua hàng | TaichinhSMART.vn</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/khuyen-mai">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Khuyến mãi tối ưu, tiêu dùng thông minh | TaichinhSMART.vn"/>
    <meta property="og:description"
          content="Cập nhật các thông tin Mã giảm giá, Khuyến mãi mới nhất. Ưu đãi mua sắm từ các sàn thương mại điện tử Lazada, Tiki, Adayroi, Lotte, Yes24, Robins. Các chương trình giảm giá dịch vụ du lịch, đặt phòng khách sạn Agoda, Booking.com, Mytour.vn"/>
    <meta property="og:image" content="http://taichinhsmart.vn"/>
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
        }</style>
@endsection

@section('content')
    <div class="home blog custom-header content-sidebar magazine-pro-blue primary-nav magazine-home js">
        <div class="site-container">
            <nav class="nav-primary">
                <div class="wrap">
                    <ul id="menu-main-menu"
                        class="menu genesis-nav-menu menu-primary js-superfish responsive-menu sf-js-enabled sf-arrows"
                        style="touch-action: pan-y;">
                        <li id="menu-item-1536"
                            class="firstmenu1 menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1536">
                            <a href="https://www.offers.vn/" itemprop="url"><span itemprop="name">HOME</span></a></li>
                        <li id="menu-item-10011"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10011">
                            <a href="#" itemprop="url" class="sf-with-ul"><span itemprop="name">DANH MỤC</span></a>
                            <ul class="sub-menu" style="display: none;">
                                <li id="menu-item-10012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10012">
                                    <a
                                            href="https://www.offers.vn/am-thuc/" itemprop="url"><span
                                                itemprop="name">Ẩm thực</span></a></li>
                                <li id="menu-item-10013"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10013">
                                    <a
                                            href="https://www.offers.vn/cong-nghe/" itemprop="url"><span
                                                itemprop="name">Công nghệ</span></a></li>
                                <li id="menu-item-10014"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10014">
                                    <a
                                            href="https://www.offers.vn/dich-vu-online/" itemprop="url"><span
                                                itemprop="name">Dịch vụ IT</span></a>
                                </li>
                                <li id="menu-item-10015"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10015">
                                    <a
                                            href="https://www.offers.vn/du-lich/" itemprop="url"><span
                                                itemprop="name">Du lịch</span></a></li>
                                <li id="menu-item-10016"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10016">
                                    <a
                                            href="https://www.offers.vn/gia-dung/" itemprop="url"><span
                                                itemprop="name">Gia dụng</span></a></li>
                                <li id="menu-item-10017"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10017">
                                    <a
                                            href="https://www.offers.vn/giai-tri/" itemprop="url"><span
                                                itemprop="name">Giải trí</span></a></li>
                                <li id="menu-item-10018"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10018">
                                    <a
                                            href="https://www.offers.vn/hoc-tap/" itemprop="url"><span
                                                itemprop="name">Giáo dục</span></a></li>
                                <li id="menu-item-10019"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10019">
                                    <a
                                            href="https://www.offers.vn/lam-dep/" itemprop="url"><span
                                                itemprop="name">Làm đẹp</span></a></li>
                                <li id="menu-item-10020"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10020">
                                    <a
                                            href="https://www.offers.vn/me-be/" itemprop="url"><span itemprop="name">Mẹ và Bé</span></a>
                                </li>
                                <li id="menu-item-10021"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10021">
                                    <a
                                            href="https://www.offers.vn/noi-that/" itemprop="url"><span
                                                itemprop="name">Nội thất</span></a></li>
                                <li id="menu-item-10022"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10022">
                                    <a
                                            href="https://www.offers.vn/suc-khoe/" itemprop="url"><span
                                                itemprop="name">Sức khỏe</span></a></li>
                                <li id="menu-item-10023"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10023">
                                    <a
                                            href="https://www.offers.vn/thoi-trang/" itemprop="url"><span
                                                itemprop="name">Thời trang</span></a></li>
                                <li id="menu-item-10024"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10024">
                                    <a
                                            href="https://www.offers.vn/bank/" itemprop="url"><span
                                                itemprop="name">Ưu đãi ngân hàng</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-16456"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16456"><a
                                    href="https://www.offers.vn/ma-giam-gia/" itemprop="url"><span
                                        itemprop="name">MÃ GIẢM GIÁ</span></a></li>
                        <li id="menu-item-16457"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16457"><a
                                    href="https://www.offers.vn/khuyen-mai/" itemprop="url"><span itemprop="name">KHUYẾN MÃI</span></a>
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
                            <section id="featured-post-2" class="widget featured-content featuredpost">
                                <div class="widget-wrap">
                                    <h4 class="widget-title widgettitle">ĐỐI TÁC CỦA TÀI CHÍNH SMART</h4>
                                    {{--<article--}}
                                            {{--class="post-5793 post type-post status-publish format-standard has-post-thumbnail category-lazada category-ma-giam-gia tag-khac entry">--}}
                                        {{--<a href="https://www.offers.vn/ma-giam-gia-lazada/" class="alignleft"--}}
                                           {{--aria-hidden="true"><img--}}
                                                    {{--src="/assets/km/image/lazada-240x135.png"--}}
                                                    {{--class="entry-image attachment-post"--}}
                                                    {{--alt="Mã Giảm Giá Lazada Khuyến Mãi Flash Sale Tháng 1/2018"--}}
                                                    {{--itemprop="image"--}}
                                                    {{--width="240" height="135"></a>--}}
                                        {{--<header class="entry-header"><h2 class="entry-title" itemprop="headline"><a--}}
                                                        {{--href="https://www.offers.vn/ma-giam-gia-lazada/">Mã Giảm Giá--}}
                                                    {{--Lazada Khuyến Mãi--}}
                                                    {{--Flash Sale Tháng 1/2018</a></h2></header>--}}
                                    {{--</article>--}}
                                    {{--<p class="more-from-category"><a href="https://www.offers.vn/ma-giam-gia/"--}}
                                                                     {{--title="Mã giảm giá, Voucher, Khuyến mãi mua sắm">Xem--}}
                                            {{--thêm...</a></p>--}}
                                    <div>
                                        <img src="/assets/km/image/logo-partner.png">
                                    </div>
                                </div>
                            </section>

                            {{--<section id="featured-post-3" class="widget featured-content featuredpost">--}}
                                {{--<div class="widget-wrap"><h4 class="widget-title widgettitle">KHUYẾN MẠI HOT</h4>--}}
                                    {{--@php $hostests = \App\Models\Discount::orderBy('start_time', 'desc')->limit(6)->get() @endphp--}}

                                    {{--@foreach($newests as $newest)--}}
                                        {{--<article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">--}}
                                            {{--<div class="post-list alignleft">--}}
                                                {{--<a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"--}}
                                                   {{--style="background: url('{{ $newest->image }}') no-repeat center;">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<header class="entry-header">--}}
                                                {{--<h2 class="entry-title" itemprop="headline"><a target="_blank"--}}
                                                                                               {{--href="{{  $newest->aff_link }}">{{ $newest->name }}</a></h2>--}}
                                                {{--<p>{{ $newest->content }}</p>--}}
                                            {{--</header>--}}
                                        {{--</article>--}}
                                    {{--@endforeach--}}

                                    {{--<p class="more-from-category"><a href="https://www.offers.vn/khuyen-mai/"--}}
                                                                     {{--title="Khuyến mại">Xem thêm...</a></p></div>--}}
                            {{--</section>--}}

                            <section id="featured-post-3" class="widget featured-content featuredpost">
                                <div class="widget-wrap"><h4 class="widget-title widgettitle">KHUYẾN MẠI MỚI NHẤT</h4>
                                    @php $newests = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

                                    @foreach($newests as $newest)
                                        <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                                            <div class="post-list alignleft">
                                                <a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"
                                                   style="background: url('{{ $newest->image }}') no-repeat center;">
                                                </a>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title" itemprop="headline">
                                                    <a target="_blank" href="{{  $newest->aff_link }}">{{ $newest->name }}</a>
                                                </h2>
                                                <a target="_blank" href="{{  $newest->aff_link }}"><p><i class="fa fa-forward"></i> {{ $newest->content }}</p></a>
                                            </header>
                                        </article>
                                    @endforeach

                                    <p class="more-from-category"><a href="https://www.offers.vn/khuyen-mai/"
                                                                     title="Khuyến mại">Xem thêm...</a></p></div>
                            </section>
                            <section id="featured-post-4" class="widget featured-content featuredpost">
                                <div class="widget-wrap"><h4 class="widget-title widgettitle">KHUYẾN MẠI KÈM MÃ GIẢM GIÁ</h4>
                                    @php $newests = \App\Models\Discount::where('is_coupon', 1)->where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

                                    @foreach($newests as $newest)
                                        <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                                            <div class="post-list alignleft">
                                                <a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"
                                                   style="background: url('{{ $newest->image }}') no-repeat center;">
                                                </a>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title" itemprop="headline">
                                                    <a target="_blank" href="{{  $newest->aff_link }}">{{ $newest->name }}</a>
                                                </h2>
                                                <a target="_blank" href="{{  $newest->aff_link }}"><p><i class="fa fa-forward"></i> {{ $newest->content }}</p></a>
                                            </header>
                                        </article>
                                    @endforeach
                                    <p class="more-from-category"><a href="https://www.offers.vn/kinh-nghiem/"
                                                                     title="Kinh Nghiệm">Xem thêm...</a></p></div>
                            </section>
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
    </div>
    <span style="display:none" class="tl-placeholder-f-type-lightbox"></span>

    <a href="#" class="topbutton" style="display: inline;"></a>
    </div>
@endsection

@section('scripts')
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