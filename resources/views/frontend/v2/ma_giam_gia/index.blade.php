@extends('frontend.v2.layout')

@section('title')
    <title>Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>

    <meta name="keywords"
          content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Tổng hợp mã giảm giá mới, khuyến mãi HOT trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
@endsection

@section('content')
    <section class="results m-t-30 ">
        <div class="row">

            <!--/col -->
            <div class="col-sm-9 magiamgia">
                <div class="widget">
                    <div class="widget-heading widget-default b-b-0">
                        @php $countCoupon = \App\Models\Discount::where('status', 0)->count(); @endphp
                        <h2 class="widget-title text-dark">
                            KHUYẾN MÃI - GIẢM GIÁ MỚI NHẤT <span class="count-coupon">({{ $countCoupon }})</span>
                        </h2>
                        <div class="widget-widgets">
                            <div class="form-group sort">
                                <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">Xem thêm, còn nhiều lắm <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default" class="panel-collapse collapse">
                        <div class="widget-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</div>
                    </div>
                </div>

                @php $codes = \App\Models\Discount::where('status', 0)->orderBy('is_hot', 'desc')->orderBy('updated_at', 'desc')->limit(5)->get() @endphp

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
                                                <img src="{{ $code->image }}">
                                            </div>
                                            <p>{{ $code->content }}</p>
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
                                                <img src="{{ $code->image }}">
                                            </div>
                                            <p>{{ $code->content }}</p>
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

                <div class="widget">
                    <div class="widget-heading widget-default b-b-0">
                        @php $countProduct = \App\Models\KmProduct::where('status', 0)->count() @endphp
                        <h2 class="widget-title text-dark">
                            TOP MÃ GIẢM GIÁ SẢN PHẨM BÁN CHẠY NHẤT {{ \Carbon\Carbon::now()->year }} <span class="count-coupon">({{ $countProduct }})</span>
                        </h2>
                        <div class="widget-widgets">
                            <div class="form-group sort">
                                <a href="{{ url('ma-giam-gia/danh-muc-san-pham-co-ma-giam-gia') }}">Xem thêm, còn nhiều lắm <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default" class="panel-collapse collapse">
                        <div class="widget-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</div>
                    </div>
                </div>
                <!-- end: Widget -->

                @php $products = \App\Models\KmProduct::where('status', \App\Models\KmProduct::ACTIVE)->inRandomOrder()->limit(8)->get(); @endphp

                <div class="row sp">
                    @foreach($products as $product)
                        <div class="col-sm-3">
                            <div class="widget">
                                <div class="coupon-block equal">
                                    <div class="top-sp-img">
                                        <a href="{{ $product->aff_link }}" title="{{ $product->name }}"
                                           style="background: url('{{ $product->image }}') no-repeat center;"></a>
                                    </div>
                                    @if ($product->discount != 0)
                                        <div class="coupon-value" content="">{{ number_format($product->discount, 0, '.', '.') }} ₫</div>
                                    @else
                                        <div class="coupon-value" content="">{{ number_format($product->price, 0, '.', '.') }} ₫</div>
                                    @endif
                                    <div class="top-sp-bot">
                                        <span class="top-sp-price">{{ number_format($product->price, 0, '.', '.') }} ₫</span>
                                        @if ($product->discount != 0)
                                            <span class="top-sp-percent">Giảm {{ round(($product->price - $product->discount) / $product->price * 100) }}%</span>
                                        @else
                                            {{--<span class="top-sp-percent">Giảm 0%</span>--}}
                                        @endif
                                    </div>
                                    <p class="coupon-title"><a href="{{ $product->aff_link }}" class="top-sp-title">{{ $product->name }}</a></p>
                                    <div class="action-block">
                                        <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Xem chi tiết sản phẩm ở trang mở ra');window.open('{{ $product->aff_link }}','_blank')"> <span class="partial-code">Xem chi tiết</span> <span class="btn-hover">Xem chi tiết</span> </p>
                                    </div>
                                </div>
                                <!--//coupon block -->
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--<ul class="pagination pagination-lg m-t-0">--}}
                    {{--<li>--}}
                        {{--<a href="#"> <i class="ti-arrow-left"></i> </a>--}}
                    {{--</li>--}}
                    {{--<li> <a href="#">1</a> </li>--}}
                    {{--<li class="active"> <a href="#">2</a> </li>--}}
                    {{--<li> <a href="#">3</a> </li>--}}
                    {{--<li> <a href="#">4</a> </li>--}}
                    {{--<li>--}}
                        {{--<a href="#"> <i class="ti-arrow-right"></i> </a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
            @include('frontend.v2.ma_giam_gia.sidebar')
        </div>
    </section>
@endsection