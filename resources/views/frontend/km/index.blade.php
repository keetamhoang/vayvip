@extends('frontend')

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

        .home-2 .nav_area {
            background: #f1612f none repeat scroll 0 0;
        }

        .menu .current1 > a {
            background: #f58158 none repeat scroll 0 0 !important;
        }

        .menu .current > a, .menu ul li a:hover {
            background: #f58158 none repeat scroll 0 0;
        }

        .home-2 .nav_area.stick {
            background: #f1612f none repeat scroll 0 0;
        }
    </style>
@endsection

@section('pageId')
    <div
            class="fb-customerchat"
            page_id="584113478648609"
            ref="">
    </div>
@endsection

@section('content')
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '323042221521211',
                xfbml: true,
                version: 'v2.10'
            });
        };
    </script>
    <div class="home blog custom-header content-sidebar magazine-pro-blue primary-nav magazine-home js">
        <div class="site-container">
            <nav class="nav-primary" id="child-menu-km">
                <div class="wrap">
                    <ul id="menu-main-menu"
                        class="menu genesis-nav-menu menu-primary js-superfish responsive-menu sf-js-enabled sf-arrows"
                        style="touch-action: pan-y;">
                        <li id="menu-item-1536"
                            class="firstmenu1 menu-item menu-item-type-custom menu-item-object-custom  current_page_item menu-item-home menu-item-1536 {{ Request::is('khuyen-mai') ? 'current-menu-item' : '' }}">
                            <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" itemprop="url" title="Mã giảm giá HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m') }}→ Giảm 30% - 50% - Tìm là Có"><span itemprop="name">MÃ GIẢM GIÁ HOT</span></a>
                        </li>
                        <li id="menu-item-16456"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16456 {{ Request::is('khuyen-mai/top-san-pham-ban-chay-nhat') ? 'current-menu-item' : '' }}">
                            <a href="{{ url('ma-giam-gia/ma-giam-gia-online') }}" itemprop="url" title="Mã giảm giá, khuyến mãi HOT, kinh nghiệm mua hàng online"><span
                                        itemprop="name">MÃ GIẢM GIÁ THEO ĐƠN VỊ</span> <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li id="menu-item-10012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10012">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}" itemprop="url" title="Mã giảm giá Lazada, Voucher Lazada khuyến mãi HOT tháng {{ \Carbon\Carbon::now()->format('m/Y') }}"><span itemprop="name">Mã giảm giá Lazada</span></a>
                                </li>
                                <li id="menu-item-10013"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10013">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}" itemprop="url" title="Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Tiki khuyến mãi 200K"><span itemprop="name">Mã giảm giá Tiki</span></a>
                                </li>
                                <li id="menu-item-10014"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10014">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}" itemprop="url" title="Mã giảm giá Shopee, Voucher Shopee khuyến mãi tháng {{ \Carbon\Carbon::now()->format('m/Y') }}"><span
                                                itemprop="name">Mã giảm giá Shopee</span></a></li>
                                <li id="menu-item-10015"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10015">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}" itemprop="url" title="Xem mã khuyến mãi Grab hôm nay ngày {{ \Carbon\Carbon::now()->format('d/m/Y') }}"><span itemprop="name">Mã giảm giá Grab</span></a>
                                </li>
                                <li id="menu-item-10016"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10016">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}" itemprop="url" title="Mã giảm giá Yes24 tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Yes24 khuyến mãi mới nhất"><span itemprop="name">Mã giảm giá Yes24</span></a>
                                </li>
                                <li id="menu-item-10018"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10018">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}" itemprop="url" title="Mã giảm giá Adayroi mới, khuyến mãi Adayroi tháng {{ \Carbon\Carbon::now()->format('m/Y') }} - 100% còn dùng được"><span itemprop="name">Mã giảm giá Adayroi</span></a>
                                </li>
                                <li id="menu-item-10019"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10019">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}" itemprop="url" title="Mã giảm giá MyTour, tổng hợp coupon khuyến mãi MyTour.vn"><span itemprop="name">Mã giảm giá du lịch</span></a>
                                </li>
                                <li id="menu-item-10020"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10020">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}" itemprop="url" title="Mã giảm giá Lotte, Voucher Lotte.vn khuyến mãi tháng {{ \Carbon\Carbon::now()->format('m/Y') }}"><span
                                                itemprop="name">Mã giảm giá Lotte</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-16458"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16458 {{ Request::is('khuyen-mai/moi-nhat') ? 'current-menu-item' : '' }}">
                            <a href="{{ url('ma-giam-gia/danh-muc-san-pham-co-ma-giam-gia') }}" itemprop="url" title="Mã giảm giá theo danh mục - Cập nhật liên tục hàng ngày"><span
                                        itemprop="name">SẢN PHẨM GIẢM GIÁ</span> <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li id="menu-item-10021"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10021">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-san-pham-dien-tu-cong-nghe') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm điện tử công nghệ">
                                        <span itemprop="name">Giảm giá điện tử - công nghệ</span></a>
                                </li>
                                <li id="menu-item-10022"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10022">
                                    <a href="{{ url('ma-giam-gia/do-gia-dung-giam-gia') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm đồ gia dụng"><span itemprop="name">Đồ gia dụng giảm giá</span></a>
                                </li>
                                <li id="menu-item-10023"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10023">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-cho-me-va-be') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Mẹ và Bé"><span itemprop="name">Giảm giá cho mẹ và bé</span></a>
                                </li>
                                <li id="menu-item-10024"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10024">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-lam-dep') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm làm đẹp"><span
                                                itemprop="name">Giảm giá dịch vụ làm đẹp</span></a></li>
                                <li id="menu-item-10025"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10025">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich-2') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các dịch vụ du lịch"><span itemprop="name">Giảm giá du lịch</span></a>
                                </li>
                                <li id="menu-item-10026"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10026">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-thoi-trang') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm thời trang"><span itemprop="name">Giảm giá thời trang</span></a>
                                </li>
                                <li id="menu-item-10027"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10027">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-nha-cua-doi-song') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Nhà cửa & Đời sống"><span itemprop="name">Giảm giá nhà cửa đời sống</span></a>
                                </li>
                                <li id="menu-item-10028"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10028">
                                    <a href="{{ url('ma-giam-gia/dich-vu-giam-gia') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} theo các loại hình dịch vụ"><span itemprop="name">Dịch vụ giảm giá</span></a>
                                </li>
                                <li id="menu-item-10029"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10029">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-bach-hoa') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Bách hóa"><span itemprop="name">Giảm giá bách hóa</span></a>
                                </li>
                                <li id="menu-item-10030"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10030">
                                    <a href="{{ url('ma-giam-gia/sach-giam-gia') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các tựa sách và Văn phòng phẩm"><span
                                                itemprop="name">Sách giảm giá</span></a>
                                </li>
                                <li id="menu-item-10031"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10031">
                                    <a href="{{ url('ma-giam-gia/xe-may-giam-gia') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các dòng xe máy HOT"><span
                                                itemprop="name">Xe máy giảm giá</span></a>
                                </li>
                                <li id="menu-item-10032"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10032">
                                    <a href="{{ url('ma-giam-gia/ma-giam-gia-ngan-hang') }}" itemprop="url" title="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} khi thanh toán bằng thẻ ngân hàng"><span
                                                itemprop="name">Giảm giá qua ngân hàng</span></a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-16457"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16457 {{ Request::is('khuyen-mai/ma-giam-gia') ? 'current-menu-item' : '' }}">
                            <a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-cap-nhat') }}" itemprop="url"><span
                                        itemprop="name">NHẬN THÔNG TIN MÃ GIẢM GIÁ</span> <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li id="menu-item-10021"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10021">
                                    <a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-inbox') }}" itemprop="url" title="Đăng Ký Nhận Tin cập nhật về các mã giảm giá mới nhất thông qua inbox">
                                        <span itemprop="name">Nhận mã giảm giá qua inbox</span></a>
                                </li>
                                <li id="menu-item-10022"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10022">
                                    <a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-email') }}" itemprop="url" title="Đăng Ký Nhận Tin cập nhật về các mã giảm giá mới nhất thông qua Email"><span itemprop="name">Nhận mã giảm giá qua email</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('banner')

            <div class="site-inner">
                @yield('top_content')
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
        <footer class="site-footer" itemscope="">
            <div class="wrap"><p>© {{ \Carbon\Carbon::now()->year }} TaichinhSMART.vn</p></div>
        </footer>

        <span style="display:none" class="tl-placeholder-f-type-lightbox"></span>

        <a href="#" class="topbutton" style="display: inline;"></a>
        <div class="share-div">
            <a class="fb-share-btn" href="javascript:;" title="Chia sẻ">
                <img src="/assets/image/fb-share.png">
            </a>
            {{--<div>--}}
            {{--<img src="/assets/image/messender-share.png">--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.dotdotdot.js"></script>
    <script>
        function clickCoupon(link, couponId) {
            var copyText = $('.copy-' + couponId);
            copyText.select();
            document.execCommand("Copy");
            window.open(link, '_blank');
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

            $('.fb-share-btn').click(function (e) {
                FB.ui({
                    method: 'share',
                    href: '{{ Request::url() }}',
                }, function (response) {
                });
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

    <script>
        $(document).ready(function () {
            $('#load-more').click(function (e) {
                var count = $('.km-post').length;
                console.log(count);
                $.ajax({
                    url: '{{ url('ma-giam-gia/load-more') }}',
                    type: 'get',
                    dataType: 'html',
                    data: {
                        count: count,
                    },
                    success: function (response) {
                        $('#km-post').append(response);
                    }
                });
            })
        })
    </script>
@endsection