@extends('frontend.km.index')

@section('content_km')
    <section id="featured-post-2" class="widget featured-content featuredpost">
        <div class="widget-wrap">
            <h4 class="widget-title widgettitle">ĐỐI TÁC CỦA TÀI CHÍNH SMART</h4>
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
            <div>
                <img src="/assets/km/image/logo-partner.png">
            </div>
        </div>
    </section>

    {{--<section id="featured-post-3" class="widget featured-content featuredpost">--}}
    {{--<div class="widget-wrap"><h4 class="widget-title widgettitle">KHUYẾN MẠI HOT</h4>--}}
    {{--@php $hostests = \App\Models\Discount::orderBy('start_time', 'desc')->limit(6)->get() @endphp--}}

    {{--@foreach($newests as $newest)--}}
    {{--<article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">--}}
    {{--<div class="post-list alignleft">--}}
    {{--<a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"--}}
    {{--style="background: url('{{ $newest->image }}') no-repeat center;">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<header class="entry-header">--}}
    {{--<h2 class="entry-title" itemprop="headline"><a target="_blank"--}}
    {{--href="{{  $newest->aff_link }}">{{ $newest->name }}</a></h2>--}}
    {{--<p>{{ $newest->content }}</p>--}}
    {{--</header>--}}
    {{--</article>--}}
    {{--@endforeach--}}

    {{--<p class="more-from-category"><a href="https://www.offers.vn/khuyen-mai/"--}}
    {{--title="Khuyến mại">Xem thêm...</a></p></div>--}}
    {{--</section>--}}

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/moi-nhat') }}" title="Khuyến mại"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> KHUYẾN MẠI MỚI NHẤT <i class="fa fa-backward"></i></h4></a>
            @php $newests = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

            @foreach($newests as $newest)
                <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a target="_blank" href="{{  $newest->aff_link }}">{{ $newest->name }}</a>
                        </h2>
                        <a target="_blank" href="{{  $newest->aff_link }}"><p style="word-wrap: break-word;"><span><i class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach

            <p class="more-from-category"><a href="{{ url('khuyen-mai/moi-nhat') }}"
                                             title="Khuyến mại">Xem thêm...</a></p></div>
    </section>
    <section id="featured-post-4" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/coupon') }}" title="Mã giảm giá"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> MÃ GIẢM GIÁ <i class="fa fa-backward"></i></h4></a>
            @php $newests = \App\Models\Discount::where('is_coupon', 1)->where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->orderBy('start_time', 'desc')->limit(7)->get() @endphp

            @foreach($newests as $newest)
                <article class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a target="_blank" href="{{  $newest->aff_link }}">{{ $newest->name }}</a>
                        </h2>
                        <a target="_blank" href="{{  $newest->aff_link }}">
                            <p style="word-wrap: break-word;"><span><i class="fa fa-forward"></i> {{ $newest->content }}</span></p>
                        </a>
                    </header>
                </article>
            @endforeach
            <p class="more-from-category"><a href="{{ url('khuyen-mai/coupon') }}"
                                             title="Mã giảm giá">Xem thêm...</a></p></div>
    </section>
@endsection