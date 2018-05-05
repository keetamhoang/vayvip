@if ($store == 'Lazada')
    Mã giảm giá Lazada, Voucher Lazada khuyến mãi HOT tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
@elseif ($store == 'Tiki')
    Mã giảm giá Tiki tháng {{ \Carbon\Carbon::now()->format('m/Y') }}, Coupon Tiki khuyến mãi 200K
@endif