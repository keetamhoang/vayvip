<header class="header">
    <div class="top-nav  navbar m-b-0 b-0">
        <div class="container">
            <div class="row">
                <!-- LOGO -->
                <div class="topbar-left col-sm-2 col-xs-4">
                    <a href="{{ url('/') }}" class="logo"> <img src="/assets/image/logo.png" alt="" class="img-responsive"> </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras col-sm-9 col-xs-8">
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="hidden-xs">
                            <a href="{{ url('ma-giam-gia') }}">MÃ GIẢM GIÁ MỚI</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="{{ url('vay-von-tin-dung') }}">VAY VỐN TÍN DỤNG</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="{{ url('tin-tuc-tai-chinh') }}">TIN TỨC TÀI CHÍNH</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="{{ url('mua-sam-hom-nay') }}">MUA SẮM HÔM NAY</a>
                        </li>
                        @if (auth('admin')->check())
                            <li class="hidden-xs">
                                <a href="{{ url('admin') }}">ADMIN</a>
                            </li>
                        @endif
                        {{--<li>--}}
                            {{--<form role="search" class="app-search pull-left hidden-xs">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input class="form-control" placeholder="Search coupons ..." aria-label="Text input with multiple buttons">--}}
                                {{--</div>--}}
                                {{--<a href=""><i class="ti-search"></i></a>--}}
                            {{--</form>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown hidden-xs">--}}
                            {{--<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="ti-shopping-cart"></i> <span class="badge badge-xs badge-danger">3</span> </a>--}}
                            {{--<ul class="dropdown-menu dropdown-menu-lg">--}}
                                {{--<li class="notifi-title">My Coupons</li>--}}
                                {{--<li class="list-group">--}}
                                    {{--<!-- list item-->--}}
                                    {{--<a href="javascript:void(0);" class="list-group-item">--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>--}}
                                            {{--<div class="media-body clearfix">--}}
                                                {{--<div class="media-heading">Up to 30%</div>--}}
                                                {{--<p class="m-0"> <small>Shopname coupon</small> </p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<!-- list item-->--}}
                                    {{--<a href="javascript:void(0);" class="list-group-item">--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>--}}
                                            {{--<div class="media-body clearfix">--}}
                                                {{--<div class="media-heading">Up to 30%</div>--}}
                                                {{--<p class="m-0"> <small>Shopname coupon</small> </p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<!-- list item-->--}}
                                    {{--<a href="javascript:void(0);" class="list-group-item">--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>--}}
                                            {{--<div class="media-body clearfix">--}}
                                                {{--<div class="media-heading">Up to 30%</div>--}}
                                                {{--<p class="m-0"> <small>Shopname coupon</small> </p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<!-- last list item -->--}}
                                    {{--<a href="javascript:void(0);" class="list-group-item"> <small>Print all coupons</small> </a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown user-box">--}}
                            {{--<a href="" class="dropdown-toggle profile btn btn-default" data-toggle="dropdown" aria-expanded="true">--}}
                                {{--My account--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" style="margin-top:16px">--}}
                                {{--<li><a href="javascript:void(0)"> LogIn</a> </li>--}}
                                {{--<li><a href="javascript:void(0)">Registration</a> </li>--}}
                                {{--<li><a href="javascript:void(0)">Help Center </a> </li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
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
                    <li class="active"> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="ti-crown"></i> <span> Mã giảm giá HOT </span> </a> </li>
                    <li class="has-submenu">
                        <a href="#"><i class="ti-gift"></i> <span> Mã giảm giá theo đơn vị </span> </a>
                        <ul class="submenu">
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}">Mã giảm giá Lazada</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}">Mã giảm giá Tiki</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}">Mã giảm giá Shopee</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}">Mã giảm giá Grab</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}">Mã giảm giá Yes24</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}">Mã giảm giá Adayroi</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}">Mã giảm giá du lịch</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}">Mã giảm giá Lotte</a> </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="ti-tablet"></i> <span> Sản phẩm giảm giá </span> </a>
                        <ul class="submenu">
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-san-pham-dien-tu-cong-nghe') }}">Giảm giá điện tử - công nghệ</a> </li>
                            <li><a href="{{ url('ma-giam-gia/do-gia-dung-giam-gia') }}">Đồ gia dụng giảm giá</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-cho-me-va-be') }}">Giảm giá cho mẹ và bé</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-lam-dep') }}">Giảm giá dịch vụ làm đẹp</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich-2') }}">Giảm giá du lịch</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-thoi-trang') }}">Giảm giá thời trang</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-nha-cua-doi-song') }}">Giảm giá nhà cửa đời sống</a> </li>
                            <li><a href="{{ url('ma-giam-gia/dich-vu-giam-gia') }}">Dịch vụ giảm giá</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-bach-hoa') }}">Giảm giá bách hóa</a> </li>
                            <li><a href="{{ url('ma-giam-gia/sach-giam-gia') }}">Sách giảm giá</a> </li>
                            <li><a href="{{ url('ma-giam-gia/xe-may-giam-gia') }}">Xe máy giảm giá</a> </li>
                            <li><a href="{{ url('ma-giam-gia/ma-giam-gia-ngan-hang') }}">Giảm giá qua ngân hàng</a> </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="ti-comments-smiley"></i> <span> Nhận thông tin mã giảm giá </span> </a>
                        <ul class="submenu">
                            <li><a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-inbox') }}">Nhận mã giảm giá qua Inbox</a> </li>
                            <li><a href="{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-email') }}">Nhận mã giảm giá qua Email</a> </li>
                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>