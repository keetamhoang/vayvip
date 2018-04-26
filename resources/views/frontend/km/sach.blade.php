@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các tựa sách và Văn phòng phẩm</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/sach-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các tựa sách và Văn phòng phẩm"/>
    <meta property="og:description"
          content="Nếu bạn là tín đồ của sách, đừng bỏ lỡ các mã giảm giá để làm giàu thêm kho tàng của mình. Nhiều lúc bạn sẽ phải bất ngờ với những mã giảm giá cực lớn từ các đơn vị phát hành đấy. Lưu lại và sử dụng ngay nhé."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Nếu bạn là tín đồ của sách, đừng bỏ lỡ các mã giảm giá để làm giàu thêm kho tàng của mình. Nhiều lúc bạn sẽ phải bất ngờ với những mã giảm giá cực lớn từ các đơn vị phát hành đấy. Lưu lại và sử dụng ngay nhé."/>

    <meta name="keywords" content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Mã giảm giá sách, sách Tiki , Nhà sách Nhã Nam khuyến mãi
    </h1>
@endsection

@section('content_km')
    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap">
            <h2 class="entry-title h1-lazada" itemprop="headline">
                @if(!empty($lazada->title))
                    {{ $lazada->title }}
                @else
                    Mã giảm giá sách, sách Tiki , Nhà sách Nhã Nam khuyến mãi trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
                @endif
            </h2>

            <div class="entry-content lazada" itemprop="text">
                {!! $lazada->desc_up !!}

                <div class="couponh2"><h2 class="h2white">MÃ GIẢM GIÁ SÁCH HAY MỚI NHẤT, TỐT NHẤT</h2></div>
                <div id="km-coupon">
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
                                         onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ $coupon->code }}');window.open('http://bit.ly/2IVGKP4','_blank')">
                                        <div class="coupon-code">{{ $coupon->code }}</div>
                                        <div>COPY MÃ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                {!! $lazada->desc_bot !!}

            </div>
        </div>
    </section>
@endsection