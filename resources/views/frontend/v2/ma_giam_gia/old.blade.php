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
                                @if (!empty($code->image))
                                <div class="detail-coupon">
                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                </div>
                                @endif
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
                                    @if (!empty($code->image))
                                    <div class="detail-coupon">
                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                    </div>
                                    @endif
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
                                @if (!empty($code->image))
                                <div class="detail-coupon">
                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                </div>
                                @endif
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
                                    @if (!empty($code->image))
                                    <div class="detail-coupon">
                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                    </div>
                                    @endif
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
                                @if (!empty($code->image))
                                <div class="detail-coupon">
                                    <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                </div>
                                @endif
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
                                    @if (!empty($code->image))
                                    <div class="detail-coupon">
                                        <img src="{{ $code->image }}" alt="{{ $code->name }}">
                                    </div>
                                    @endif
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