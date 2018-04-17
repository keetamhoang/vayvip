@extends('frontend.km.index')

@section('title')
    <title>Xem mã khuyến mãi Grab hôm nay ngày {{ \Carbon\Carbon::now()->format('d/m/Y') }}</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-grab">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Xem mã khuyến mãi Grab hôm nay ngày {{ \Carbon\Carbon::now()->format('d/m/Y') }}"/>
    <meta property="og:description"
          content="Dưới đây là danh sách các mã khuyến mãi và mã giảm giá Grab tháng {{ \Carbon\Carbon::now()->format('m/Y') }} bao gồm tất cả các dịch vụ như: GrabBike, GrabExpress (giao hàng), GrabCar, GrabTaxi, Grab 4 chỗ, Grab 7 chỗ, Grab đi tỉnh… tại tất cả các thành phố mà Grab hỗ trợ sẽ được mình cập nhật hàng ngày mọi người xem và tham ..."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Dưới đây là danh sách các mã khuyến mãi và mã giảm giá Grab tháng {{ \Carbon\Carbon::now()->format('m/Y') }} bao gồm tất cả các dịch vụ như: GrabBike, GrabExpress (giao hàng), GrabCar, GrabTaxi, Grab 4 chỗ, Grab 7 chỗ, Grab đi tỉnh… tại tất cả các thành phố mà Grab hỗ trợ sẽ được mình cập nhật hàng ngày mọi người xem và tham ..."/>
    <meta name="keywords" content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Mã khuyến mãi Grab hôm nay - Cập nhật mã giảm giá Grab bike, Grab car tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
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

                <div class="couponh2"><h2 class="h2white">MÃ KHUYẾN MÃI GRAB, VOUCHER GRAB MỚI NHẤT, TỐT NHẤT</h2></div>

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
                                <div class="coupontitle"> {!!  $coupon->title !!}</div>
                                <div class="cpinfo"><strong>{{ !empty($coupon->hsd) ? $coupon->hsd : 'Không giới hạn' }} </strong><br>
                                    {!! $coupon->desc !!}
                                </div>
                            </div>
                            <div class="cpbutton">
                                <div class="copyma"
                                     onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ $coupon->code }}');">
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