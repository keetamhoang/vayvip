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
    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap">
            <h2 class="entry-title h1-lazada" itemprop="headline">
                @if(!empty($lazada->title))
                    {{ $lazada->title }}
                @else
                    Mã Giảm Giá {{ $lazada->name }} Khuyến Mãi {{ $lazada->name }} Mới Nhất Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
                @endif
            </h2>

            <div class="entry-content lazada" itemprop="text">
                {!! $lazada->desc_up !!}

                <div class="couponh2"><h2 class="h2white">MÃ GIẢM GIÁ MYTOUR, VOUCHER MYTOUR MỚI NHẤT, TỐT NHẤT</h2></div>

                @foreach($coupons as $coupon)
                    <div class="coupondiv">
                        <div class="promotiontype">
                            <div class="promotag">
                                <div class="promotagcont {{ $coupon->type == 2 ? 'tagsale' : '' }}">
                                    <div class="saveamount"> {{ $coupon->percent }}</div>
                                    <div class="saleorcoupon"> {{ $coupon->type_km }}</div>
                                    <div class=""><a target="_blank" href="{{ url('admin/codes/' . $coupon->id) }}">Sửa</a></div>
                                </div>
                            </div>
                            <div class="promotiondetails">
                                <div class="coupontitle"> {{ $coupon->title }}</div>
                                <div class="cpinfo"><strong>{{ !empty($coupon->hsd) ? $coupon->hsd : 'Không giới hạn' }} </strong><br>
                                    {!! $coupon->desc !!}
                                </div>
                            </div>
                            <div class="cpbutton">
                                <div class="copyma"
                                     onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ $coupon->code }}');window.open('http://bit.ly/2HbbgUH','_blank')">
                                    <div class="coupon-code">{{ $coupon->code }}</div>
                                    <div>COPY MÃ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {!! $lazada->desc_bot !!}

            </div>
        </div>
    </section>
@endsection