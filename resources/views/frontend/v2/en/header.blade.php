<header class="header">
    {{--<div class="container">--}}
        {{--<div class="up-nav">--}}
            {{--@yield('h1_seo')--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="top-nav  navbar m-b-0 b-0">
        <div class="container en">
            <div class="row">
                <!-- LOGO -->
                <div class="topbar-left col-lg-3 col-xs-7 col-sm-3">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="/assets/image/nowvoucher-logo.png" alt="Mã giảm giá Lazada Tiki Adayroi Lotte Grab - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ" class="img-responsive">
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras col-lg-9 col-xs-5 col-sm-9">
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="hidden-xs">
                            <a href="{{ url('coupons') }}"><i class="ti-gift"></i> COUPONS %</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="{{ url('products') }}"><i class="ti-bag"></i> PRODUCTS</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="{{ url('trends') }}"><i class="ti-stats-up"></i> TRENDS #</a>
                        </li>
                        @if (auth('admin')->check())
                            <li class="hidden-xs">
                                <a href="{{ url('admin') }}">ADMIN</a>
                            </li>
                        @endif
                    </ul>
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines"> <span></span> <span></span> <span></span> </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-custom shadow">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" ><i class="i-electronics common-global-icons-sprite"></i> <span>  Electronics  </span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-fashion common-global-icons-sprite"></i> <span>   Fashion   </span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-sports-outdoor common-global-icons-sprite"></i> <span>  Sports & Outdoors </span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-home-living common-global-icons-sprite"></i> <span>  Home & Living</span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-kids-toys common-global-icons-sprite"></i> <span>  Kids & Toys </span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-health-beauty common-global-icons-sprite"></i> <span>  Automotive </span> </a> </li>
                    <li class=""> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="i-others common-global-icons-sprite icon"></i> <span>  See More </span> </a> </li>
                    {{--<li class="has-submenu">--}}
                        {{--<a href="#"><i class="ti-gift"></i> <span> Mã giảm giá theo đơn vị </span> </a>--}}
                        {{--<ul class="submenu">--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}">Mã giảm giá Lazada</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}">Mã giảm giá Tiki</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}">Mã giảm giá Shopee</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}">Mã giảm giá Grab</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}">Mã giảm giá Yes24</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}">Mã giảm giá Adayroi</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}">Mã giảm giá du lịch</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}">Mã giảm giá Lotte</a> </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-submenu">--}}
                        {{--<a href="#"><i class="ti-tablet"></i> <span> Sản phẩm giảm giá </span> </a>--}}
                        {{--<ul class="submenu">--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-san-pham-dien-tu-cong-nghe') }}">Giảm giá điện tử - công nghệ</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/do-gia-dung-giam-gia') }}">Đồ gia dụng giảm giá</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-cho-me-va-be') }}">Giảm giá cho mẹ và bé</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-lam-dep') }}">Giảm giá dịch vụ làm đẹp</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich-2') }}">Giảm giá du lịch</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-thoi-trang') }}">Giảm giá thời trang</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-nha-cua-doi-song') }}">Giảm giá nhà cửa đời sống</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/dich-vu-giam-gia') }}">Dịch vụ giảm giá</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-bach-hoa') }}">Giảm giá bách hóa</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/sach-giam-gia') }}">Sách giảm giá</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/xe-may-giam-gia') }}">Xe máy giảm giá</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/ma-giam-gia-ngan-hang') }}">Giảm giá qua ngân hàng</a> </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-submenu">--}}
                        {{--<a href="#"><i class="ti-comments-smiley"></i> <span> Nhận thông tin mã giảm giá </span> </a>--}}
                        {{--<ul class="submenu">--}}
                            {{--<li><a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-inbox') }}">Nhận mã giảm giá qua Inbox</a> </li>--}}
                            {{--<li><a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-email') }}">Nhận mã giảm giá qua Email</a> </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>