@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm đồ gia dụng</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/do-gia-dung-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các sản phẩm đồ gia dụng"/>
    <meta property="og:description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá cho các sản phẩm gia dụng. Khuyến mãi được tổng hợp từ các trang web thương mãi điện tử lớn tại Việt Nam. Các chị, các mẹ nhớ lưu lại để săn hàng giảm giá, tiết kiệm chi phí mua sắm nhé!"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>
@endsection

@section('content_km')
    
@endsection