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

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><h2 class="widget-title widgettitle">{{ $title }}</h2>

            @foreach($newests as $newest)
                <article
                        class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ url('khuyen-mai/'.$newest->slug) }}" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a href="{{  url('khuyen-mai/'.$newest->slug) }}">{{ $newest->name }}</a>
                        </h2>
                        <a href="{{  url('khuyen-mai/'.$newest->slug) }}"><p style="word-wrap: break-word;"><span><i
                                            class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach

            <div class="archive-pagination pagination">
                {{ $newests->links('frontend.paginate') }}
            </div>

        </div>
    </section>
@endsection