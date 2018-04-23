@extends('frontend.product.layout')

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="tỏi đen, tỏi đen blaga, toi den, cach lam toi den, tỏi đen có tác dung gì, máy làm tỏi đen, nồi làm tỏi đen, tac dung cua toi den">
    <meta name="description" content="Chỉ cần dùng 2-3 tép tỏi đen Blaga mỗi ngày, có thể phòng ngừa triệt để ung thư, ổn định đường huyết, bảo vệ cơ thể khỏi các vấn đề về tim mạch. Tỏi đen Blaga được chứng nhận Quốc tế, tự hào thương hiệu tỏi đen bán chạy nhất Việt Nam.">
    <title>Tỏi đen Blaga - Tỏi đen công nghệ Nhật Bản mới nhất</title>
    <link rel="stylesheet" href="/product/toiden/css/bootstrap.min.css">
    <link rel="stylesheet" href="/product/toiden/css/slick.css">
    <link rel="stylesheet" href="/product/toiden/css/slick-theme.css">
    <link rel="stylesheet" href="/product/toiden/css/hover-min.css">
    <link rel="stylesheet" href="/product/toiden/css/font-awesome.min.css">
    <link rel="stylesheet" href="/product/toiden/css/style.css">

    <!-- <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script> -->
    <script src="/product/toiden/js/jquery-3.1.1.min.js"></script>
    <script src="/product/toiden/js/bootstrap.min.js"></script>
    <script src="/product/toiden/js/slick.js"></script>
@endsection


@section('body')
    <div class="container-fluid1" style="width: 100%;display: inherit;">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <div id="for-web">
                    <div class="col-lg-4">
                        <div class="left">
                            <i class="fa fa-clock-o" style="font-size: 39px;margin-top: 5px;"></i>
                        </div>
                        <div class="left" style="margin-left: 8px;">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 4px;">Thời gian làm việc</p>
                            </div>
                            <div>
                                <strong>Từ 7h00 - 21h00</strong> (Cả T7, CN & Lễ)
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="padding-left: 80px;">
                        <div class="left">
                            <i class="fa fa-gift" style="font-size: 39px;margin-top: 5px;"></i>
                        </div>
                        <div class="left" style="margin-left: 8px;">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 4px;">Tỏi đen 1 nhánh <strong>Blaga</strong></p>
                            </div>
                            <div>
                                Giảm sốc tới <strong>40%</strong> - Giá chỉ <strong>680.000Đ/500gr</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="" style="margin-left: 8px;float: right">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 4px;">Tư vấn miễn phí:</p>
                            </div>
                            <div>
                                <strong><a href="#time-countdown">Đăng ký ngay</a></strong>
                            </div>
                        </div>
                        <div class="" style="float: right">
                            <i class="fa fa-volume-control-phone" style="font-size: 39px;margin-top: 5px;"></i>
                        </div>
                    </div>
                </div>
                <div id="for-mobile">
                    <div class="col-lg-6" style="padding-left: 5px;">
                        <div class="left">
                            <i class="fa fa-gift" style="font-size: 30px;margin-top: 7px;"></i>
                        </div>
                        <div class="left" style="margin-left: 8px;">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 1px;">Giảm sốc tới <strong>40%</strong></p>
                            </div>
                            <div>
                                Giá chỉ <strong>680.000Đ/500gr</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" style="overflow: hidden;padding-right: 0px;padding-left: 0px;">
                        <div class="left phone-nav">
                            <i class="fa fa-volume-control-phone" style="font-size: 30px;margin-top: 7px;"></i>
                        </div>
                        <div class="" style="text-align: right;padding-right: 10px;">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 1px;">Tư vấn miễn phí</p>
                            </div>
                            <div>
                                <strong><a href="#time-countdown">Đăng ký ngay</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="banner-left">
                            Phương pháp điều trị tiểu đường hiệu quả
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="banner-mid">
                            Giảm giá đặc biệt <span>40%</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="banner-right">
                            <div class="banner-right-top">
                                680.000Đ/500gr
                            </div>
                            <div class="banner-right-bot">
                                Giá thông thường <span>1.150.000đ</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="banner-img">
                <a href="#time-countdown"><img src="/product/toiden/image/toi-den-blaga-1.png" alt=""></a>
            </div>
        </div> <!-- banner -->

        <div class="box2">
            <img src="/product/toiden/image/toi-den-blaga-icon1.png" alt="" id="box2-absimg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-4">
                        <img src="/product/toiden/image/toi-den-blaga-leaf1.png" alt="" id="box2-absimg2">
                        <div class="box2-list">
                            <div class="box2-title">
                                BỆNH TIỂU ĐƯỜNG - 1 TRONG 4 “ĐẠI DỊCH” CỦA THẾ KỶ 21
                            </div>
                            <div class="box2-note">
                                “Việt Nam là một trong số những quốc gia có tốc độ gia tăng bệnh nhân
                                đái tháo đường cao nhất thế giới, với tỉ lệ ở mức báo động 211%”
                            </div>
                            <div class="box2-text">
                                Cứ 20 người Việt Nam trưởng thành thì có 1 người mắc bệnh đái tháo đường.
                                5 triệu người Việt Nam mắc bệnh tiểu đường

                            </div>
                            <div class="box2-text">
                                Mỗi ngày có 150 người Việt chết vì đái tháo đường, cao gấp 7 lần số người tử vong vì tai nạn giao thông
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-8">
                        <div class="percent">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="percent-left">
                                        <img src="/product/toiden/image/toi-den-blaga-icon2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="percent-right">
                                        Người không biết
                                        mình bị bệnh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="percent">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="percent-left">
                                        <img src="/product/toiden/image/toi-den-blaga-icon3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="percent-right">
                                        Chỉ phát hiện ra
                                        bệnh khi đã có biến chứng
                                        nguy hiểm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- box2 -->

        <div class="box3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <div class="box3-content">
                            <div class="box3-title">
                                BỆNH TIỂU ĐƯỜNG - KẺ GIẾT NGƯỜI THẦM LẶNG!
                            </div>
                            <div class="box3-text">
                                “Tiến triển âm thầm, cùng tỉ lệ tử vong cao - cứ mỗi phút trôi qua có
                                6 người bệnh tử vong trên toàn cầu”
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/product/toiden/image/toi-den-blaga-2.png" alt="" id="box3-absimg">
            </div>
        </div> <!-- box3 -->

        <div class="box4">
            <div class="container">
                <div class="box4-content">
                    <div class="box4-title">
                        Biến chứng tim mạch
                    </div>
                    <div class="box4-text">
                        80% người bệnh đái tháo đường chết do biến chứng tim mạch
                    </div>
                </div>
                <div class="box4-content">
                    <div class="box4-title">
                        Tai biến mạnh máu não
                    </div>
                    <div class="box4-text">

                        Người bị bệnh tiểu đường có nguy cơ bị tai biến mạch máu não cao hơn người bình thường 2-4 lần.
                    </div>
                </div>
                <div class="box4-content">
                    <div class="box4-title">
                        Suy giảm chức năng thận
                    </div>
                    <div class="box4-text">

                        20% người bệnh đái tháo đường bị bệnh thận, gây suy thận, có thể phải chạy thận nhân tạo hoặc ghép thận.
                    </div>
                </div>
                <div class="box4-content">
                    <div class="box4-title">
                        Tàn phế
                    </div>
                    <div class="box4-text">

                        Biến chứng cắt cụt chân là biến chứng thường gặp mà người mắc đái tháo đường sợ nhất, ước tính có hơn 5% các bệnh nhân đái tháo đường bị cắt cụt ngón chân, bàn chân, hoặc cẳng chân. Cứ mỗi 30 giây trôi qua, trên thế giới lại có một người bệnh ĐTĐ bị cắt cụt chân.
                    </div>
                </div>
                <div class="box4-content">
                    <div class="box4-title">
                        Nguy cơ tử vong
                    </div>
                    <div class="box4-text">
                        Cao gấp 2-4 lần so với người bình thường
                    </div>
                </div>
            </div>
            <img src="/product/toiden/image/toi-den-blaga-4.png" alt="" id="box4-absimg">
            <img src="/product/toiden/image/toi-den-blaga-3.png" alt="" id="box4-absimg2">
        </div>

        <div class="box5">
            <div class="container">
                <div class="box5-title">
                    10 DẤU HIỆU PHỔ BIẾN CẢNH BÁO NGUY CƠ BỊ TIỂU ĐƯỜNG CAO
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                        <div class="box5-list">
                            <div class="box5-content">
                                <span style="color: #d99500">1.</span> Khát nước và đi tiểu nhiều
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">2.</span> Chậm lành vết thương
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">3.</span> Nhìn mờ
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">4.</span> Nhiễm trùng thường xuyên
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">5.</span> Khó chịu, cau có
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-1">
                        <div class="box5-list">
                            <div class="box5-content">
                                 <span style="color: #d99500">6.</span> Đói liên tục
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">7.</span> Sụt cân đột ngột
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">8.</span> Suy nhược, mệt mỏi
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">9.</span> Da khô, ngứa hoặc có vảy
                            </div>
                            <div class="box5-content">
                                 <span style="color: #d99500">10.</span> Ngứa ran hoặc tê
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box6">
            <img src="/product/toiden/image/toi-den-blaga-6.png" alt="" id="box6-absimg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="box6-left">
                            <img src="/product/toiden/image/toi-den-blaga-5.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="box6-right">
                            <div class="box6-title">
                                Tỏi đen 1 nhánh <span>Blaga</span>
                            </div>
                            <div class="box6-note">
                                GIẢI PHÁP AN TOÀN VÀ HIỆU QUẢ CHO
                                NGƯỜI BỆNH TIỂU ĐƯỜNG!
                            </div>
                            <div class="box6-text">
                                Nghiên cứu cho thấy tỏi đen có thể ảnh hưởng đến gan glycogen tổng hợp, làm giảm lượng đường trong máu và tăng hoocmon insulin. Allicin trong tỏi đen cũng có thể làm giảm lượng đường trong máu bình thường, tỏi đen cũng chứa “S -methyl cysteine sulfoxide và “S – allyl cysteine sulfoxide, ” Đây là 2 loại sulfua có thể ức chế G-6-P enzyme NADPH, để ngăn chặn sự tàn phá của insulin, tác dụng hạ đường huyết tuyệt vời.”
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mua-ngay">
            <a href="#time-countdown"><img src="/assets/image/mua-ngay.gif"></a>
        </div>

        <div class="box7">
            {{--<img src="/product/toiden/image/bg2.jpg" alt="" id="box7-bg">--}}
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="box7-title">
                            THỰC PHẨM VÀNG <br>
                            CHO MỘT SỨC KHỎE KIM CƯƠNG!
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="box7-content">
                            Tỏi đen một nhánh Blaga được làm từ tỏi tươi chỉ có một nhánh duy nhất được chọn lọc kỹ càng, trải qua giai đoạn lên men chậm với điều kiện khắt khe về độ ẩm và nhiệt độ. Sau từ 1 đên 2 tháng lên men, hoạt chất có trong các tép tỏi tăng lên rõ rệt, trong đó hoạt chất sallyl lcystein (SAC) được coi là quan trọng nhất tăng 6 lần, fructose tăng 52 lần, hàm lượng đường tăng 13 lần, đặc biệt hợp chất SOD (superoxide dismutase có tác dụng phòng ngừa ung thư tăng gấp 10 lần so với tỏi tươi.
                        </div>
                    </div>
                </div>
            </div>
            <img src="/product/toiden/image/toi-den-blaga-8.png" alt="" id="box7-absimg">
        </div>

        <div class="box8">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="box8-left">
                            <img src="/product/toiden/image/toi-den-blaga-9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="box8-right">
                            <div class="box8-title">
                                CÔNG DỤNG SẢN PHẨM
                            </div>
                            <div class="box8-text">
                                <p>- Có tác dụng rất tốt cho người bị bệnh tiểu đường</p>
                            </div>
                            <div class="box8-text">
                                <p>- Bảo vệ cơ thể phòng ngừa ung thư và giảm cholesteron</p>
                            </div>
                            <div class="box8-text">
                                <p>- Tăng cường miễn dịch, chống vi khuẩn và nhiễm trùng</p>
                            </div>
                            <div class="box8-text">
                                <p>- Chống oxy hóa (sự lão hóa) và ngăn ngừa bệnh tật</p>
                            </div>
                            <div class="box8-text">
                                <p>- Điều trị tăng huyết áp</p>
                            </div>
                            <div class="box8-text">
                                <p>- Cơ chế hạn chế tăng men gan, giải độc và bảo vệ gan</p>
                            </div>
                            <div class="box8-text">
                                <p>- Tăng trí nhớ, cải thiện chức năng não</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box9">
            <img src="/product/toiden/image/toi-den-blaga-bg3.jpg" alt="" id="target-absimg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="target-left">
                            <div class="target-left-title">
                                ĐỐI TƯỢNG SỬ DỤNG
                            </div>
                            <div class="target-left-text">
                                “Các chuyên gia khuyên dùng tỏi đen một nhánh Blaga mỗi ngày để có sức khỏe tốt không bệnh tật và không phải dùng đến thuốc kháng sinh”
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="target-right">

                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Người bệnh tim mạch, tiểu đường
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Các trường hợp béo phì hoặc mỡ trong máu cao, người cao huyết áp, người có nguy cơ tai biến mạch máu não
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Người bị gan nhiễm mỡ, viêm gan hoặc dùng nhiều bia rượu, thuốc lá
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Người thường xuyên tiếp xúc với môi trường độc hại
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Người muốn tăng cường sức khỏe, tăng cường sức đề kháng, phòng ngừa ung thư, người già yếu, cơ thể suy nhược
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="target-right-text">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">
                                    </div>
                                    <div class="col-xs-12 col-sm-10">
                                        <div class="target-right-text-right">
                                            <i class="fa fa-male"></i> Người cần tăng đề kháng khi bị u bướu, sau phẫu thuật, đang điều trị hoặc sau điều trị bằng tia xạ, hóa chất.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/product/toiden/image/toi-den-blaga-10.png" alt="" id="box9-absimg2">
            <img src="/product/toiden/image/toi-den-blaga-12.png" alt="" id="box9-absimg3">
        </div>

        <div class="box10">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="box10-left">
                            <img src="/product/toiden/image/toi-den-blaga-5.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="box10-right">
                            <div class="box10-title">
                                Cách sử dụng
                            </div>
                            <div class="box10-content">
                                <span style="color: #d99500;">1.</span> Bóc vỏ ăn trực tiếp hoặc hấp nóng trước khi ăn
                            </div>
                            <div class="box10-content">
                                <span style="color: #d99500;">2.</span> Chế biến với các món khác tùy theo khẩu vị
                            </div>
                            <div id="danh-gia"></div>
                            <div class="box10-content">
                                <span style="color: #d99500;">3.</span> Dùng từ 2-3 củ/ngày
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box11">
            <div class="container">
                <div class="box11-title">
                    PHẢN HỒI TỪ KHÁCH HÀNG
                </div>
                <div class="box11-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>
                            <div class="box11-text">
                                2 tháng trước tôi được con mua tặng hộp tỏi đen này để hỗ trợ mẹ điều trị tiểu đường. Tỏi đen thì cũng không phải là ít phổ biển nữa, công dụng của nó thì trên ti vi báo đài tôi cũng nghe. Tôi vẫn dùng hàng ngày và thường hay ăn trực tiếp vì vị của nó cũng rất dễ ăn và ngon. Sức khỏe của tôi có sự cải thiện tương đối, hệ tiêu hóa tốt hơn hẳn sau 1 tuần đầu dùng và tôi vẫn đang dùng hàng ngày. đường huyết sau ăn tôi vẫn cố giữ ổn định 6.5 đến dưới 7 mmol. Tôi nghĩ dù có dùng bổ sung gì thì mình vẫn nên kết hợp với chế độ thường ngày tốt, cố gắng giữ gìn.
                            </div>
                            <div class="box11-avatar">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-sm-offset-3">
                                        <div class="box11-avatar-box">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-5">
                                                    <div class="box11-avatar-img">
                                                        <img src="/product/toiden/image/toi-den-blaga-ava1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="box11-avatar-content">
                                                        <div class="box11-avatar-name">
                                                            BÁC QUỲNH CHÂU
                                                        </div>
                                                        <div class="box11-avatar-name">
                                                            58 tuổi - Hà Nội
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>
                            <div class="box11-text">
                                Tôi rất sợ các sản phẩm được quảng cáo tùm lum trên mạng nên tôi đã tìm hiểu rất kĩ về chứng nhận rồi mới mua. Khi dùng tỏi thì thấy rất thoải mái và không khó chịu như nhiều loại thuốc khác. Tôi thấy tỏi đen đúng nghĩa là một sản phẩm hỗ trợ tăng cường sức khỏe một cách tổng quát, từ đó  có tác dụng chuyên hơn để chống tiểu đường.
                            </div>
                            <div class="box11-avatar">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-sm-offset-3">
                                        <div class="box11-avatar-box">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-5">
                                                    <div class="box11-avatar-img">
                                                        <img src="/product/toiden/image/toi-den-blaga-ava2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="box11-avatar-content">
                                                        <div class="box11-avatar-name">
                                                            BÁC QUANG HÀO
                                                        </div>
                                                        <div class="box11-avatar-name">
                                                            46 tuổi - Hải Phòng
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-10 col-sm-offset-1">--}}
                            {{--<div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>--}}
                            {{--<div class="box11-text">--}}
                                {{--Tôi sử dụng và thấy rất tốt. Tôi đã dùng liên tiếp đến nay là 3 tháng, giá cũng không quá đắt, dùng tăng cường sức khỏe và ổn định tiêu hóa, đường huyết. Tôi nghĩ rằng khi mà hấp thụ tốt bài tiết tốt vận động tốt thì tiểu đường cũng sẽ dần biến mất.--}}
                            {{--</div>--}}
                            {{--<div class="box11-avatar">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-12 col-sm-5 col-sm-offset-3">--}}
                                        {{--<div class="box11-avatar-box">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-12 col-sm-5">--}}
                                                    {{--<div class="box11-avatar-img">--}}
                                                        {{--<img src="/product/toiden/image/ava1.png" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xs-12 col-sm-7">--}}
                                                    {{--<div class="box11-avatar-content">--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--BÁC VŨ CÔNG CHƯƠNG--}}
                                                        {{--</div>--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--58 tuổi - Hà Nội--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-10 col-sm-offset-1">--}}
                            {{--<div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>--}}
                            {{--<div class="box11-text">--}}
                                {{--Tôi rất sợ các sản phẩm được quảng cáo tùm lum trên mạng nên tôi đã tìm hiểu rất kĩ về chứng nhận rồi mới mua. Khi dùng tỏi thì thấy rất thoải mái và không khó chịu như nhiều loại thuốc khác. Tôi thấy tỏi đen đúng nghĩa là một sản phẩm hỗ trợ tăng cường sức khỏe một cách tổng quát, từ đó  có tác dụng chuyên hơn để chống tiểu đường.--}}
                            {{--</div>--}}
                            {{--<div class="box11-avatar">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-12 col-sm-5 col-sm-offset-3">--}}
                                        {{--<div class="box11-avatar-box">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-12 col-sm-5">--}}
                                                    {{--<div class="box11-avatar-img">--}}
                                                        {{--<img src="/product/toiden/image/ava1.png" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xs-12 col-sm-7">--}}
                                                    {{--<div class="box11-avatar-content">--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--BÁC HỒ THỊ NGA--}}
                                                        {{--</div>--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--58 tuổi - Hà Nội--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-10 col-sm-offset-1">--}}
                            {{--<div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>--}}
                            {{--<div class="box11-text">--}}
                                {{--Đăng ký thông tin được tư vấn nhanh chóng, nhiệt tình, hiểu thêm nhiều kiến thức về chăm sóc sức khỏe khi bị tiểu đường. Tôi đã tin tưởng mua và hài lòng.--}}
                            {{--</div>--}}
                            {{--<div class="box11-avatar">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-12 col-sm-5 col-sm-offset-3">--}}
                                        {{--<div class="box11-avatar-box">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-12 col-sm-5">--}}
                                                    {{--<div class="box11-avatar-img">--}}
                                                        {{--<img src="/product/toiden/image/ava1.png" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xs-12 col-sm-7">--}}
                                                    {{--<div class="box11-avatar-content">--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--BÁC HOÀI SA--}}
                                                        {{--</div>--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--58 tuổi - Hà Nội--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-10 col-sm-offset-1">--}}
                            {{--<div class="damuahang"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>--}}
                            {{--<div class="box11-text">--}}
                                {{--Đâu phải thuốc kích thích hay thuốc tiên đâu, không phải ai dùng cũng ngay lập tức là hiệu quả được. Tuần đầu tôi dùng nhưng không thấy hiệu quả tôi phải gọi lại để hỏi kĩ vấn đề và định không dùng nữa, nhưng được tư vấn kĩ hơn về ăn uống chăm sóc bản thân nên đã dùng tiếp thì tuần thứ 2 đã hiệu quả hơn rất nhiều. Tôi đang thuộc tiểu đường tuýp 2 và luôn cần chú ý giữ gìn chỉ số.--}}
                            {{--</div>--}}
                            {{--<div class="box11-avatar">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-12 col-sm-5 col-sm-offset-3">--}}
                                        {{--<div class="box11-avatar-box">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-12 col-sm-5">--}}
                                                    {{--<div class="box11-avatar-img">--}}
                                                        {{--<img src="/product/toiden/image/ava1.png" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xs-12 col-sm-7">--}}
                                                    {{--<div class="box11-avatar-content">--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--BÁC NGUYỄN THỊ BẢY--}}
                                                        {{--</div>--}}
                                                        {{--<div class="box11-avatar-name">--}}
                                                            {{--58 tuổi - Hà Nội--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div id="contact"></div>
        </div>

        <div class="contact" >
            <div class="container">


                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="banner-left">
                            Tỏi đen Blaga<br>Tiểu đường đi xa
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="banner-mid">
                            Giảm giá đặc biệt <span>40%</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="banner-right">
                            <div class="banner-right-top">
                                680.000Đ/500gr
                            </div>
                            <div class="banner-right-bot">
                                Giá thông thường <span>1.150.000đ</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="contact-info__left">
                            <div class="countdown">
                                <div class="countdown-text">
                                    Giảm giá sẽ kết thúc sau
                                </div>
                                <div class="time-countdown" id="time-countdown"><span>8</span> : <span>46</span> : <span>23</span></div>

                            </div>
                            <div class="contact-info__right__form">
                                <form id="dathang-form" method="POST" action="{{ url('san-pham/dang-ky') }}" onsubmit="return Payment()">
                                    {{ csrf_field() }}
                                    <input name="sp" type="hidden" value="toiden_blaga">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Họ và tên">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" aria-describedby="sizing-addon1" name="address" id="address" type="text" placeholder="Địa chỉ">
                                    </div>


                                    <div class="form-group">
                                        <input placeholder="Số điện thoại" id="phone" name="mobile" type="tel" class="form-control" aria-describedby="sizing-addon1" onkeypress="return forceNumber(event);" maxlength="11">
                                    </div>


                                    <input class="form-control" name="title" id="title" type="hidden" value="Thông tin đăng ký được gửi từ Tỏi đen 1 nhánh Blaga">

                                    <h4 style="text-align: center;line-height: 32px;">Đầu tư cho sức khỏe của bản thân là sự đầu tư có ích nhất!</h4>
                                    <div class="loading-gif" style="">
                                        <img src="/product/toiden/image/toi-den-blaga-loading.gif">
                                    </div>
                                    <button class="btnsubmit" type="submit">mua ngay</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <img src="/product/toiden/image/toi-den-blaga-13.png" alt="" id="contact-absimg">
        </div> <!-- contact -->

        <footer>
            <div class="container">
                <div class="footer-top">
                    CÔNG TY CỔ PHẦN DƯỢC PHẨM KHANG GIA
                </div>
                <div class="footer-bot">
                    Số 40, biệt thự 3, Bán đảo Linh Đàm, quận Hoàng Mai, thành phố Hà Nội


                </div></div>
        </footer>
        <div id="footer-mobile">
            <div class="col col-lg-4 left" style="background: #00ab4d">
                <a href="#time-countdown"><i class="fa fa-shopping-cart"></i> ĐẶT HÀNG</a>
            </div>
            <div class="col col-lg-4 left" style="background: #d81921">
                <a href="#contact"><i class="fa fa-gift"></i> ƯU ĐÃI</a>
            </div>
            <div class="col col-lg-4 left" style="background: #ff9002">
                <a href="#danh-gia"><i class="fa fa-check-square-o"></i> ĐÁNH GIÁ</a>
            </div>
        </div>


        <script>
            function forceNumber(event){
                var value = document.getElementById('phone').value;
                var keyCode = event.keyCode ? event.keyCode : event.charCode;
                if(keyCode != 48 && value.length < 1)
                {BootstrapDialog.alert({
                    title: 'Thông Báo',
                    message: 'Số đầu là 0',
                    type: BootstrapDialog.TYPE_WARNING,
                    size: BootstrapDialog.SIZE_SMALL,
                    closable: true,
                    buttonLabel: 'Close'
                });
                    $("#dathang-form #phone").focus();
                    return false;}
                if((keyCode < 48 || keyCode > 58) && keyCode != 8 && keyCode != 9 && keyCode != 32 && keyCode != 37 && keyCode != 39 && keyCode != 40 && keyCode != 41 && keyCode != 43 && keyCode != 45 && keyCode != 46)
                {BootstrapDialog.alert({
                    title: 'Thông Báo',
                    message: 'Vui lòng nhập số.',
                    type: BootstrapDialog.TYPE_WARNING,
                    size: BootstrapDialog.SIZE_SMALL,
                    closable: true,
                    buttonLabel: 'Close'
                });
                    $("#dathang-form #phone").focus();
                    return false;}
            }

        </script>


        <script async="" src="/product/toiden/js/main2.js" type="text/javascript"></script>
        <script async="" src="/product/toiden/js/flickity.pkgd.min.js" type="text/javascript"></script>
        <script async="" src="/product/toiden/js/bootstrap-dialog.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.box11-content').slick({
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
            })
        </script>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date(new Date().getTime() + 12 * 47 * 56 * 1000).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds

                var hours = Math.floor(distance / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("time-countdown").innerHTML = "<span>"+hours + "</span> : "
                    + "<span>"+ minutes + "</span> : " + "<span>"+seconds+"</span>";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time-countdown").innerHTML = "EXPIRED";
                }
            }, 1000);

            $('#dathang-form').submit(function (e) {
                e.preventDefault();

                $('.btnsubmit').hide();
                $('.loading-gif').show();

                if ($('#name').val().trim() != '' && $('#phone').val().trim() != '' && $('#address').val().trim() != '') {
                    var form = $(this).serialize();
                    var url = $(this).attr('action');

                    $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: form,
                        success: function (response) {
                            if (response.status == 1) {
//                                BootstrapDialog.alert({
//                                    title: 'Đặt hàng thành công!',
//                                    message: 'Cảm ơn bạn đã đặt hàng Tỏi đen 1 nhánh Blaga. Chúng tôi sẽ liên hệ sớm nhất với bạn sau khi nhận được đơn hàng này.',
//                                    type: BootstrapDialog.TYPE_SUCCESS,
//                                    size: BootstrapDialog.SIZE_LARGE,
//                                    closable: true,
//                                    buttonLabel: 'Đóng'
//                                });
//
//                                $('#name').val('');
//                                $('#phone').val('');
//                                $('#address').val('');
                                window.location.replace(response.link);
                            } else {
                                BootstrapDialog.alert({
                                    title: 'Đặt hàng không thành công!',
                                    message: response.message,
                                    type: BootstrapDialog.TYPE_WARNING,
                                    size: BootstrapDialog.SIZE_LARGE,
                                    closable: true,
                                    buttonLabel: 'Đóng'
                                });

                                $('.btnsubmit').show();
                                $('.loading-gif').hide();
                            }
                        }
                    });
                } else {
                    $('.btnsubmit').show();
                    $('.loading-gif').hide();
                }
            });
        </script>


    </div>
@endsection