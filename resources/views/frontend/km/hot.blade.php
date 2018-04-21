@extends('frontend.km.index')

@section('title')
    <title>Mã giảm giá HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m') }} → Giảm 30% - 50% - Tìm là Có</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-hot">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m') }} → Giảm 30% - 50% - Tìm là Có"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta name="keywords" content=""/>

    <link href="/assets/css_new/hot_blog.css" rel="stylesheet" type="text/css">
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Cập nhật mã giảm giá 100k - 200k - 500k, mã giảm giá 20% - 50%  trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
@endsection

@section('top_content')
    <section class="custom-page-header single-store-header">
        <div class="">
            <div class="inner effect2">
                <div class="inner-content clearfix">
                    <div class="header-thumb">
                        <div class="header-store-thumb">
                            <a rel="nofollow" target="_blank" title="Tổng hợp mã khuyến mãi - mã giảm giá siêu hot trong tháng" href="#">
                                <img width="200" height="105" src="/assets/image/khuyenmai.png" class="attachment-wpcoupon_small_thumb size-wpcoupon_small_thumb" alt="" >
                            </a>
                        </div>

                        <div class="kk-star-ratings  bottom-left lft" data-id="999999">
                            <div class="kksr-stars kksr-star gray">
                                <div class="kksr-fuel kksr-star yellow" style="width: 110px;"></div>
                                <!-- kksr-fuel --><a href="#1" class="" style="display: block;"></a><a href="#2" class="" style="display: block;"></a><a href="#3" class="" style="display: block;"></a><a href="#4"></a><a href="#5"></a>
                            </div>
                            <!-- kksr-stars -->
                            <div class="kksr-legend"><div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">    <div itemprop="name" class="kksr-title"></div><span itemprop="ratingValue">4.6</span> sao / <span itemprop="ratingCount">1185</span> votes    <meta itemprop="bestRating" content="5">    <meta itemprop="worstRating" content="1">    <div itemprop="itemReviewed" itemscope="" itemtype="http://schema.org/CreativeWork">    <!-- Product properties -->    </div></div></div>
                            <!-- kksr-legend -->
                        </div>
                        <!-- kk-star-ratings -->

                    </div>
                    <div class="header-content">

                        <h2>Tổng hợp mã khuyến mãi - mã giảm giá siêu hot trong tháng {{ \Carbon\Carbon::now()->month }} năm {{ \Carbon\Carbon::now()->year }}</h2>
                        <p>
                            Chia sẻ <strong>mã giảm giá</strong> hoàn toàn miễn phí của Lazada, voucher Lazada, mã giảm giá Tiki,  ma giam gia Shopee, mã khuyến mãi Grab, ma giam gia Adayroi, Lotte, <strong>mã giảm giá</strong> cho những bạn hay đi du lịch để chuyến đi thêm trọn vẹn...<br>
                            Những <strong>mã giảm giá</strong> được cập nhật hàng ngày, hàng giờ với các giá trị khuyến mãi không giới hạn từ 50k, 100k, 500k… có nhiều voucher giảm cực tốt lên đến 20%, 50% cho các đơn hàng. Hãy trở thành người tiêu dùng thông thái, tiết kiệm được nhiều khoản tiền với các <strong>MÃ GIẢM GIÁ HOT</strong>.
                        </p>
                        <div class="entry-share">
                            <div class="skin skin_flat">
                                <div class="social-likes social-likes_single social-likes_visible">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
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

    <section id="featured-post-2" class="widget featured-content featuredpost">
        <div class="widget-wrap">
            <article
                    class="post-2342 post type-post status-publish format-standard has-post-thumbnail category-ma-giam-gia category-tiki entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}" class="alignleft" aria-hidden="true">
                    <img width="240"
                         height="135"
                         src="/assets/image/Tiki-240x135.png"
                         class="entry-image attachment-post"
                         alt="Mã Giảm Giá Tiki Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                         itemprop="image"></a>
                <header class="entry-header">
                    <h2 class="entry-title" itemprop="headline">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}">Mã Giảm Giá Tiki Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a>
                    </h2>
                </header>
            </article>
            <article
                    class="post-4580 post type-post status-publish format-standard has-post-thumbnail category-adayroi category-ma-giam-gia tag-khac entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/Adayroi-240x135.png"
                            class="entry-image attachment-post"
                            alt="Mã Giảm Giá Adayroi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}">Mã Giảm Giá Adayroi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>
            <article
                    class="post-8859 post type-post status-publish format-standard has-post-thumbnail category-gia-dung category-lam-dep category-ma-giam-gia category-thoi-trang tag-khac entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/Shopee-Store-240x135.png"
                            class="entry-image attachment-post"
                            alt="Mã Giảm Giá Shopee Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}">Mã Giảm Giá Shopee Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>
            <article
                    class="post-17312 post type-post status-publish format-standard has-post-thumbnail category-hoc-tap category-ma-giam-gia category-top-deals entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/lazada-240x135.png"
                            class="entry-image attachment-post" alt="Mã Giảm Giá Lazada Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                            itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}">Mã Giảm Giá Lazada Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>
            <article
                    class="post-2255 post type-post status-publish format-standard has-post-thumbnail category-doi-song category-ma-giam-gia tag-khac entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/ma-khuyen-mai-grab-taxi-240x135.png"
                            class="entry-image attachment-post"
                            alt="Mã Giảm Giá Grab, Mã GrabBike, Mã Grab Taxi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}">Mã Giảm Giá Grab, Mã GrabBike, Mã Grab Taxi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>
            <article
                    class="post-6520 post type-post status-publish format-standard has-post-thumbnail category-ma-giam-gia entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}" class="alignleft" aria-hidden="true"><img width="240"
                                                                                                             height="135"
                                                                                                             src="/assets/image/Yes24-Vietnam-240x135.png"
                                                                                                             class="entry-image attachment-post"
                                                                                                             alt="Mã Giảm Giá Yes24, Khuyến Mãi Yes24 Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                                                                                                             itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}">Mã Giảm Giá Yes24, Khuyến Mãi Yes24 Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>

            <article
                    class="post-16166 post type-post status-publish format-standard has-post-thumbnail category-du-lich category-ma-giam-gia category-top-deals entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/ma-giam-gia-lotte-240x135.png"
                            class="entry-image attachment-post"
                            alt="Mã Giảm Giá Lotte, Coupon Lotte Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                            itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}">Mã Giảm Giá Lotte, Coupon Lotte Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>

            <article
                    class="post-5793 post type-post status-publish format-standard has-post-thumbnail category-lazada category-ma-giam-gia tag-khac entry">
                <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}" class="alignleft" aria-hidden="true"><img
                            width="240" height="135"
                            src="/assets/image/Mytour-240x135.png"
                            class="entry-image attachment-post"
                            alt="Mã Giảm Giá MyTour Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                <header class="entry-header"><h2 class="entry-title" itemprop="headline"><a
                                href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}">Mã Giảm Giá MyTour Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
            </article>

        </div>
    </section>

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap" id="km-post"><h2 class="widget-title widgettitle">{{ $title }}</h2>

            @foreach($newests as $newest)
                <article
                        class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry km-post">
                    <div class="post-list alignleft">
                        <a href="{{ url('khuyen-mai/'.$newest->slug) }}" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <p class="entry-title" itemprop="headline">
                            <a href="{{  url('khuyen-mai/'.$newest->slug) }}">{{ $newest->name }}</a>
                        </p>
                        <a href="{{  url('khuyen-mai/'.$newest->slug) }}"><p style="word-wrap: break-word;"><span><i
                                            class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach


        </div>
        <div class="archive-pagination pagination">
            {{--                {{ $newests->links('frontend.paginate') }}--}}
            <button id="load-more">Xem thêm</button>
        </div>
    </section>
@endsection