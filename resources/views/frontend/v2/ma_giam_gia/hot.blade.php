@extends('frontend.v2.layout')

@section('title')
    <title>Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-hot">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m') }} → Giảm 30% - 50% - Tìm là Có"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta name="keywords" content=""/>
@endsection

@section('style')
    <link href="/assets/css_new/hot_blog.css" rel="stylesheet" type="text/css">
@endsection

@section('h1_seo')
@endsection

@section('content')
    <section class="custom-page-header single-store-header widget">
        <div class="">
            <div class="inner effect2">
                <div class="inner-content clearfix">
                    <div class="header-thumb">
                        <div class="header-store-thumb">
                            <a rel="nofollow" target="_blank" title="Tổng hợp mã khuyến mãi - mã giảm giá siêu hot trong tháng" href="#">
                                <img src="/assets/image/khuyenmai.png" class="attachment-wpcoupon_small_thumb size-wpcoupon_small_thumb" alt="Tổng hợp mã khuyến mãi - mã giảm giá siêu hot trong tháng">
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

                        <h1>Cập nhật mã giảm giá 100k - 200k - 500k, mã giảm giá 20% - 50%  trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
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

    <section class="results m-t-30 ">
        <div class="row">

            <!--/col -->
            <div class="col-sm-9 magiamgiahot">

                <div class="widget-wrap widget">
                    <article
                            class="post-2342 post type-post status-publish format-standard has-post-thumbnail category-ma-giam-gia category-tiki entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}" class="col col-lg-3 left" aria-hidden="true">
                            <img width="240"
                                 height="135"
                                 src="/assets/image/Tiki-240x135.png"
                                 class="entry-image attachment-post"
                                 alt="Mã Giảm Giá Tiki Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                                 itemprop="image"></a>
                        <header class="entry-header col col-lg-9">
                            <h2 class="entry-title" itemprop="headline">
                                <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}">Mã Giảm Giá Tiki Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a>
                            </h2>
                        </header>
                    </article>
                    <article
                            class="post-4580 post type-post status-publish format-standard has-post-thumbnail category-adayroi category-ma-giam-gia tag-khac entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/Adayroi-240x135.png"
                                    class="entry-image attachment-post"
                                    alt="Mã Giảm Giá Adayroi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}">Mã Giảm Giá Adayroi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>
                    <article
                            class="post-8859 post type-post status-publish format-standard has-post-thumbnail category-gia-dung category-lam-dep category-ma-giam-gia category-thoi-trang tag-khac entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/Shopee-Store-240x135.png"
                                    class="entry-image attachment-post"
                                    alt="Mã Giảm Giá Shopee Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}">Mã Giảm Giá Shopee Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>
                    <article
                            class="post-17312 post type-post status-publish format-standard has-post-thumbnail category-hoc-tap category-ma-giam-gia category-top-deals entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/lazada-240x135.png"
                                    class="entry-image attachment-post" alt="Mã Giảm Giá Lazada Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                                    itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}">Mã Giảm Giá Lazada Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>
                    <article
                            class="post-2255 post type-post status-publish format-standard has-post-thumbnail category-doi-song category-ma-giam-gia tag-khac entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/ma-khuyen-mai-grab-taxi-240x135.png"
                                    class="entry-image attachment-post"
                                    alt="Mã Giảm Giá Grab, Mã GrabBike, Mã Grab Taxi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}">Mã Giảm Giá Grab, Mã GrabBike, Mã Grab Taxi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>
                    <article
                            class="post-6520 post type-post status-publish format-standard has-post-thumbnail category-ma-giam-gia entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}" class="col col-lg-3 left" aria-hidden="true"><img width="240"
                                                                                                                       height="135"
                                                                                                                       src="/assets/image/Yes24-Vietnam-240x135.png"
                                                                                                                       class="entry-image attachment-post"
                                                                                                                       alt="Mã Giảm Giá Yes24, Khuyến Mãi Yes24 Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                                                                                                                       itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-yes24') }}">Mã Giảm Giá Yes24, Khuyến Mãi Yes24 Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>

                    <article
                            class="post-16166 post type-post status-publish format-standard has-post-thumbnail category-du-lich category-ma-giam-gia category-top-deals entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/ma-giam-gia-lotte-240x135.png"
                                    class="entry-image attachment-post"
                                    alt="Mã Giảm Giá Lotte, Coupon Lotte Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất"
                                    itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}">Mã Giảm Giá Lotte, Coupon Lotte Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>

                    <article
                            class="post-5793 post type-post status-publish format-standard has-post-thumbnail category-lazada category-ma-giam-gia tag-khac entry">
                        <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}" class="col col-lg-3 left" aria-hidden="true"><img
                                    width="240" height="135"
                                    src="/assets/image/Mytour-240x135.png"
                                    class="entry-image attachment-post"
                                    alt="Mã Giảm Giá MyTour Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất" itemprop="image"></a>
                        <header class="entry-header col col-lg-9"><h2 class="entry-title" itemprop="headline"><a
                                        href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}">Mã Giảm Giá MyTour Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Mới Nhất</a></h2></header>
                    </article>

                </div>

                @php $codes = \App\Models\Discount::where('status', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get() @endphp

                <div id="coupons">
                @foreach($codes as $key => $code)
                        @php $desc1 = mb_substr($code->content, 0, 50); $desc1 .= ' ...<a>Xem chi tiết</a>' @endphp
                    <div class="coupon-wrapper coupon-single {{ $code->is_hot == 1 ? 'featured' : '' }}">
                        <div class="row">
                            @if ($code->is_hot == 1)
                                <div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">HOT</div>
                                </div>
                            @endif
                            @if ($code->is_coupon == 1)
                                @php $coupon = \App\Models\Coupon::where('discount_id', $code->id)->first(); @endphp
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">{{ $coupon->coupon_save }}</div>
                                            <div class="small"><a href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
                                            <div class="type">Coupon</div>
                                            @if (auth('admin')->check())
                                                <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-pink">Mã giảm giá</li>
                                        <li class="label label-info">{{ $coupon->coupon_save }}</li>
                                        <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($code->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $code->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <p class="coupon-title"><a href="javascript:;" data-id="{{ $code->id }}" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $code->aff_link }}','_blank')">{{ $code->name }}</a></p>
                                    <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                                    <div id="most-{{ $key }}" class="collapse">
                                        <div class="detail-coupon">
                                            <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                        </div>
                                        <p>{!!  $code->content  !!}</p>
                                    </div>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" data-id="{{ $code->id }}" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $code->aff_link }}','_blank')"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </p>
                                </div>
                            @else
                                <div class="deal">
                                    <div class="coupon-data col-sm-2 text-center">
                                        <div class="savings text-center">
                                            <div>
                                                <div class="large">KM</div>
                                                <div class="small"><a href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
                                                <div class="type">Deal</div>
                                                @if (auth('admin')->check())
                                                    <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- end:Savings -->
                                    </div>
                                    <!-- end:Coupon data -->
                                    <div class="coupon-contain col-sm-7">
                                        <ul class="list-inline list-unstyled">
                                            <li class="sale label label-primary">Deal khuyến mãi</li>
                                            <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($code->end_time)->format('d/m/Y') }}</li>
                                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                            <li><span class="used-count">{{ $code->count_view }} người đã dùng</span> </li>
                                        </ul>
                                        <p class="coupon-title"><a href="javascript:;" data-id="{{ $code->id }}" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $code->aff_link }}','_blank')">{{ $code->name }}</a></p>
                                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                                        <div id="most-{{ $key }}" class="collapse">
                                            <div class="detail-coupon">
                                                <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                            </div>
                                            <p>{!!  $code->content  !!}</p>
                                        </div>
                                    </div>
                                    <!-- end:Coupon cont -->
                                    <div class="button-contain col-sm-3 text-center">
                                        <p class="btn-code" data-id="{{ $code->id }}" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $code->aff_link }}','_blank')"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </p>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <!-- //row -->
                    </div>
                @endforeach
                </div>

                <div class="coupon-single text-center">
                    <button class="btn btn-danger" id="load-more"><i class="ti-hand-point-right"></i> Xem thêm, còn nhiều lắm <i class="ti-hand-point-left"></i></button>
                </div>
            </div>

            @include('frontend.v2.ma_giam_gia.sidebar')
        </div>
    </section>
@endsection