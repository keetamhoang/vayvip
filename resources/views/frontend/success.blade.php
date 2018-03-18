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
    <div class="menu-div"></div>
    <div class="container success-page">
        <div class="block">
            <h2>ĐĂNG KÝ THÀNH CÔNG!</h2>
            <div class="info">
                <h3>Bạn đã đăng ký làm thẻ tín dụng thành công, ngân hàng chúng tôi sẽ liên hệ với bạn sớm nhất để hoàn tất thủ tục. <a href="{{ url('/vay-von-tin-dung') }}">TaichinhSMART.vn</a> rất hân hạnh được phục vụ và chúc bạn mua sắm thật thông minh với thẻ tín dụng này nhé!</h3>
                <ul>
                    <li>
                        <p><i class="fa fa-check-circle"></i> Họ và tên: <span>{{ Request::input('name') }}</span></p>
                        <p><i class="fa fa-check-circle"></i> Số điện thoại: <span>{{ Request::input('phone') }}</span></p>
                        <p><i class="fa fa-check-circle"></i> Nghề nghiệp: <span>{{ Request::input('job') }}</span></p>
                        <p><i class="fa fa-check-circle"></i> Mức lương hiện tại: <span>{{ number_format(Request::input('salary'), 0, '.', '.') }} đ</span></p>
                        <p><i class="fa fa-check-circle"></i> Nhận lương bằng hình thức: <span>{{ Request::input('salary_type') == 'ck' ? 'Chuyển khoản' : 'Tiền mặt' }}</span></p>
                        <p><i class="fa fa-check-circle"></i> Tỉnh/TP: <span>{{ Request::input('region') }}</span></p>
                    </li>
                </ul>

                <div class="back">
                    <a href="{{ url('/tin-dung/dang-ky') }}"><i class="fa fa-arrow-left"></i> Quay lại</a>
                </div>
                <hr>

                <div class="footer-div">
                    <h3>Còn rất nhiều điều thú vị ở <a href="{{ url('/vay-von-tin-dung') }}">TaichinhSMART.vn</a> đang chờ bạn khám phá:</h3>
                    <div class="image-div">
                        <div class="other-left other">
                            <a href="{{ url('/khuyen-mai') }}" title="KHUYẾN MẠI MUA SẮM">
                                <img src="/assets/image/sale.png">
                            </a>
                        </div>
                        <div class="other-right other">
                            <a href="{{ url('/vay-von-tin-dung') }}" title="VAY VỐN TÍN DỤNG">
                                <img src="/assets/image/vayvontindung.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div id="" class=" col-lg-12" style="padding: 0px">
        <div class="kfa-footer-menu" style="">
            <div class="">
                <ul class="kfa-list-footer-menu">
                </ul>
                <!-- End .kfa-list-footer-menu -->
            </div>
        </div>
        <div class=" " style="padding: 0px 0px 30px;">
            <div class="" style="color: #777; text-align: center">
                <b style="font-weight: bold;">Tài chính SMART © 2018.</b><br><br>
                Mọi vấn đề liên quan xin liên hệ tới địa chỉ Email: taichinhsmart.vn@gmail.com
            </div>
        </div>
    </div>
@endsection
