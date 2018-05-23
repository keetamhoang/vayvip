@if ($store == 'Lazada')
    Mã giảm giá Lazada, Voucher Lazada khuyến mãi HOT tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
@elseif ($store == 'Tiki')
    Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Tiki khuyến mãi 200K
@elseif ($store == 'Shopee')
    Mã giảm giá Shopee, Voucher Shopee khuyến mãi tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
@elseif ($store == 'Grab')
    [CẬP NHẬT] Mã khuyến mãi GrabBike, GrabCar tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
@elseif ($store == 'Yes24')
    Mã giảm giá Yes24 tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Yes24 khuyến mãi mới nhất
@elseif ($store == 'Adayroi')
    Mã giảm giá Adayroi mới, khuyến mãi Adayroi tháng {{ \Carbon\Carbon::now()->format('m/Y') }} - 100% còn dùng được
@elseif ($store == 'Travel')
    Mã giảm giá MyTour, tổng hợp coupon khuyến mãi MyTour.vn
@elseif ($store == 'Lotte')
    Mã giảm giá Lotte, Voucher Lotte.vn khuyến mãi tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
@endif