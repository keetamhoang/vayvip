@extends('frontend.v2.layout')

@section('title')
    <title>
        @include('frontend.v2.ma_giam_gia.title')
    </title>
@endsection

@section('meta')
    @include('frontend.v2.ma_giam_gia.meta')
@endsection

{{--@section('h1_seo')--}}
    {{--@include('frontend.v2.ma_giam_gia.h1_seo')--}}
{{--@endsection--}}

@section('top')

@endsection

@section('content')
    <section class="banner-mgg">
        <a href="http://go.ecotrackings.com//?token=XXIojgGJSvKuZJFGKvUzW&url=http%3A%2F%2Fwww.lazada.vn&sub1=tachinhsmart&sub2=banner&sub3=&sub4=&network_id=lazadamobile" onclick="window.open('{{ url('ma-giam-gia/ma-giam-gia-hot') }}')" target="_self"><img src="/assets/image/ma-giam-gia-lazada.png" alt="tất cả mã giảm giá HOT"></a>
    </section>
    <section class="results m-t-30">
        <div class="row">
            <!--/col -->
            <div class="col-sm-9">
                <div class="dp-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 dph-info">
                                <div class="col-md-2">
                                    <img src="{{ $image }}" class="profile-img" alt="{{ $name }}">
                                </div>
                                <div class="col-md-10">
                                    <h1>{{ $name }}</h1>
                                    <p class="desc-p">{{ $desc }}
                                    </p>
                                    <div class="desc-div">
                                        <a href="javascript:;">{{ $store }}</a> <a href="javascript:;">Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 desc-bot">
                                {!! $partner->desc_up !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget">
                        <ul class="nav nav-tabs solo-nav responsive-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-crown"></i>Dùng nhiều <span class="badge badge-info">{{ $countMost }}</span> </a> </li>
                            <li class=""><a data-toggle="tab" href="#coupons"><i class="ti-stats-up"></i> Mã giảm giá HOT <span class="badge badge-danger">{{ $countCoupon }}</span></a> </li>
                            <li class=""><a data-toggle="tab" href="#deals"><i class="ti-shopping-cart"></i>Deals KHỦNG <span class="badge badge-success">{{ $countDeal }}</span></a> </li>
                        </ul>
                    </div>
                </div>
                <!--/widget -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane single-coupon active" id="popular">
                        @foreach($mosts as $key => $code)
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
                                                    @if (auth('admin')->check())
                                                        <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                    @endif
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
                                            <p class="coupon-title"><a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
                                            <div class="short-desc-p">
                                                {!! $code->content !!}
                                                <div class="detail-coupon">
                                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                </div>
                                                <p class="view-detail show-more">...Xem chi tiết</p>
                                            </div>
                                        </div>
                                        <!-- end:Coupon cont -->
                                        <div class="button-contain col-sm-3 text-center">
                                            <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                                            <div class="brand-image">
                                                <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="deal">
                                            <div class="coupon-data col-sm-2 text-center">
                                                <div class="savings text-center">
                                                    <div>
                                                        <div class="large">KM</div>
                                                        <div class="small"><a href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
                                                        <div class="type">Deal</div>
                                                        @if (auth('admin')->check())
                                                            <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                        @endif
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
                                                <p class="coupon-title"><a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
                                                <div class="short-desc-p">
                                                    {!! $code->content !!}
                                                    <div class="detail-coupon">
                                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                    </div>
                                                    <p class="view-detail show-more">...Xem chi tiết</p>
                                                </div>
                                            </div>
                                            <!-- end:Coupon cont -->
                                            <div class="button-contain col-sm-3 text-center">
                                                <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                                                <div class="brand-image">
                                                    <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <!-- //row -->
                            </div>
                        @endforeach
                    </div>
                    <!-- / tabpanel -->
                    <div role="tabpanel" class="tab-pane single-coupon" id="coupons">
                        @foreach($coupons as $key => $code)
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
                                                    @if (auth('admin')->check())
                                                        <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                    @endif
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
                                            <p class="coupon-title"><a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
                                            <div class="short-desc-p">
                                                {!! $code->content !!}
                                                <div class="detail-coupon">
                                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                </div>
                                                <p class="view-detail show-more">...Xem chi tiết</p>
                                            </div>
                                        </div>
                                        <!-- end:Coupon cont -->
                                        <div class="button-contain col-sm-3 text-center">
                                            <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                                            <div class="brand-image">
                                                <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="deal">
                                            <div class="coupon-data col-sm-2 text-center">
                                                <div class="savings text-center">
                                                    <div>
                                                        <div class="large">KM</div>
                                                        <div class="small"><a href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
                                                        <div class="type">Deal</div>
                                                        @if (auth('admin')->check())
                                                            <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                        @endif
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
                                                <p class="coupon-title"><a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
                                                <div class="short-desc-p">
                                                    {!! $code->content !!}
                                                    <div class="detail-coupon">
                                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                    </div>
                                                    <p class="view-detail show-more">...Xem chi tiết</p>
                                                </div>
                                            </div>
                                            <!-- end:Coupon cont -->
                                            <div class="button-contain col-sm-3 text-center">
                                                <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                                                <div class="brand-image">
                                                    <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <!-- //row -->
                            </div>
                        @endforeach
                    </div>
                    <!-- / tabpanel -->
                    <div role="tabpanel" class="tab-pane single-coupon" id="deals">
                        @foreach($deals as $key => $code)
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
                                                    @if (auth('admin')->check())
                                                        <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                    @endif
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
                                            <p class="coupon-title"><a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
                                            <div class="short-desc-p">
                                                {!! $code->content !!}
                                                <div class="detail-coupon">
                                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                </div>
                                                <p class="view-detail show-more">...Xem chi tiết</p>
                                            </div>
                                        </div>
                                        <!-- end:Coupon cont -->
                                        <div class="button-contain col-sm-3 text-center">
                                            <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                                            <div class="brand-image">
                                                <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="deal">
                                            <div class="coupon-data col-sm-2 text-center">
                                                <div class="savings text-center">
                                                    <div>
                                                        <div class="large">KM</div>
                                                        <div class="small"><a href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
                                                        <div class="type">Deal</div>
                                                        @if (auth('admin')->check())
                                                            <div class="type"><a href="{{ url('admin/discounts/'.$code->id) }}" target="_blank">Sửa</a></div>
                                                        @endif
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
                                                <p class="coupon-title">
                                                    <a href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a>
                                                </p>
                                                <div class="short-desc-p">
                                                    {!! $code->content !!}
                                                    <div class="detail-coupon">
                                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                                    </div>
                                                    <p class="view-detail show-more">...Xem chi tiết</p>
                                                </div>
                                            </div>
                                            <!-- end:Coupon cont -->
                                            <div class="button-contain col-sm-3 text-center">
                                                <a href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                                                <div class="brand-image">
                                                    <img src="{{ $code->merchantN->image }}" alt="{{ $code->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <!-- //row -->
                            </div>
                        @endforeach
                    </div>
                    <!-- / tabpanel -->
                </div>
                {{--<div class="coupon-single text-center see-more">--}}
                    {{--<button class="btn btn-danger" id="load-more">Xem thêm, còn nhiều lắm</button>--}}
                {{--</div>--}}
                <!-- end: Tab content -->
                <div class="widget desc-bot">
                    <div class="widget-body">
                    {!! $partner->desc_bot !!}
                    </div>
                </div>

                <!-- Poplura stores -->
                <div class="widget">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                            TOP đơn vị khuyến mãi
                        </h3>
                        <div class="widget-widgets"> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">Xem tất cả <span class="ti-angle-right"></span></a> </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}"> <img class="img-responsive" src="/new/assets/images/lazada-240x240.png" alt="Khuyến mãi HOT nhất Lazada"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Lazada</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}"> <img class="img-responsive" src="/new/assets/images/tiki-240x240.png" alt="Khuyến mãi HOT nhất Tiki"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Tiki</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}"> <img class="img-responsive" src="/new/assets/images/adayroi-240x240.png" alt="Khuyến mãi HOT nhất Adayroi"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Adayroi</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}"> <img class="img-responsive" src="/new/assets/images/grab-240x240.png" alt="Khuyến mãi HOT nhất Grab"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Grab</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}"> <img class="img-responsive" src="/new/assets/images/mytour-240x240.png" alt="Khuyến mãi HOT nhất Du lịch"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>MyTour</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}"> <img class="img-responsive" src="/new/assets/images/lotte-240x240.png" alt="Khuyến mãi HOT nhất Lotte"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Lotte</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.v2.ma_giam_gia.sidebar')
        </div>
    </section>
@endsection