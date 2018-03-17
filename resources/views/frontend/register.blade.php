@extends('frontend')

@section('title')
    <title>Vay vốn tín dụng thông minh | TaichinhSMART.vn</title>
@endsection

@section('meta')
    <meta property="og:type" content="website">
    <meta property="og:title" content="Vay vốn tín dụng thông minh - Tài chính SMART">
    <meta property="og:description"
          content="Dịch vụ đăng ký vay vốn trực tuyến từ những đối tác uy tín giúp quý khách tiết kiệm thời gian. Nhận những ưu đãi bất ngờ khi vay tiền tại Tài chính SMART! - Tài chính thông minh trong tầm tay của bạn.">
    <meta property="og:url" content="http://taichinhsmart.vn/vay-von-tin-dung">
    <meta property="og:site_name" content="Vay vốn tín dụng - Tài chính SMART">
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/og-vayvip.jpg">
    <meta name="keywords" content="vay tin chap, vay tieu dung, vay tien nhanh, vay khong the chap, vay vip, tin dung, tindungsmart, tin dung smart, vay tien thong minh, vay uy tin">
@endsection

@section('pageId')
    <div class="fb-customerchat"
         page_id="175253416410272"
         ref="">
    </div>
@endsection

@section('styles')

    <link rel="preload" href="/assets/news/fonts/SFD-Bold.woff2" as="font">
    <link href="/css/style.css" rel="stylesheet" type="text/css">

@endsection

@section('content')
<div class="container" style="margin-top: 10%;">
    <div class="form-dk">
        <div class="form-block">
            <div class="form-content form-left">
                <h3>Lợi ích của thẻ tín dụng</h3>
                <div class="form-left-content">
                    <div class="each-block-content">
                        <h4><i class="fa fa-check"></i> Không phải chịu lãi suất</h4>
                        <p>Bạn được ngân hàng ưu đãi trả không lãi suất 45 – 55 ngày. Sau khoảng thời gian này bạn có thể chọn hình thức trả hết hoặc trả một phần.</p>
                    </div>
                    <div class="each-block-content">
                        <h4><i class="fa fa-check"></i> Ưu đãi bất tận</h4>
                        <p>Khi mua sắm tại các siêu thị, trung tâm thương mại, trang thương mại điện tử lớn như Lazada, Tiki, Shopee,...</p>
                    </div>
                    <img src="/assets/image/credit-card.png">
                </div>
            </div>
            <div class="form-content form-right">
                <form method="post" action="{{url('/tin-dung/dang-ky')}}">
                    {{csrf_field()}}
                    <h2>Thẻ tín dụng - Xu thế mới<br>Đăng ký <span>FREE</span> ngay hôm nay</h2>
                    <div class="body-register">
                        <div class="row">
                            <div class="col">
                                <label>Họ và tên</label>
                                <input placeholder="Điền họ tên của bạn" name="name" required>
                            </div>
                            <div class="col right">
                                <label>Số điện thoại</label>
                                <input placeholder="Điền số điện thoại của bạn" name="phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Nghề nghiệp</label>
                                <input placeholder="Điền nghề nghiệp hiện tại của bạn" name="job" required>
                            </div>
                            <div class="col right">
                                <label>Tỉnh/TP làm việc</label>
                                <select name="region" required>
                                    @include('frontend.news.province')
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Mức lương hiện tại</label>
                                <input placeholder="Vd: 7000000" name="salary" required>
                            </div>
                            <div class="col right">
                                <label style="    width: 100%;">Lương được nhận qua</label>
                                <div style="    margin-top: 7px;">
                                    <input type="radio" name="salary_type" value="ck" style="width: 17px;transform: scale(1.3);" checked> Chuyển khoản
                                    <input type="radio" name="salary_type" value="tm" style="width: 17px;transform: scale(1.3);"> Tiền mặt
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Năm sinh</label>
                                <input placeholder="Điền năm sinh của bạn" name="birthday">
                            </div>
                            <div class="col right">
                                <label>Email</label>
                                <input placeholder="Điền Email của bạn" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <label>Thắc mắc (nếu có)</label>
                                <input placeholder="Điền thắc mắc của bạn" name="note">
                            </div>
                        </div>
                    </div>
                    <div class="footer-register">
                        <button type="submit" style="background: none;border: none;"><img src="/assets/image/register.png"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
