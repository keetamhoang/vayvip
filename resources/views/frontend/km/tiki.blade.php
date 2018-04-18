@extends('frontend.km.index')

@section('title')
    <title>Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Tiki khuyến mãi 200K</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-tiki">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Tiki khuyến mãi 200K"/>
    <meta property="og:description"
          content="Tổng hợp và chia sẻ miễn phí các mã giảm giá Tiki, Coupon Tiki mới nhất trong tháng. Các mã giảm giá Tiki được cập nhật liên tục hàng ngày hàng giờ. Chỉ cần vài phút truy cập là bạn đã tiết kiệm ngay cho mình được 100k, 200K...Hiện đang có Coupon Tiki 200K áp dụng tất cả các sản phẩm, mã giảm giá sách Tiki giảm ..."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp và chia sẻ miễn phí các mã giảm giá Tiki, Coupon Tiki mới nhất trong tháng. Các mã giảm giá Tiki được cập nhật liên tục hàng ngày hàng giờ. Chỉ cần vài phút truy cập là bạn đã tiết kiệm ngay cho mình được 100k, 200K...Hiện đang có Coupon Tiki 200K áp dụng tất cả các sản phẩm, mã giảm giá sách Tiki giảm ..."/>
    <meta name="keywords" content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Voucher Tiki khuyến mãi mới nhất, ưu đãi Tiki SIÊU KHỦNG</h1>
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

                <div class="couponh2"><h2 class="h2white">MÃ GIẢM GIÁ TIKI, VOUCHER TIKI MỚI NHẤT, TỐT NHẤT</h2></div>

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
                                     onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ $coupon->code }}');window.open('http://bit.ly/2J1V4pe','_blank')">
                                    <div class="coupon-code">{{ $coupon->code }}</div>
                                    <div>COPY MÃ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--<div class="couponh2"><span class="h2white">MÃ GIẢM GIÁ LAZADA NGÀNH MỸ PHẨM</span></div>--}}
                {{--<div class="coupondiv">--}}
                {{--<div class="promotiontype">--}}
                {{--<div class="promotag">--}}
                {{--<div class="promotagcont">--}}
                {{--<div class="saveamount"> 10%</div>--}}
                {{--<div class="saleorcoupon"> COUPON</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="promotiondetails">--}}
                {{--<div class="coupontitle"> Mã giảm giá 10% cho đơn hàng mỹ phẩm ZA</div>--}}
                {{--<div class="cpinfo"><strong>Hạn dùng: </strong>30/4/2018<br> Áp dụng với đơn hàng từ--}}
                {{--350.000đ--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cpbutton">--}}
                {{--<div class="copyma"--}}
                {{--onclick="window.open('http://ho.lazada.vn/SHOegW?sku=&amp;redirect=http%3A%2F%2Fho.lazada.vn%2FSH79ra%3Furl%3Dhttps%253A%252F%252Fwww.lazada.vn%252Fshop%252Fza-official-store%253foffer_id%253D%257Boffer_id%257D%2526affiliate_id%253D%257Baffiliate_id%257D%2526offer_name%253D%257Boffer_name%257D_%257Boffer_file_id%257D%2526affiliate_name%253D%257Baffiliate_name%257D%2526transaction_id%253D%257Btransaction_id%257D%26aff_sub%3Dza','_blank')">--}}
                {{--<div class="coupon-code">ZA10T4</div>--}}
                {{--<div>COPY MÃ</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="coupondiv">--}}
                {{--<div class="promotiontype">--}}
                {{--<div class="promotag">--}}
                {{--<div class="promotagcont tagsale">--}}
                {{--<div class="saveamount"> 15%</div>--}}
                {{--<div class="saleorcoupon"> SALE</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="promotiondetails">--}}
                {{--<div class="coupontitle"> Lazada khuyến mãi Flash Sale giảm giá tốt nhất mỗi ngày</div>--}}
                {{--<div class="cpinfo"><strong>Hạn dùng: </strong>31/3/2018.<br> Danh mục các sản phẩm giảm giá--}}
                {{--nhiều nhất hàng ngày ở Lazada, mở bán sản phẩm mới mỗi 2 tiếng.--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cpbutton">--}}
                {{--<div class="xemngayz" onclick="window.open('http://bit.ly/2yvnoL8','_blank')">XEM NGAY</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}


                {!! $lazada->desc_bot !!}


            </div>
        </div>
    </section>
@endsection