@extends('frontend.km.index')

@section('title')
    <title>Mã giảm giá, khuyến mãi HOT, kinh nghiệm mua hàng online</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-online">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá, khuyến mãi HOT, kinh nghiệm mua hàng online"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta name="keywords" content=""/>
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
            <a href="{{ url('khuyen-mai/top-san-pham-ban-chay-nhat') }}" title="Top sản phẩm bán chạy nhất">
                <h4 class="widget-title widgettitle">TOP SẢN PHẨM BÁN CHẠY NHẤT 2018</h4></a>
            <div class="col-lg-12 top-sp" style="padding: 0px">
                @php $tops = \App\Models\KmProduct::where('status', \App\Models\KmProduct::ACTIVE)->orderBy('id', 'desc')->limit(6)->get(); @endphp

                @foreach($tops as $top)
                    <article class="col-lg-4 post-5793 post type-post status-publish format-standard has-post-thumbnail
                    category-lazada category-ma-giam-gia tag-khac entry" style="padding-left: 0px; padding-bottom: 10px;">
                        <div class="top-sp-img">
                            <a href="{{ $top->aff_link }}" target="_blank" style="background: url('{{ $top->image }}') no-repeat center;"></a>
                        </div>
                        <a class="top-sp-title" href="{{ $top->aff_link }}" target="_blank">{{ $top->name }}</a>
                        <div class="top-sp-info">
                            @if ($top->discount != 0)
                                <p class="top-sp-discount">{{ number_format($top->discount, 0, '.', '.') }} ₫</p>
                            @else
                                <p class="top-sp-discount">{{ number_format($top->price, 0, '.', '.') }} ₫</p>
                            @endif
                            <div class="top-sp-bot">
                                <span class="top-sp-price">{{ number_format($top->price, 0, ',', '.') }}₫</span>
                                @if ($top->discount != 0)
                                    <span class="top-sp-percent">Giảm -{{ round(($top->price - $top->discount) / $top->price * 100) }}%</span>
                                @else
                                    <span class="top-sp-percent">Giảm -0%</span>
                                @endif
                            </div>
                        </div>
                        <a href="{{ $top->aff_link }}" target="_blank" class="top-sp-view">Xem sản phẩm</a>
                    </article>
                @endforeach
            </div>
            <p class="more-from-category"><a href="{{ url('khuyen-mai/top-san-pham-ban-chay-nhat') }}"
                                             title="Top sản phẩm bán chạy nhất">Xem tất cả...</a></p>
            {{--<div>--}}
            {{--<img src="/assets/km/image/logo-partner.png">--}}
            {{--</div>--}}
        </div>
    </section>

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/khuyen-mai-moi-nhat') }}" title="Khuyến mại"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> KHUYẾN MẠI MỚI NHẤT <i class="fa fa-backward"></i></h4></a>
            @php $newests = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

            @foreach($newests as $newest)
                <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ url('khuyen-mai/'.$newest->slug) }}" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a href="{{  url('khuyen-mai/'.$newest->slug) }}">{{ $newest->name }}</a>
                        </h2>
                        <a  href="{{  url('khuyen-mai/'.$newest->slug) }}"><p style="word-wrap: break-word;"><span><i class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach

            <p class="more-from-category"><a href="{{ url('khuyen-mai/khuyen-mai-moi-nhat') }}"
                                             title="Khuyến mại">Xem tất cả...</a></p></div>
    </section>
    <section id="featured-post-4" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/ma-giam-gia') }}" title="Mã giảm giá"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> MÃ GIẢM GIÁ <i class="fa fa-backward"></i></h4></a>
            @php $mggs = \App\Models\Discount::where('is_coupon', 1)->where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

            @foreach($mggs as $mgg)
                <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ url('khuyen-mai/'.$mgg->slug) }}"  class="alignleft" aria-hidden="true"
                           style="background: url('{{ $mgg->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a href="{{  url('khuyen-mai/'.$mgg->slug) }}">{{ $mgg->name }}</a>
                        </h2>
                        <a  href="{{  url('khuyen-mai/'.$mgg->slug) }}">
                            <p style="word-wrap: break-word;"><span><i class="fa fa-forward"></i> {{ $mgg->content }}</span></p>
                        </a>
                    </header>
                </article>
            @endforeach
            <p class="more-from-category"><a href="{{ url('khuyen-mai/ma-giam-gia') }}"
                                             title="Mã giảm giá">Xem tất cả...</a></p></div>
    </section>

    <section id="featured-post-4" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/review') }}" title="Review & Đánh giá"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> REVIEW & ĐÁNH GIÁ <i class="fa fa-backward"></i></h4></a>
            @php $reviews = \App\Models\Post::where('is_review', 1)->where('status', 1)->orderBy('updated_at', 'desc')->limit(7)->get() @endphp

            @foreach($reviews as $review)
                <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ url('tin-tuc/'.$review->slug) }}"  class="alignleft" aria-hidden="true"
                           style="background: url('{{ $review->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline" style="line-height: 1.2;">
                            <a href="{{  url('tin-tuc/'.$review->slug) }}">{{ $review->title }}</a>
                        </h2>
                        {{--<a  href="{{  url('tin-tuc/'.$review->slug) }}">--}}
                        {{--<p style="word-wrap: break-word;"><span><i class="fa fa-forward"></i> {{ $review->short_desc }}</span></p>--}}
                        {{--</a>--}}
                    </header>
                </article>
            @endforeach
            <p class="more-from-category"><a href="{{ url('khuyen-mai/review') }}"
                                             title="Review & Đánh giá">Xem tất cả...</a></p></div>
    </section>
@endsection