@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các dịch vụ du lịch</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-du-lich">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các dịch vụ du lịch"/>
    <meta property="og:description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá đầy đủ và cập nhật hàng ngày liên tục cho các khuyến mãi về du lịch như Mytour, vé máy bay... Nếu bạn là một tín đồ du lịch xịn sò, đừng bỏ lỡ những chương trình du lịch tiết kiệm mà lại sang chảnh ở đây. Du lịch thông minh, YEAH!"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Danh mục tổng hợp khuyến mãi, mã giảm giá đầy đủ và cập nhật hàng ngày liên tục cho các khuyến mãi về du lịch như Mytour, vé máy bay... Nếu bạn là một tín đồ du lịch xịn sò, đừng bỏ lỡ những chương trình du lịch tiết kiệm mà lại sang chảnh ở đây. Du lịch thông minh, YEAH!"/>

    <meta name="keywords" content=""/>
@endsection

@section('content_km')
    
@endsection