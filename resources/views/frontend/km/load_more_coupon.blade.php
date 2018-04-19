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