@extends('frontend.km.index')

@section('content_km')

    <style>
        .site-header {
            display: none !important;
        }
    </style>
    <section id="featured-post-3" class="widget featured-content featuredpost">
        <article
                class="post-17408 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry"
                itemscope="">
            <header class="entry-header"><h1 class="entry-title h1-detail"
                                             itemprop="headline">{{ $discount->name }}</h1></header>
            <div class="entry-content" itemprop="text">
                <p><i class="fa fa-forward"></i> {{ $discount->content }} </p>

                @php $coupons = \App\Models\Coupon::where('discount_id', $discount->id)->get() @endphp

                <div class="coupondiv">
                    <div class="promotiontype">
                        <div class="promotag">
                            <div class="promotagcont tagsale">
                                <div class="saveamount"> KM</div>
                                <div class="saleorcoupon"> SALE</div>
                            </div>
                        </div>
                        <div class="promotiondetails">
                            <div class="coupontitle"> {{ $discount->name }}</div>
                            <div class="cpinfo"><strong>Hạn dùng:</strong>
                                 <span>{{ \Carbon\Carbon::parse($discount->end_time)->format('d/m/Y') }}</span><br> Xem
                                các chương trình khuyến
                                mãi, giảm giá sách mới nhất từ <a
                                        href="{{ url('khuyen-mai/danh-muc/' . $discount->merchant . '-' . $discount->merchant_id) }}"><strong>{{ $discount->merchant }}</strong></a>
                            </div>
                        </div>
                        <div class="cpbutton">
                            {{--<div class="xemngayz" onclick="window.open('/out/tiki','_blank')">XEM NGAY</div>--}}
                            <div class="xemngayz"><a href="{{ $discount->aff_link }}" target="_blank"
                                                     style="color: #fff;background: #1fb20700;">XEM NGAY</a></div>
                        </div>
                    </div>
                </div>

                @if (count($coupons) > 0)
                    @foreach($coupons as $coupon)
                        <div class="coupondiv">
                            <div class="promotiontype">
                                <div class="promotag">
                                    <div class="promotagcont">
                                        <div class="saveamount"> {{ $coupon->coupon_save }}</div>
                                        <div class="saleorcoupon"> COUPON</div>
                                    </div>
                                </div>
                                <div class="promotiondetails">
                                    <div class="coupontitle"> {{ $coupon->coupon_desc }}</div>
                                    <div class="cpinfo"><strong>Hạn dùng: </strong> {{ \Carbon\Carbon::parse($discount->end_time)->format('d/m/Y') }}<br>
                                    </div>
                                </div>
                                <div class="cpbutton">
                                    <div class="copyma " onclick="clickCoupon('{{ $discount->aff_link }}', '{{ $coupon->id }}')">
                                        <input class="copy-{{ $coupon->id }}" type="hidden" value="{{$coupon->coupon_code}}">
                                        <div class="coupon-code">{{ $coupon->coupon_code }}</div>
                                        <div>COPY MÃ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <figure id="attachment_17411" style="max-width: 100%; margin-top: 20px" class="wp-caption aligncenter">
                    <img
                            style="width: 100%"
                            src="{{ $discount->image }}"
                            alt="{{ $discount->name }}"
                            class="size-full wp-image-17411">
                </figure>

                {{--@php $banners = \App\Models\Banner::where('discount_id', $discount->id)->get() @endphp--}}
                {{--@if (!empty($banners))--}}
                {{--@foreach($banners as $banner)--}}
                {{--<figure id="attachment_17411" style="max-width: 100%; margin-top: 20px" class="wp-caption aligncenter">--}}
                {{--<img--}}
                {{--style="width: 100%"--}}
                {{--src="{{ $banner->link }}"--}}
                {{--alt="{{ $discount->name }}"--}}
                {{--class="size-full wp-image-17411">--}}
                {{--</figure>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                <div class="coupondiv">
                    <div class="promotiontype">
                        <div class="promotag">
                            <div class="promotagcont tagsale">
                                <div class="saveamount"> KM</div>
                                <div class="saleorcoupon"> SALE</div>
                            </div>
                        </div>
                        <div class="promotiondetails">
                            <div class="coupontitle"> {{ $discount->name }}</div>
                            <div class="cpinfo"><strong>Hạn dùng:</strong>
                                <span>{{ \Carbon\Carbon::parse($discount->end_time)->format('d/m/Y') }}</span><br> Xem
                                các chương trình khuyến
                                mãi, giảm giá sách mới nhất từ <a
                                        href="{{ url('khuyen-mai/danh-muc/' . $discount->merchant . '-' . $discount->merchant_id) }}"><strong>{{ $discount->merchant }}</strong></a>
                            </div>
                        </div>
                        <div class="cpbutton">
                            {{--<div class="xemngayz" onclick="window.open('/out/tiki','_blank')">XEM NGAY</div>--}}
                            <div class="xemngayz"><a href="{{ $discount->aff_link }}" target="_blank"
                                                     style="color: #fff;background: #1fb20700;">XEM NGAY</a></div>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="entry-footer">
                <div class="after-entry widget-area">
                    <section class="widget offer-widget">
                        <div class="widget-wrap">

                        </div>
                    </section>
                </div>
            </footer>
        </article>
    </section>

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><a href="{{ url('khuyen-mai/moi-nhat') }}" title="Khuyến mại"><h4
                        class="widget-title widgettitle"><i class="fa fa-forward"></i> KHUYẾN MẠI HẤP DẪN KHÁC <i
                            class="fa fa-backward"></i></h4></a>
            @php $newests = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->inRandomOrder()->limit(8)->get() @endphp

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
                            <a  href="{{  url('khuyen-mai/'.$newest->slug) }}">{{ $newest->name }}</a>
                        </h2>
                        <a href="{{  url('khuyen-mai/'.$newest->slug) }}"><p style="word-wrap: break-word;"><span><i
                                            class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach

        </div>
    </section>
@endsection