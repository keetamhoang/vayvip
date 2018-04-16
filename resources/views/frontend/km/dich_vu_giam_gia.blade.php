@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} theo các loại hình dịch vụ</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/dich-vu-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} theo các loại hình dịch vụ"/>
    <meta property="og:description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá đầy đủ và cập nhật hàng ngày liên tục cho các dịch vụ siêu hot hiện nay. Khuyến mãi được tổng hợp từ các trang web thương mãi điện tử lớn tại Việt Nam. Đừng quên lưu lại để săn hàng giảm giá, tiết kiệm chi phí mua sắm nhé."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá đầy đủ và cập nhật hàng ngày liên tục cho các dịch vụ siêu hot hiện nay. Khuyến mãi được tổng hợp từ các trang web thương mãi điện tử lớn tại Việt Nam. Đừng quên lưu lại để săn hàng giảm giá, tiết kiệm chi phí mua sắm nhé."/>
    <meta name="keywords" content=""/>
@endsection

@section('content_km')
    
@endsection