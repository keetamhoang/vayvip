<header class="header">
    {{--<div class="container">--}}
        {{--<div class="up-nav">--}}
            {{--@yield('h1_seo')--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="top-nav  navbar m-b-0 b-0">
        <div class="container en {{ session()->get('web') == 'my' ? 'my' : (session()->get('web') == 'ph' ? 'ph' : (session()->get('web') == 'id' ? 'id' : '')) }}">
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
                        {{--<li class="hidden-xs">--}}
                            {{--<a href="{{ url('products') }}"><i class="ti-bag"></i> PRODUCTS</a>--}}
                        {{--</li>--}}
                        {{--<li class="hidden-xs">--}}
                            {{--<a href="{{ url('trends') }}"><i class="ti-stats-up"></i> TRENDS #</a>--}}
                        {{--</li>--}}
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
    {{--<div class="navbar-custom shadow">--}}
        {{--<div class="container">--}}
            {{--<div id="navigation">--}}
                {{--<!-- Navigation Menu-->--}}
                {{--<ul class="navigation-menu">--}}
                    {{--<li class=""> <a href="{{ url('#') }}" ><i class="i-electronics common-global-icons-sprite"></i> <span>  Electronics  </span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-fashion common-global-icons-sprite"></i> <span>   Fashion   </span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-sports-outdoor common-global-icons-sprite"></i> <span>  Sports & Outdoors </span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-home-living common-global-icons-sprite"></i> <span>  Home & Living</span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-kids-toys common-global-icons-sprite"></i> <span>  Kids & Toys </span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-health-beauty common-global-icons-sprite"></i> <span>  Automotive </span> </a> </li>--}}
                    {{--<li class=""> <a href="{{ url('#') }}"><i class="i-others common-global-icons-sprite icon"></i> <span>  See More </span> </a> </li>--}}
                {{--</ul>--}}
                {{--<!-- End navigation menu  -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</header>