@extends('frontend.v2.layout')

@section('title')
    <title>Tài chính thông minh trong tầm tay của bạn</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="slide-wrap shadow">
                <div class="main-slider">
                    <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="one"> <img src="/new/assets/images/ma-giam-gia-banner-2.png" alt="Mã giảm giá HOT nhất"> </a>
                    <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="two"> <img src="/new/assets/images/ma-giam-gia-banner-1.png" alt="Mã giảm giá khuyến mại HOT nhất"> </a>
                    <a href="{{ url('vay-von/dang-ky') }}" class="item" data-hash="three"> <img src="/new/assets/images/vay-von-tin-dung-banner-2.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>
                    <a href="{{ url('tin-dung/dang-ky') }}" class="item" data-hash="four"> <img src="/new/assets/images/the-tin-dung-banner-1.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>
                </div>
                <!-- /.carosuel -->
                <div class="carousel-tabs clearfix">
                    <a class="col-sm-3 tab url" href="#three">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-2-small.png" alt="Mã giảm giá HOT nhất"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mua sắm thả ga</h4>
                                <p>Tự tin không lo về giá ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#four">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-1-small.png" alt="Mã giảm giá khuyến mại HOT nhất"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Săn deal khủng</h4>
                                <p>Các mã giảm giá đến 50% ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#one">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/vay-von-tin-dung-banner-2-small.png" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Vay vốn tín dụng</h4>
                                <p>Vay tới 100 triệu đồng ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#two">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/the-tin-dung-banner-1-small.png" alt="Đăng ký vay vốn tín dụng NHANH"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Làm thẻ tín dụng</h4>
                                <p>Hoàn toàn miễn phí ...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--/slide wrap -->
        </div>
        <!-- /col 12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <ul class="nav nav-tabs responsive-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-crown"></i>Dùng nhiều </a> </li>
                <li class=""><a data-toggle="tab" href="#online"><i class="ti-stats-up"></i>Mã giảm giá KHỦNG</a> </li>
                <li class=""><a data-toggle="tab" href="#atStore"><i class="ti-shopping-cart"></i>Deal HOT</a> </li>
                <li class=""><a data-toggle="tab" href="#ending"><i class="ti-timer"></i> Sắp hết hạn</a> </li>
            </ul>
            <div class="tab-content clearfix" id="myTabContent">
                <div id="popular" class="tab-pane counties-pane active animated fadeIn">
                    @foreach($mosts as $key => $most)
                        @php $desc1 = mb_substr($most->content, 0, 60); $desc1 .= ' ...' @endphp
                        @php $desc2 = mb_substr($most->content, 60); $desc2 = '... ' . $desc2 @endphp
                        @if ($most->is_coupon == 1)
                            @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                            <div class="coupon-wrapper row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">{{ $coupon->coupon_save }}</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
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
                                        <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{$key}}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                    {{--<ul class="coupon-details list-inline">--}}
                                        {{--<li class="list-inline-item">--}}
                                            {{--<div class="btn-group" role="group" aria-label="...">--}}
                                                {{--<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>--}}
                                                {{--<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>--}}
                                            {{--</div>--}}
                                            {{--<!-- end:Btn group -->--}}
                                        {{--</li>--}}
                                        {{--<li class="list-inline-item">30% of 54 recommend</li>--}}
                                        {{--<li class="list-inline-item"><a href="#">Share</a> </li>--}}
                                    {{--</ul>--}}
                                    <!-- end:Coupon details -->
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </p>
                                    {{--<div class="btn-group" role="group" aria-label="...">--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        @else
                            <div class="coupon-wrapper row featured deal">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">KM</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                            <div class="type">Deal</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-primary">Deal khuyến mãi</li>
                                        <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{ $key }}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                    {{--<ul class="coupon-details list-inline">--}}
                                        {{--<li class="list-inline-item">--}}
                                            {{--<div class="btn-group" role="group" aria-label="...">--}}
                                                {{--<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>--}}
                                                {{--<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>--}}
                                            {{--</div>--}}
                                            {{--<!-- end:Btn group -->--}}
                                        {{--</li>--}}
                                        {{--<li class="list-inline-item">30% of 54 recommend</li>--}}
                                        {{--<li class="list-inline-item"><a href="#">Share</a> </li>--}}
                                    {{--</ul>--}}
                                    <!-- end:Coupon details -->
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </p>
                                    {{--<div class="btn-group" role="group" aria-label="...">--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>--}}
                                        {{--<button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        @endif

                    @endforeach

                </div>
                <div id="ending" class="tab-pane counties-pane animated fadeIn">
                    @foreach($exps as $key => $most)
                        @php $desc1 = mb_substr($most->content, 0, 60); $desc1 .= ' ...' @endphp
                        @php $desc2 = mb_substr($most->content, 60); $desc2 = '... ' . $desc2 @endphp
                        @if ($most->is_coupon == 1)
                            @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                            <div class="coupon-wrapper row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">{{ $coupon->coupon_save }}</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
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
                                        <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{$key}}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </p>
                                </div>
                            </div>
                        @else
                            <div class="coupon-wrapper row featured deal">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">KM</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                            <div class="type">Deal</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-primary">Deal khuyến mãi</li>
                                        <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{ $key }}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </p>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>
                <div id="online" class="tab-pane counties-pane animated fadeIn">
                    @foreach($coupons as $key => $most)
                        @php $desc1 = mb_substr($most->content, 0, 60); $desc1 .= ' ...' @endphp
                        @php $desc2 = mb_substr($most->content, 60); $desc2 = '... ' . $desc2 @endphp
                        @if ($most->is_coupon == 1)
                            @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                            <div class="coupon-wrapper row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">{{ $coupon->coupon_save }}</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
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
                                        <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{$key}}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </p>
                                </div>
                            </div>
                        @else
                            <div class="coupon-wrapper row featured deal">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">KM</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                            <div class="type">Deal</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-primary">Deal khuyến mãi</li>
                                        <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{ $key }}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </p>
                                </div>
                            </div>
                        @endif

                    @endforeach

                </div>
                <div id="atStore" class="tab-pane counties-pane animated fadeIn">
                    @foreach($deals as $key => $most)
                        @php $desc1 = mb_substr($most->content, 0, 60); $desc1 .= ' ...' @endphp
                        @php $desc2 = mb_substr($most->content, 60); $desc2 = '... ' . $desc2 @endphp
                        @if ($most->is_coupon == 1)
                            @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                            <div class="coupon-wrapper row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">{{ $coupon->coupon_save }}</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
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
                                        <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{$key}}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ trim($coupon->coupon_code) }}');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </p>
                                </div>
                            </div>
                        @else
                            <div class="coupon-wrapper row featured deal">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">KM</div>
                                            <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                            <div class="type">Deal</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-primary">Deal khuyến mãi</li>
                                        <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $most->name }}</a></h4>
                                    <p data-toggle="collapse" data-target="#most-{{ $key }}">{{ $desc1 }}</p>
                                    <p id="most-{{ $key }}" class="collapse">{{ $desc2 }}</p>
                                </div>
                                <!-- end:Coupon cont -->
                                <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Mã giảm giá xem ở trang mở ra');window.open('{{ $most->aff_link }}','_blank')"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </p>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
            <!-- end: Tab content -->
            <div class="clearfix"></div>
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
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}"> <img class="img-responsive" src="/new/assets/images/lazada-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Lazada</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}"> <img class="img-responsive" src="/new/assets/images/tiki-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Tiki</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}"> <img class="img-responsive" src="/new/assets/images/adayroi-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Adayroi</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}"> <img class="img-responsive" src="/new/assets/images/grab-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Grab</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}"> <img class="img-responsive" src="/new/assets/images/mytour-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>MyTour</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}"> <img class="img-responsive" src="/new/assets/images/lotte-240x240.png" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Lotte</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Tại sao bạn cần Vay vốn tín dụng?
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <div class="">
                        <p>Tài chính Smart là một kênh thông tin tổng hợp toàn diện về quản lý tài chính cá nhân, được lập ra với sứ mệnh giúp cho người Việt Nam có thể sử dụng những đồng tiền mình vất vả kiếm ra một cách thông minh nhất với vô vàn mã giảm giá cho tiêu dùng, các chương trình vay vốn đầu tư đa dạng, các kế hoạch tiết kiệm và bảo vệ tài chính hiệu quả.</p>
                        <div class="btn-div">
                            <a class="btn btn-danger" href="{{ url('vay-von/dang-ky') }}">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Làm thẻ tín dụng tại các ngân hàng uy tín (Hoàn toàn miễn phí)
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <div class="">
                        <p>Tài chính Smart là một kênh thông tin tổng hợp toàn diện về quản lý tài chính cá nhân, được lập ra với sứ mệnh giúp cho người Việt Nam có thể sử dụng những đồng tiền mình vất vả kiếm ra một cách thông minh nhất với vô vàn mã giảm giá cho tiêu dùng, các chương trình vay vốn đầu tư đa dạng, các kế hoạch tiết kiệm và bảo vệ tài chính hiệu quả.</p>
                        <div class="btn-div">
                            <a class="btn btn-danger" href="{{ url('tin-dung/dang-ky') }}">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget categories b-b-0">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Tiện ích nổi bật
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <!-- Sidebar navigation -->
                    <ul class="nav sidebar-nav">
                        <li>
                            <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"> <i class="ti-gift">
                                </i> Săn mã giảm giá HOT - Deal khủng <span class="sidebar-badge">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('vay-von/dang-ky') }}"> <i class="ti-wallet">
                                </i> Vay vốn tín dụng NHANH <span class="sidebar-badge">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('tin-dung/dang-ky') }}"> <i class="ti-ticket">
                                </i> Đăng ký làm thẻ tín dụng FREE <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('tin-tuc-tai-chinh') }}"> <i class="ti-pulse">
                                </i> Theo dõi tin tức về tài chính <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('mua-sam-hom-nay') }}"> <i class="ti-shopping-cart-full">
                                </i> Mua sắm hôm nay có gì HOT? <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                    </ul>
                    <!-- Sidebar divider -->
                </div>
            </div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Tìm kiếm Mã giảm giá, Khuyến mãi HOT
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <form class="form-horizontal select-search">
                        {{--<label class="control-label ">What you searching for?</label>--}}
                        {{--<div class="btn-group" data-toggle="buttons">--}}
                            {{--<label class="btn btn-default"> <i class="ti-tag"></i>--}}
                                {{--<input type="checkbox" checked>Coupons</label>--}}
                            {{--<label class="btn btn-default"> <i class="ti-cut"></i>--}}
                                {{--<input type="checkbox">Discounts</label>--}}
                            {{--<label class="btn btn-default active"> <i class="ti-alarm-clock"></i>--}}
                                {{--<input type="checkbox">Deals</label>--}}
                        {{--</div>--}}
                        <fieldset>
                            <div class="form-group">
                                {{--<label class="control-label ">Keyword</label>--}}
                                <input class="form-control" id="text" name="text" type="text" placeholder="Vd: Lazada, tivi, sách,..."/>
                            </div>
                            {{--<div class="row">--}}
                                {{--<!-- Select Basic -->--}}
                                {{--<div class="form-group col-sm-6 col-xs-12">--}}
                                    {{--<label class="control-label " for="category">Select category</label>--}}
                                    {{--<select class="select form-control" id="category" name="category">--}}
                                        {{--<option value="Electronics">Electronics</option>--}}
                                        {{--<option value="Fashion">Fashion</option>--}}
                                        {{--<option value="Kids">Kids</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-sm-6 col-xs-12">--}}
                                    {{--<label class="control-label " for="store">Select a store</label>--}}
                                    {{--<select class="select form-control" id="store" name="store">--}}
                                        {{--<option value="Shopname">Shopname</option>--}}
                                        {{--<option value="Ebay">Ebay</option>--}}
                                        {{--<option value="Ebay">Shopname</option>--}}
                                        {{--<option value="Ebay">Hostgator</option>--}}
                                        {{--<option value="Ebay">Ebay</option>--}}
                                        {{--<option value="Bangdoo">Bangdoo</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <!-- //row -->
                            <!-- Button -->
                            <div class="form-group ">
                                <button id="search_btn" name="search_btn" class="btn btn-danger">Tìm kiếm</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Từ khóa nổi bật
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <ul class="tags">
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="tag">
                                Mã giảm giá
                            </a>
                        </li>
                        <li> <a href="{{ url('vay-von-tin-dung') }}" class="tag">
                                Vay vốn tín dụng
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}" class="tag">
                                Tiki
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}" class="tag">
                                Lazada
                            </a>
                        </li>
                        <li> <a href="{{ url('tin-tuc/the-tin-dung-la-gi-12') }}" class="tag">
                                Thẻ tín dụng
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}" class="tag">
                                Grab
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}" class="tag">
                                Adayroi
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}" class="tag">
                                Du lịch
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}" class="tag">
                                Shopee
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget trending-coupons">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Khuyến mãi HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    @php $randomKms = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->inRandomOrder()->limit(10)->get() @endphp

                    @foreach($randomKms as $randomKm)
                        <div class="media">
                            {{--http://placehold.it/64x64--}}
                            <div class="media-left media-middle a-image"> <a href="{{ $randomKm->aff_link }}" target="_blank" title="{{ $randomKm->name }}"
                                                                             style="background: url({{ $randomKm->image }}) no-repeat center;"></a> </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{ $randomKm->aff_link }}" target="_blank" title="{{ $randomKm->name }}">{{ $randomKm->name }}</a></h4>
                                <p>{{ $randomKm->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- // widget body -->
            </div>
            <!-- /widget -->
        </div>
        <!-- end col -->
    </div>
    <!-- End row -->
@endsection