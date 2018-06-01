<ul class="nav nav-tabs responsive-tabs" id="myTab">
    <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-crown"></i>Dùng nhiều </a> </li>
    <li class=""><a data-toggle="tab" href="#online"><i class="ti-stats-up"></i>Mã giảm giá HOT</a> </li>
    <li class=""><a data-toggle="tab" href="#atStore"><i class="ti-shopping-cart"></i>Deal KHỦNG</a> </li>
    <li class=""><a data-toggle="tab" href="#ending"><i class="ti-timer"></i> Sắp hết hạn</a> </li>
    <li class=""><a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="ti-layout-grid2"></i> Xem tất cả</a> </li>
</ul>
<div class="tab-content clearfix" id="myTabContent">
    <div id="popular" class="tab-pane counties-pane active animated fadeIn">
        @foreach($mosts as $key => $most)
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div>
                                <div class="large">{{ $coupon->coupon_save }}</div>
                                <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
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
                            <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a>
                        </p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
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
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
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
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
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
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
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
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
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
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div>
                                <div class="large">{{ $coupon->coupon_save }}</div>
                                <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
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
                            <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                        </ul>
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
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
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
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
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
    <div id="online" class="tab-pane counties-pane animated fadeIn">
        @foreach($coupons as $key => $most)
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div>
                                <div class="large">{{ $coupon->coupon_save }}</div>
                                <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
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
                            <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                        </ul>
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
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
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
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
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
                    </div>
                </div>
            @endif

        @endforeach

    </div>
    <div id="atStore" class="tab-pane counties-pane animated fadeIn">
        @foreach($deals as $key => $most)
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div>
                                <div class="large">{{ $coupon->coupon_save }}</div>
                                <div class="small"><a href="{{ $most->aff_link }}" target="_blank">{{ $most->merchant }}</a></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
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
                            <li class="label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} người đã dùng</span> </li>
                        </ul>
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
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
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
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
                        <p class="coupon-title"><a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <div class="short-desc-p">
                            {!! $most->content !!}
                            @if (!empty($most->image))
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            @endif
                            <p class="view-detail show-more">...Xem chi tiết</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                        <div class="brand-image">
                            <img src="{{ $most->merchantN->image }}" alt="{{ $most->name }}">
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
</div>