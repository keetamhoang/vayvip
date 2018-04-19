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

                @foreach($coupons as $key => $coupon)
                    <div class="coupondiv" id="coupon-{{ $coupon->id }}">
                        <div class="promotiontype">
                            <div class="promotag">
                                <div class="promotagcont {{ $coupon->type == 2 ? 'tagsale' : '' }}">
                                    <div class="saveamount"> {{ $coupon->percent }}</div>
                                    <div class="saleorcoupon"> {{ $coupon->type_km }}</div>
                                </div>
                                @if(auth('admin')->check() and (auth('admin')->user()->type == 'mod' or auth('admin')->user()->type == 'admin'))
                                    <div class="" data-id="coupon-{{ $coupon->id }}">
                                        @if($key > 0)
                                            <a class="up-coupon" target="_blank" href="javascript:;"><i class="fa fa-level-up"></i> Cho lên</a><br>
                                        @endif
                                        @if($key < count($coupons)-1)
                                            <a class="down-coupon"  target="_blank" href="javascript:;"><i class="fa fa-level-down"></i> Cho xuống</a><br>
                                        @endif
                                        <a class="edit-coupon" target="_blank" href="javascript:;">Sửa</a>
                                        <a class="save-coupon" target="_blank" href="javascript:;" style="display: none"><i class="fa fa-save"></i> Lưu</a><br>
                                        <a class="hide-coupon" target="_blank" href="javascript:;">Ẩn</a><br>
                                        <a class="remove-index" target="_blank" href="javascript:;">Bỏ index</a>
                                    </div>
                                @endif
                            </div>
                            <div class="promotiondetails">
                                <div class="coupontitle"> {{ $coupon->title }}</div>
                                <div class="cpinfo"><strong class="cpexp">{{ !empty($coupon->hsd) ? $coupon->hsd : 'Không giới hạn' }} </strong><br>
                                    <div class="cpdesc">{!! $coupon->desc !!}</div>
                                </div>
                                <input name="code" type="text" style="display: none">
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

                <div class="couponh2"><h2 class="h2white">CHƯƠNG TRÌNH KHUYẾN MÃI TIKI MỚI NHẤT, TỐT NHẤT</h2></div>

                @if (count($discounts) > 0)
                    @foreach($discounts as $discount)
                        <div class="coupondiv">
                            <div class="promotiontype">
                                <div class="promotag">
                                    <div class="promotagcont {{ $discount->is_coupon == 0 ? 'tagsale' : '' }}">
                                        <div class="saveamount"> KM</div>
                                        <div class="saleorcoupon"> SALE</div>
                                    </div>
                                </div>
                                <div class="promotiondetails">
                                    <div class="coupontitle"> {{ $discount->name }}</div>
                                    <div class="cpinfo"><strong>Hạn dùng:</strong>
                                        <span>{{ \Carbon\Carbon::parse($discount->end_time)->format('d/m/Y') }}</span><br>
                                        {!! $discount->content !!}
                                    </div>
                                </div>
                                <div class="cpbutton">
                                    {{--<div class="xemngayz" onclick="window.open('/out/tiki','_blank')">XEM NGAY</div>--}}
                                    <div class="xemngayz"><a href="{{ $discount->aff_link }}" target="_blank"
                                                             style="color: #fff;background: #1fb20700;padding: 12px 18px">XEM NGAY</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                {!! $lazada->desc_bot !!}


            </div>
        </div>
    </section>
@endsection