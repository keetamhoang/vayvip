@extends('frontend.v2.layout')

@section('title')
    <title>Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="https://taichinhsmart.vn">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>

    <meta name="keywords"
          content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Tổng hợp mã giảm giá mới, khuyến mãi HOT trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
@endsection

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
            {{--<!-- Main component for a primary marketing message or call to action -->--}}
            {{--<div class="slide-wrap shadow">--}}
                {{--<div class="main-slider">--}}
                    {{--<a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="one"> <img src="/new/assets/images/ma-giam-gia-banner-2.png" alt="Mã giảm giá HOT nhất"> </a>--}}
                    {{--<a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="two"> <img src="/new/assets/images/ma-giam-gia-banner-1.png" alt="Mã giảm giá khuyến mại HOT nhất"> </a>--}}
                    {{--<a href="{{ url('vay-von/dang-ky') }}" class="item" data-hash="three"> <img src="/new/assets/images/vay-von-tin-dung-banner-2.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>--}}
                    {{--<a href="{{ url('tin-dung/dang-ky') }}" class="item" data-hash="four"> <img src="/new/assets/images/the-tin-dung-banner-1.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>--}}
                {{--</div>--}}
                {{--<!-- /.carosuel -->--}}
                {{--<div class="carousel-tabs clearfix">--}}
                    {{--<a class="col-sm-3 tab url" href="#three">--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-2-small.png" alt="Mã giảm giá HOT nhất"> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Mua sắm thả ga</h4>--}}
                                {{--<p>Tự tin không lo về giá ...</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a class="col-sm-3 tab url" href="#four">--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-1-small.png" alt="Mã giảm giá khuyến mại HOT nhất"> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Săn deal khủng</h4>--}}
                                {{--<p>Các mã giảm giá đến 50% ...</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a class="col-sm-3 tab url" href="#one">--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left media-middle"> <img src="/new/assets/images/vay-von-tin-dung-banner-2-small.png" alt=""> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Vay vốn tín dụng</h4>--}}
                                {{--<p>Vay tới 100 triệu đồng ...</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a class="col-sm-3 tab url" href="#two">--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left media-middle"> <img src="/new/assets/images/the-tin-dung-banner-1-small.png" alt="Đăng ký vay vốn tín dụng NHANH"> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Làm thẻ tín dụng</h4>--}}
                                {{--<p>Hoàn toàn miễn phí ...</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/slide wrap -->--}}
        {{--</div>--}}
        {{--<!-- /col 12 -->--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-lg-8">
            <div class="dp-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 dph-info">
                            <div class="col-md-2">
                                <img src="/assets/image/coupon-header.png" class="profile-img" alt="Exclusive Sales, Promotions & Vouchers in Singapore {{\Carbon\Carbon::now()->year}}">
                            </div>
                            <div class="col-md-10">
                                @if (session()->get('web') == 'my')
                                    <h1>Exclusive Sales, Promotions & Vouchers in Malaysia {{ \Carbon\Carbon::now()->year }}</h1>
                                    <p class="desc-p">Get the latest promo and discount codes from all online stores</p>
                                @elseif (session()->get('web') == 'ph')
                                    <h1>Exclusive Sales, Promotions & Vouchers in Philippines {{ \Carbon\Carbon::now()->year }}</h1>
                                    <p class="desc-p">Get all top coupon codes & offers</p>
                                @elseif (session()->get('web') == 'id')
                                        <h1>Exclusive Sales, Promotions & Vouchers in Indonesia {{ \Carbon\Carbon::now()->year }}</h1>
                                        <p class="desc-p">Get all top coupon codes & offers</p>
                                @endif
                                <div class="desc-div hidden-xs">
                                    <a href="javascript:;">Popular Online Stores</a> <a href="javascript:;">Exclusive Deals</a> <a href="javascript:;">{{ \Carbon\Carbon::now()->format('m/Y') }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @include('frontend.v2.en.coupon_home')
            <!-- end: Tab content -->
            <div class="clearfix"></div>
            <div class="widget">
                <div class="widget-body">
                    @if (session()->get('web') == 'my')
                        @php $desc = \App\Models\Partner::where('name', 'my.nowvoucher.com')->first(); @endphp

                        {!! $desc->desc_bot !!}
                    {{--@include('frontend.v2.en.coupon.about')--}}
                    @elseif (session()->get('web') == 'ph')
                        @php $desc = \App\Models\Partner::where('name', 'ph.nowvoucher.com')->first(); @endphp

                        {!! $desc->desc_bot !!}
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-4">
            @include('frontend.v2.en.coupon.sidebar')
        </div>
        <!-- end col -->
    </div>
    <!-- End row -->
@endsection

@section('script')

@endsection