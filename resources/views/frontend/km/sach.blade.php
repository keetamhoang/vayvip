@extends('frontend.km.index')

@section('title')
    <title>Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các tựa sách và Văn phòng phẩm</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/sach-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Tổng hợp Mã giảm giá tháng {{ \Carbon\Carbon::now()->format('m/Y') }} cho các tựa sách và Văn phòng phẩm"/>
    <meta property="og:description"
          content="Nếu bạn là tín đồ của sách, đừng bỏ lỡ các mã giảm giá để làm giàu thêm kho tàng của mình. Nhiều lúc bạn sẽ phải bất ngờ với những mã giảm giá cực lớn từ các đơn vị phát hành đấy. Lưu lại và sử dụng ngay nhé."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>
@endsection

@section('content_km')
    
@endsection