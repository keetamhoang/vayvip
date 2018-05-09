<ul class="nav nav-tabs responsive-tabs" id="myTab">
    <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-crown"></i>Most used </a> </li>
    <li class=""><a data-toggle="tab" href="#online"><i class="ti-stats-up"></i>Top coupon codes & offers</a> </li>
    <li class=""><a data-toggle="tab" href="#atStore"><i class="ti-shopping-cart"></i>Big promotions</a> </li>
    <li class=""><a data-toggle="tab" href="#ending"><i class="ti-timer"></i> Expiring soon</a> </li>
    <li class=""><a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"><i class="ti-layout-grid2"></i> See all</a> </li>
</ul>
<div class="tab-content clearfix" id="myTabContent">
    <div id="popular" class="tab-pane counties-pane active animated fadeIn">
        @foreach($mosts as $key => $most)
            @php $desc1 = mb_substr($most->content, 0, 50); $desc1 .= ' ...<a>View detail</a>' @endphp
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="small"><span>{{ $coupon->coupon_save }} OFF</span></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-pink">Coupon</li>
                            <li class="label label-info">{{ $coupon->coupon_save }}</li>
                            <li class="label label-success">EXP: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a>
                        </p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">View this Coupon</span> </a>
                    </div>
                </div>
            @else
                <div class="coupon-wrapper row featured deal">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="type">Deal</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-primary">Deal</li>
                            <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click to view</span> <span class="btn-hover">Get this Deal</span> </a>
                    </div>
                </div>
            @endif

        @endforeach

    </div>
    <div id="ending" class="tab-pane counties-pane animated fadeIn">
        @foreach($exps as $key => $most)
            @php $desc1 = mb_substr($most->content, 0, 50); $desc1 .= ' ...<a>Xem chi tiết</a>' @endphp
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="small"><span>{{ $coupon->coupon_save }} OFF</span></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-pink">Coupon</li>
                            <li class="label label-info">{{ $coupon->coupon_save }}</li>
                            <li class="label label-success">EXP: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a>
                        </p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">View this Coupon</span> </a>
                    </div>
                </div>
            @else
                <div class="coupon-wrapper row featured deal">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="type">Deal</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-primary">Deal</li>
                            <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click to view</span> <span class="btn-hover">Get this Deal</span> </a>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
    <div id="online" class="tab-pane counties-pane animated fadeIn">
        @foreach($coupons as $key => $most)
            @php $desc1 = mb_substr($most->content, 0, 50); $desc1 .= ' ...<a>Xem chi tiết</a>' @endphp
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="small"><span>{{ $coupon->coupon_save }} OFF</span></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-pink">Coupon</li>
                            <li class="label label-info">{{ $coupon->coupon_save }}</li>
                            <li class="label label-success">EXP: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a>
                        </p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">View this Coupon</span> </a>
                    </div>
                </div>
            @else
                <div class="coupon-wrapper row featured deal">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="type">Deal</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-primary">Deal</li>
                            <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click to view</span> <span class="btn-hover">Get this Deal</span> </a>
                    </div>
                </div>
            @endif

        @endforeach

    </div>
    <div id="atStore" class="tab-pane counties-pane animated fadeIn">
        @foreach($deals as $key => $most)
            @php $desc1 = mb_substr($most->content, 0, 50); $desc1 .= ' ...<a>Xem chi tiết</a>' @endphp
            @if ($most->is_coupon == 1)
                @php $coupon = \App\Models\Coupon::where('discount_id', $most->id)->first(); @endphp
                <div class="coupon-wrapper row">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="small"><span>{{ $coupon->coupon_save }} OFF</span></div>
                                <div class="type">Coupon</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-pink">Coupon</li>
                            <li class="label label-info">{{ $coupon->coupon_save }}</li>
                            <li class="label label-success">EXP: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a>
                        </p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">{{ $coupon->coupon_code }}</span> <span class="btn-hover">View this Coupon</span> </a>
                    </div>
                </div>
            @else
                <div class="coupon-wrapper row featured deal">
                    <div class="coupon-data col-sm-2 text-center">
                        <div class="savings text-center">
                            <div class="desktop">
                                <div class="large"><img src="{{ $most->merchantN->image }}" alt="mã giảm giá {{ $most->merchant }}"></div>
                                <div class="type">Deal</div>
                                @if (auth('admin')->check())
                                    <div class="type"><a href="{{ url('admin/discounts/'.$most->id) }}" target="_blank">Sửa</a></div>
                                @endif
                            </div>
                            <div class="mobile">
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
                            <li class="sale label label-primary">Deal</li>
                            <li class="popular label label-success">HSD: {{ \Carbon\Carbon::parse($most->end_time)->format('d/m/Y') }}</li>
                            <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                            <li><span class="used-count">{{ $most->count_view }} used</span> </li>
                        </ul>
                        <p class="coupon-title">
                            <a href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self">{{ $most->name }}</a></p>
                        <p data-toggle="collapse" data-target="#most-{{$key}}">{!! $desc1 !!}</p>
                        <div id="most-{{ $key }}" class="collapse">
                            <div class="detail-coupon">
                                <img src="{{ $most->image }}" alt="{{ $most->name }}">
                            </div>
                            <p>{!!  $most->content  !!}</p>
                        </div>
                    </div>
                    <!-- end:Coupon cont -->
                    <div class="button-contain col-sm-3 text-center">
                        <a class="btn-code" href="{{ $most->aff_link }}" data-id="{{ $most->id }}" onclick="window.open('?id={{ $most->id }}&position=1')" target="_self"> <span class="partial-code">Click to view</span> <span class="btn-hover">Get this Deal</span> </a>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
</div>