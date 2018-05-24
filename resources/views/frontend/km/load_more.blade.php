@if (count($newests) > 0)
    @foreach($newests as $key => $code)
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
                        <a class="btn-code" href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">Lấy mã</span> </a>
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
                            <a class="btn-code" href="{{ $code->aff_link }}" data-id="{{ $code->id }}" onclick="window.open('?id={{ $code->id }}&position=1')" target="_self"> <span class="partial-code">Click để xem</span> <span class="btn-hover">Xem ngay</span> </a>
                        </div>
                    </div>
                @endif

            </div>
            <!-- //row -->
        </div>
    @endforeach
    @endif