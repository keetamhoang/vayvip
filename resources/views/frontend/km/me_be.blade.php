@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Mẹ và Bé</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-cho-me-va-be">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm Mẹ và Bé"/>
    <meta property="og:description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá cho các sản phẩm dành cho Mẹ và bé yêu. Khuyến mãi được tổng hợp từ các trang web thương mãi điện tử lớn tại Việt Nam. Các chị, các mẹ nhớ lưu lại để săn hàng giảm giá, tiết kiệm chi phí mua sắm nhé!"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.jpg"/>
@endsection

@section('content_km')
    
@endsection