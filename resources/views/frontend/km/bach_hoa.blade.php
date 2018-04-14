@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Bách hóa</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-bach-hoa">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Bách hóa"/>
    <meta property="og:description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá đầy đủ và cập nhật hàng ngày liên tục cho các mặt hàng bách hóa thông dụng. Khuyến mãi được tổng hợp từ các trang web thương mãi điện tử lớn tại Việt Nam. Đừng quên lưu lại để săn hàng giảm giá, tiết kiệm chi phí mua sắm nhé."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.jpg"/>
@endsection

@section('content_km')
    
@endsection