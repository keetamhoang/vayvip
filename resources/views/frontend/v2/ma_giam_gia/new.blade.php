@foreach($coupons as $key => $coupon)
    <div class="widget new-widget">
        <!-- /widget heading -->
        <div class="widget-heading title-discount-category">
            <h2 class="text-white text-center padding-0 margin-0 uppercase">
                @if ($key == 'hots')
                    MÃ GIẢM GIÁ {{ $store }} HOT NHẤT THÁNG {{ \Carbon\Carbon::now()->format('m/Y') }}
                @elseif ($key == 'others')
                    Mã giảm giá, khuyến mãi hấp dẫn khác
                @else
                    {{ $coupon['cate']->title }}
                @endif
            </h2>
            <div class="clearfix"></div>
        </div>
        @if ($key == 'hots')
            <div class="widget-body">
                {{ $coupon['desc'] }}
            </div>
        @endif
        @if (!empty($coupon['cate']->content))
            <div class="widget-body">
                {!! $coupon['cate']->content !!}
            </div>
        @endif
    </div>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane single-coupon active" id="popular">
            @foreach($coupon['discounts'] as $key => $code)
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
                                        <div class="small"><a rel="nofollow" href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
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
                                <p class="coupon-title"><a rel="nofollow" href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
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
                                <a rel="nofollow" href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
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
                                            <div class="small"><a rel="nofollow" href="{{ $code->aff_link }}" target="_blank">{{ $code->merchant }}</a></div>
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
                                    <p class="coupon-title"><a rel="nofollow" href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self">{{ $code->name }}</a></p>
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
                                    <a rel="nofollow" href="{{ $code->aff_link }}" class="btn-code" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
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
    </div>
@endforeach