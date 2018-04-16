@extends('frontend.km.index')

@section('title')
    <title>Mã giảm giá MyTour, tổng hợp coupon khuyến mãi MyTour.vn</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-du-lich">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá MyTour, tổng hợp coupon khuyến mãi MyTour.vn"/>
    <meta property="og:description"
          content="Chuyên mục cập nhật mã giảm giá Mytour, cập nhật thường xuyên các coupon khuyến mại Mytour khi đặt phòng - đặt tour du lịch online tại Mytour.vn. Voucher Mytour giảm giá không thường xuyên được tung ra, chỉ khi tới mùa du lịch mới có nhiều. Vậy nên nếu bạn hay đi du lịch và thích đặt phòng tại Mytour, hãy đăng ký"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Chuyên mục cập nhật mã giảm giá Mytour, cập nhật thường xuyên các coupon khuyến mại Mytour khi đặt phòng - đặt tour du lịch online tại Mytour.vn. Voucher Mytour giảm giá không thường xuyên được tung ra, chỉ khi tới mùa du lịch mới có nhiều. Vậy nên nếu bạn hay đi du lịch và thích đặt phòng tại Mytour, hãy đăng ký"/>

    <meta name="keywords" content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Mã giảm giá Mytour tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, khuyến mãi đặt phòng khách sạn Mytour.vn</h1>
@endsection

@section('content_km')
    {{--<section id="featured-post-2" class="widget featured-content featuredpost">--}}
    {{--<div class="widget-wrap">--}}
    {{--<h4 class="widget-title widgettitle">ĐỐI TÁC CỦA TÀI CHÍNH SMART</h4>--}}
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
    {{--<div>--}}
    {{--<img src="/assets/km/image/logo-partner.png">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}


@endsection