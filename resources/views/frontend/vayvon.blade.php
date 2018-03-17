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

    <style>
        @media (min-width: 768px) {
            .modal-dialog {
                margin: 100px auto;
            }
        }

        .modal-header .close {
            margin-top: -22px;
        }

        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 767px) {
            .action_btn_mid {
                padding: 0;
                margin-top: 30px;
            }
        }

        #tai-sao img {

        }
    </style>
@endsection

@section('content')
    <!-- HOME SLIDER -->
    <div class="vay-kinh-doanh" id="vay-tin-chap">
        <div class="home-banner vay-vip-xe-may">
            <div class="container">
                <div class="hero intro1 text-center vay-vip-xe-may">
                    <img src="/assets/image/vay-vip-logo.png">
                    <div class="vay-vip-col ">
                        <div class="col-md-4 phe-duyet vay-vip-content"><img class="ul-icon" src="/assets/image/ul-icon.png"> Đã vay nơi khác vẫn có thể được hỗ trợ</div>
                        <div class="col-md-4 col-4-width vay-vip-content"><img class="ul-icon" src="/assets/image/ul-icon.png"> Tư vấn ngay trong 24h</div>
                        <div class="col-md-4 col-4-width    vay-vip-content khong-tham-dinh"><img class="ul-icon"
                                                                                                  src="/assets/image/ul-icon.png"> Hồ sơ thủ tục đơn giản
                        </div>

                    </div>


                    <div class="top-form">
                        {{--<div class="row">--}}
                            {{--<div class="col-md-4 col-md-offset-4 col">--}}
                                {{--<div class="inputt input_change">--}}
                                    {{--<span class="message_icon"><img src="/assets/image/icon_bank.png"></span>--}}
                                    {{--<select class="form-control name bank" name="bank" id="top-bank">--}}
                                        {{--<option value="" selected>-- Chọn đơn vị cho vay --</option>--}}
                                        {{--<option value="UNKNOWN">Tư vấn đơn vị phù hợp cho tôi</option>--}}
                                        {{--<option value="OCB">Ngân hàng OCB</option>--}}
                                        {{--<option value="DoctorDong">Doctor Đồng</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row">
                            <div class="col-md-4 col">
                                <div class="inputt input_change">
                                    <span class="message_icon"><img src="/assets/image/icon_name.png"></span>
                                    <input type="text" required="" placeholder="Họ và tên" id="top-name"
                                           class="form-control name" name="name">
                                </div>
                            </div>
                            <div class="col-md-4 col">
                                <div class="inputt input_change">
                                    <span class="message_icon"><span class="message_icon"><img src="/assets/image/icon_phone.png"></span></span>
                                    <input type="text" required="" placeholder="Số điện thoại " id="top-phone"
                                           class="form-control phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-4 col">
                                <div class="inputt input_change">
                                    <span class="message_icon"><span class="message_icon"><img src="/assets/image/icon_email.png"></span></span>
                                    <input type="text" required="" placeholder="Email " id="top-email"
                                           class="form-control phone" name="email">
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-4 col">
                                <div class="sunmite_button">
                                    <button name="ok" type="submit" id="dang-ky-btn">Đăng ký khoản vay ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="uu-dai-btn" style="">
                            <a style="" class="button" href="{{ url('/tin-tuc/the-tin-dung-la-gi-12') }}"><i class="fa fa-gift"></i> ƯU ĐÃI LỚN THÁNG {{ \Carbon\Carbon::now()->month }} KHI MỞ THẺ TÍN DỤNG</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <!-- HOME SLIDER -->
    <!-- about  area -->
    <div class="about_area" id="khoan-vay" style="padding-bottom:0px">
        <div class="container">

            <div class="row">
                <!--section title-->
                <div class="col-md-12">
                    <div class="section_title">
                        <h2 class="title">Bạn muốn vay bao nhiêu?</h2>
                        <!--span class="title-border"></span-->
                        <div class="title-border-img"><img src="/assets/image/title-border.png"></div>

                    </div>
                </div>
                <!--end section title-->
            </div>
            <div class="text-center">Dùng chuột để chọn khoản vay và thời hạn vay</div>
            <div class="row main_slider">
                <!--section title-->
                <div class="col-md-2 col-md-offset-1">
                    <label>SỐ TIỀN VAY</label>


                </div>
                <div class="col-md-8">
                    <input class="loan_slider" id="so_tien_vay" type="text" name="so_tien_vay" data-provide="slider"
                           data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="20"
                           data-slider-tooltip="hide" style="display: none;" data-value="20" value="20">
                </div>

            </div>
            <div class="row main_slider">
                <!--section title-->
                <div class="col-md-2 col-md-offset-1">
                    <label>KỲ HẠN VAY</label>


                </div>
                <div class="col-md-8">
                    <input class="loan_slider" id="ky_han_vay" type="text" name="ky_han_vay" data-provide="slider"
                           data-slider-min="1" data-slider-max="36" data-slider-step="1" data-slider-value="6"
                           data-slider-tooltip="hide" style="display: none;" data-value="6" value="6">
                </div>

            </div>
            <div class="row main_slider so_tien">
                <!--section title-->
                <div class="col-md-4 col-md-offset-1">
                    <label>SỐ TIỀN CẦN TRẢ HÀNG THÁNG</label>


                </div>
                <div class="col-md-3 so_tien_container">
                    <label id="so_tien_hang_thang"> 3.490.606</label><span> đồng<sup><i>(*)</i></sup></span>
                    <span class="tham_khao"> (*) Thông tin trên chỉ mang tính chất tham khảo</span>
                </div>
                <div class="col-md-3">
                    <div class="sunmite_button">
                        <a href="#vay-ngay"
                           class="button">NHẬN NGAY KHOẢN VAY</a>
                    </div>
                </div>

            </div>


        </div>
        <div class="features">
            <div class="container">
                <div class="row">
                    <!--single Item-->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="icon"><img src="/assets/image/icon1.png"></div>
                        <div class="about_content">
                            <!--h2><span>Không cần thế chấp</span></h2-->
                            <p>Bạn không cần thế chấp tài sản, không cần bảo lãnh của công ty</p>
                        </div>
                    </div>
                    <!--single Item-->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="icon"><img src="/assets/image/icon2.png"></div>
                        <div class="about_content">
                            <!--h2><span>Thủ tục đơn giản</span></h2-->
                            <p>Thủ tục, chứng từ cực kỳ đơn giản</p>
                        </div>
                    </div>
                    <!--single Item-->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="icon"><img src="/assets/image/icon3.png"></div>
                        <div class="about_content">
                            <!--h2><span>Simple Documents</span></h2-->
                            <p>Phê duyệt và nhận tiền nhanh chóng, giải quyết nhu cầu cần tiền nhanh của bạn</p>
                        </div>
                    </div>
                    <!--single Item-->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="icon"><img src="/assets/image/icon4.png"></div>
                        <div class="about_content">
                            <!--h2><span>Up to 500 million</span></h2-->
                            <p>Số tiền vay lên đến 500 triệu, đáp ứng đầy đủ nhu cầu vay tiêu dùng</p>
                        </div>
                    </div>
                    <!-- end single Item-->
                </div>
            </div>
        </div>
    </div>
    <!-- end about  area -->


    <div id="cac-goi-vay" class="pricing_area">
        <div class="container">
            <div class="row">
                <!--section title-->
                <div class="col-md-12">
                    <div class="section_title">
                        <h2 class="title">Các gói vay tiêu dùng từ tài chính smart</h2>
                        <!--span class="title-border"></span-->
                        <div class="title-border-img"><img src="/assets/image/title-border.png"></div>
                    </div>
                </div>
                <!--end section title-->
            </div>
            <div class="row">
                <div class="pricing-container">
                    <!--single Pricing Table-->
                    <div class="col-md-3 pd">
                        <div class="pricing">
                            <div class="pricing_content">
                                <div class="single_pricint">
                                    <div class="prising_top">
                                        <h2>KH có thu nhập từ lương</h2>
                                    </div>
                                    <div class="prising_middle">
                                        <p>
                                            Khách hàng đang công tác tại các doanh nghiệp, nhận lương bằng tiền mặt hoặc
                                            chuyển khoản. <br>
                                        </p>
                                        <ul>
                                            <br>
                                            <br>
                                            <li class="no-border"><b>Hồ sơ yêu cầu:</b></li>
                                            <li>Bản sao CMND/ Hộ chiếu/Thẻ căn cước</li>
                                            <li>Chứng từ chứng minh nơi ở hiện tại</li>
                                            <li>Hồ sơ chứng minh thu nhập và công việc</li>

                                        </ul>
                                    </div>
                                    <div class="prising_bottom">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end  single Pricing Table-->
                    <div class="col-md-3 pd">
                        <div class="pricing">
                            <div class="pricing_content">
                                <div class="single_pricint">
                                    <div class="prising_top">
                                        <h2>KH là các cá nhân kinh doanh</h2>
                                    </div>
                                    <div class="prising_middle">
                                        <p>
                                            Khách hàng là các cá nhân kinh doanh tại chợ hoặc các tuyến phố hoặc làng
                                            nghề<br><br>
                                        </p>
                                        <ul>
                                            <br>
                                            <br>
                                            <li class="no-border"><b>Hồ sơ yêu cầu:</b></li>
                                            <li>Bản sao CMND/Hộ chiếu/Thẻ căn cước</li>
                                            <li>Chứng từ chứng minh nơi ở hiện tại</li>
                                            <li>HS chứng minh thu nhập &amp; kinh doanh</li>


                                        </ul>
                                    </div>
                                    <div class="prising_bottom">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end  single Pricing Table-->

                    <div class="col-md-3 pd">
                        <div class="pricing">
                            <div class="pricing_content">
                                <div class="single_pricint">
                                    <div class="prising_top">
                                        <h2>KH công tác tại trường học,<br> bệnh viện</h2>
                                    </div>
                                    <div class="prising_middle">
                                        <p>
                                            Khách hàng là giáo viên công tác tại trường mầm non đến đại học. Khách hàng là
                                            bác sĩ, y tá, điều dưỡng…và các vị trí khác đang công tác tại bệnh viện, cơ sở y
                                            tế.
                                        </p>
                                        <ul>
                                            <li class="no-border"><b>Hồ sơ yêu cầu:</b></li>
                                            <li>Bản sao CMND/Hộ chiếu/Thẻ căn cước</li>
                                            <li>Hồ sơ chứng minh thu nhập và môn học giảng dạy.</li>

                                            <li class="hol"></li>

                                        </ul>
                                    </div>
                                    <div class="prising_bottom">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end  single Pricing Table-->

                    <div class="col-md-3 pd">
                        <div class="pricing">
                            <div class="pricing_content">
                                <div class="single_pricint">
                                    <div class="prising_top">
                                        <h2>KH thuộc các đối tượng khác</h2>
                                    </div>
                                    <div class="prising_middle">
                                        <p>
                                            Khách hàng không có chứng minh thu nhập: học sinh, sinh viên, người nội trợ,…<br><br>
                                        </p>
                                        <ul>
                                            <br>
                                            <br>
                                            <li class="no-border"><b>Hồ sơ yêu cầu:</b></li>
                                            <li>Bản sao CMND/Hộ chiếu/Thẻ căn cước</li>
                                            <li>Chứng từ chứng minh nơi ở hiện tại (giấy tạm trú tạm vắng,...)</li>
                                            <li class="hol"></li>


                                        </ul>
                                    </div>
                                    <div class="prising_bottom">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single Pricing Table-->
                </div>
            </div>
            <p style="margin: 13px 0px 0px;">*Lưu ý: các đối tác cho vay của <a href="{{ url('/') }}">Tài chính SMART</a> có thể yêu cầu thêm một số thông tin bổ sung khi liên lạc trực tiếp nếu cần.</p>
            <div class="row text-center action_btn_mid action_btn">
                <div class="col-md-12">
                    <div class="sunmite_button">
                        <a href="#vay-ngay"
                           class="button">NHẬN NGAY KHOẢN VAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab_area" id="hoi-dap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="progress_text tab_text">
                        <h2>
                            <a href="{{ url('/') }}"><span
                                        class="border_bottom tab_color">Hỏi đáp về vay tín chấp tại tài chính smart</span></a></h2>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseOne"
                                       aria-expanded="false" class="collapsed"><i class="fa fa-check"></i>01. Vay tín chấp
                                        là gì? Lãi suất, thời hạn và cách trả nợ khi vay tín chấp</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <ol class="alpha-beta">
                                        <li>  a) Vay tín chấp là hình thức vay tiền ngân hàng hoặc các tổ chức tín dụng được bảo đảm bằng sự tín nhiệm của người vay mà không cần có tài sản thế chấp.
                                        </li>
                                        <li>  b) Lãi suất vay tín chấp tùy vào từng sản phẩm và kỳ hạn khách hàng tham gia vay vốn sẽ có mức lãi suất phù hợp. Mức lãi suất vay tín chấp dao động tùy thuộc vào<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;các yếu tố khác nhau và được tính trên dư nợ giảm dần
                                        </li>
                                        <li>  c) Thời hạn vay của khoản vay tín chấp từ 6 - 36 tháng.
                                        </li>
                                        <li>  d) Định kỳ trả nợ gốc và lãi khoản vay tín chấp: định kỳ hàng tháng.
                                        </li>
                                        <li>  e) Cách thức thanh toán nợ: tại các điểm giao dịch của bên cho vay hoặc chuyển khoản vào tài khoản thanh toán của Khách hàng tại bên cho vay để trích thu nợ tự động.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree"
                                       aria-expanded="false"><i class="fa fa-check"></i>02. Khi tôi thanh toán nợ chậm trễ,
                                        hoặc không thanh toán thì sẽ như thế nào?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    Khách hàng sẽ chịu lãi suất phạt và khoản nợ gốc, lãi của Khách hàng sẽ chuyển nợ quá
                                    hạn.<br>
                                    Trường hợp khách hàng không trả nợ hoặc trả nợ trễ hạn, bên cho vay sẽ ghi nhận lịch sử tín
                                    dụng của Khách hàng làm cơ sở thẩm định trong trường hợp Khách hàng phát sinh khoản vay
                                    tiếp theo. <br>
                                    Bên cạnh đó, nếu khách hàng không trả nợ hoặc trả nợ trễ hạn trong một khoảng thời gian
                                    nhất định, Khách hàng sẽ bị xếp hạng lịch sử tín dụng xấu và được ghi nhận tại Trung tâm
                                    Thông tin tín dụng (CIC). Khách hàng sẽ gặp khó khăn khi tiến hành vay ở các Tổ chức tín
                                    dụng khác.

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree1">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree1"
                                       aria-expanded="false"><i class="fa fa-check"></i>03. Tôi muốn vay tiền nhanh để mua xe máy mới tôi liên hệ tại đâu?</a>
                                </h4>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Quý khách để lại thông tin tại <a
                                            href="#vay-ngay"><b>đây</b></a>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree2">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree2"
                                       aria-expanded="false"><i class="fa fa-check"></i>04. Tôi muốn vay sửa nhà nhưng không
                                        thế chấp có được không?</a>
                                </h4>
                            </div>
                            <div id="collapseThree2" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Nếu bạn có thu nhập ổn định đủ để đảm bảo chi trả khoản vay, bạn hoàn toàn có thể vay tín chấp mà không cần thế chấp tài sản.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree3">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree3"
                                       aria-expanded="false"><i class="fa fa-check"></i>05. Vì sao tôi không nên vay tiền nóng bên ngoài mà nên vay tín chấp tại Tài chính SMART?</a>
                                </h4>
                            </div>
                            <div id="collapseThree3" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Vay tín chấp ở các đối tác của Tài chính SMART có các ưu điểm: Lãi suất thấp hơn, thủ tục hồ sơ rõ ràng, thời gian giải quyết hồ sơ vay nhanh chóng. Khách hàng không mất bất kỳ khoản phí nào khác. Và không bị rủi ro khác.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree4">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree4"
                                       aria-expanded="false"><i class="fa fa-check"></i>06. Thủ tục vay tiêu dùng tín chấp
                                        có phức tạp không?</a>
                                </h4>
                            </div>
                            <div id="collapseThree4" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Hiện tại, thủ tục vay tiêu dùng tín chấp tại các đối tác của Tài chính SMART đã được tinh giản từ hồ sơ đến các bước phê duyệt, Khách hàng không phải mất thời gian đi lại nhiều lần. Bạn có thể hoàn toàn yên tâm.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree5"
                                       aria-expanded="false"><i class="fa fa-check"></i>07. Tôi muốn biết hồ sơ vay tín chấp
                                        của tôi còn bao nhiêu dư nợ, tôi phải làm sao?</a>
                                </h4>
                            </div>
                            <div id="collapseThree5" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Nhân viên tư vấn sẽ liên hệ và cung cấp cho bạn thông tin chi tiết nhất.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree7">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree7"
                                       aria-expanded="false"><i class="fa fa-check"></i>08. Khi tôi có nhu cầu cơ cấu lại khoản vay tín chấp thì có được giải quyết không?</a>
                                </h4>
                            </div>
                            <div id="collapseThree7" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Trước ngày đến hạn của các Kỳ trả nợ gốc và/hoặc lãi ít nhất là 10 ngày, nếu Khách hàng do gặp khó khăn tạm thời dẫn đến không có khả năng trả nợ đúng hạn, Khách hàng có thể gửi văn bản đề nghị xem xét cơ cấu lại thời hạn trả nợ

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree8">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree8"
                                       aria-expanded="false"><i class="fa fa-check"></i>09. Khoản vay tín chấp của tôi có tự
                                        động gia hạn không (tiếp tục một kỳ hạn mới khi đến hạn)</a>
                                </h4>
                            </div>
                            <div id="collapseThree8" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Khoản vay tín chấp không tự động gia hạn.


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree9">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="{{ url('/') }}#collapseThree9"
                                       aria-expanded="false"><i class="fa fa-check"></i>10. Tôi có được tham gia các chương trình ưu đãi mới không?</a>
                                </h4>
                            </div>
                            <div id="collapseThree9" class="panel-collapse collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    Tài chính SMART thường xuyên có những chương trình, chính sách mới dành cho Khách hàng vay tín chấp. Trường hợp chính sách mới ưu đãi hơn, KH sẽ được thông báo ngay lập tức.

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="service_area service_color" id="vi-sao-chon-vpbank">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        <!--section title-->
                        <div class="col-md-12">
                            <div class="section_title">
                                <h2 class="title"><span>Tại sao chọn tài chính smart</span></h2>
                            </div>
                        </div>
                        <!--end section title-->
                    </div>
                    <div class="row" id="tai-sao">
                        <p style="color:#fff; text-align: center">
                            Là một trong những đơn vị chuyên nghiệp với mạng lưới đối tác là các tổ chức tài chính hàng đầu của Việt Nam, Tài chính SMART luôn nỗ lực cải tiến, đem đến những sản phẩm dịch vụ với lợi ích lớn nhất cho Khách hàng. Tại Tài chính SMART, khách hàng sẽ nhận được sự tư vấn để sử dụng dịch vụ phù hợp nhất với nhu cầu của mình.

                        </p>
                        <div class="col-md-12 col-sm-12">
                            <img src="/assets/image/taisao.png" alt="Đối tác Tài chính Smart">
                        </div>

                    </div>
                </div>
                {{--<div class="col-md-4">--}}
                    {{--<div class="service_thum">--}}
                        {{--<div class="service_img"><img src="/assets/image/tai-sao-chon-vpbank-sr2.png" alt="Tại sao chọn VPBank">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

    <!-- client  area -->

    {{--<div class="client_area" id="cam-nhan-khach-hang">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="client_own client_style curosel-style4 owl-carousel owl-theme">--}}
    {{--<div class="owl-wrapper-outer">--}}
    {{--<div class="owl-wrapper">--}}
    {{--<div class="owl-item">--}}
    {{--<div class="col-md-12 col-lg-12">--}}
    {{--<div class="client">--}}
    {{--<div class="client_img">--}}
    {{--<a href="{{ url('/') }}#"><img--}}
    {{--src="/assets/image/khach-hang-vay-tieu-dung-c1.jpg"--}}
    {{--alt="Ý kiến khách hàng vay tín chấp"></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="client_content">--}}
    {{--<div class="client_text">--}}
    {{--<h2><span>Khách hàng nói về chúng tôi</span></h2>--}}
    {{--<p>Tôi đang vay tín chấp tại VPBank, tôi chưa thấy mình phải phàn nàn gì. Tôi sẽ--}}
    {{--thử tìm hiểu một sản phẩm khác nữa.</p>--}}
    {{--<a href="javascript:void(0);">Anh Chánh Trung <span>- Chuyên viên kế toán</span></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="owl-item">--}}
    {{--<div class="col-md-12 col-lg-12">--}}
    {{--<div class="client">--}}
    {{--<div class="client_img">--}}
    {{--<a href="{{ url('/') }}#"><img--}}
    {{--src="/assets/image/khach-hang-vay-tieu-dung-c2.jpg"--}}
    {{--alt="Ý kiến khách hàng vay tín chấp"></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="client_content">--}}
    {{--<div class="client_text">--}}
    {{--<h2><span>Khách hàng nói về chúng tôi</span></h2>--}}
    {{--<p>Tôi đã rất bất ngờ, khoản vay của tôi được giải ngân chỉ trong vòng 1 ngày. Ý--}}
    {{--tưởng mua một tủ lạnh mới cho cả nhà đã được thực hiện nhanh chóng ngoài sự--}}
    {{--mong đợi. Cảm ơn VPBank!</p>--}}
    {{--<a href="javascript:void(0);">Chị Thùy Dương<span>- Giáo viên</span></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="owl-item">--}}
    {{--<div class="col-md-12 col-lg-12">--}}
    {{--<div class="client">--}}
    {{--<div class="client_img">--}}
    {{--<a href="{{ url('/') }}#"><img--}}
    {{--src="/assets/image/khach-hang-vay-tieu-dung-c4.jpg"--}}
    {{--alt="Ý kiến khách hàng vay tín chấp"></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="client_content">--}}
    {{--<div class="client_text">--}}
    {{--<h2><span>Khách hàng nói về chúng tôi</span></h2>--}}
    {{--<p>Nếu như trước đây, tôi sẽ rất dễ dàng bỏ qua VPBank bởi rất nhiều lựa chọn--}}
    {{--với các ngân hàng khác. Nhưng hiện tại, khi đã tự mình sử dụng dịch vụ của--}}
    {{--VPBank, tôi đã bị thuyết phục và khó lòng rời bỏ.</p>--}}
    {{--<a href="javascript:void(0);">Chị Hồng Nga<span>- Trưởng phòng kinh doanh Bất động sản</span></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="owl-item">--}}
    {{--<div class="col-md-12 col-lg-12">--}}
    {{--<div class="client">--}}
    {{--<div class="client_img">--}}
    {{--<a href="{{ url('/') }}#"><img--}}
    {{--src="/assets/image/khach-hang-vay-tieu-dung-c3.jpg"--}}
    {{--alt="Ý kiến khách hàng vay tín chấp"></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="client_content">--}}
    {{--<div class="client_text">--}}
    {{--<h2><span>Khách hàng nói về chúng tôi</span></h2>--}}
    {{--<p>Dich vụ ngân hàng hiện đại, xử lý giao dịch nhanh, chăm sóc khách hàng chu--}}
    {{--đáo đó là những điều tôi cần và tôi chọn VPBank.</p>--}}
    {{--<a href="javascript:void(0);">Anh Đạt<span>- Chuyên viên IT</span></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--<div class="owl-controls clickable">--}}
    {{--<div class="owl-buttons">--}}
    {{--<div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>--}}
    {{--<div class="owl-next"><i class="fa fa-angle-right"></i></div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- end client  area -->
    <div id="vay-ngay" class="footer_area ">
        <div class="container">
            <div class="row">
                <!--section title-->
                <div class="col-md-12">
                    <div class="section_title service_color">
                        <h2 class="title title2">Đăng ký nhận khoản vay</h2>
                        <!--span class="title-border"></span-->
                        <div class="title-border-img"><img src="/assets/image/title-border-white.png"></div>
                    </div>
                </div>
                <!--end section title-->
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-md-offset-4 col">--}}
                    {{--<div class="inputt input_change">--}}
                        {{--<span class="message_icon"><img src="/assets/image/icon_bank.png"></span>--}}
                        {{--<select class="form-control name bank" name="bank" id="bot-bank">--}}
                            {{--<option value="" selected>-- Chọn đơn vị cho vay --</option>--}}
                            {{--<option value="UNKNOWN">Tư vấn đơn vị phù hợp cho tôi</option>--}}
                            {{--<option value="OCB">Ngân hàng OCB</option>--}}
                            {{--<option value="DoctorDong">Doctor Đồng</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row bot-form text-center">

                {{--<div class="col-md-2">--}}
                {{--</div>--}}
                <div class="col-md-4">
                    <div class="inputt input_change">
                        <span class="message_icon"><img src="/assets/image/icon_name.png"></span>
                        <input type="text" required="" placeholder="Họ và tên" id="bot-name" class="form-control name"
                               name="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inputt input_change">
                    <span class="message_icon"><span class="message_icon"><img
                                    src="/assets/image/icon_phone.png"></span></span>
                        <input type="phone" required="" placeholder="Số điện thoại " id="bot-phone"
                               class="form-control phone" name="phone">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inputt input_change">
                    <span class="message_icon"><span class="message_icon"><img
                                    src="/assets/image/icon_email.png"></span></span>
                        <input type="email" required="" placeholder="Email " id="bot-email"
                               class="form-control phone" name="email">
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="sunmite_button">
                        <button name="ok" type="submit" id="dang-ky-bot-btn">Nhận khoản vay ngay</button>
                    </div>
                </div>


            </div>
            <div class="row">

                <div class="footer-text">
                    <b>Tài chính SMART © {{ \Carbon\Carbon::now()->year }}.</b><br>
                    Mọi vấn đề liên quan xin liên hệ tới địa chỉ Email:
                    taichinhsmart.vn@gmail.com
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade dang-ky-modal" style="z-index: 1071" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-bottom: 5px;">
                    <h4 class="modal-title" id="exampleModalLongTitle">Còn 1 bước nữa thôi - <span id="name-bank">Ngân hàng OCB</span></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div style="margin-top: 10px;">
                        <a id="next-bank" type="button" href="http://member.civi.vn/cpc/?sid=30429&bid=10031700" target="_blank" class="btn btn-danger" style="margin-bottom: 10px;margin-right: 20px;"><i class="fa fa-hand-o-right "></i> Tiếp tục với ngân hàng OCB</a>
                        <a type="button" href="https://m.me/IBVayvonOnline" target="_blank" class="btn" style="margin-bottom: 10px;border: 2px solid #0080ff;color: #0080ff;font-weight: bold">
                            <img style="width: 24px;margin-top: -2px;" src="/assets/image/messenger.png"> <span>Tư vấn vay vốn trực tuyến</span></a>
                    </div>
                </div>
                <div class="modal-body">
                    <p style="color: red" id="clip-bank">Clip - Hướng dẫn hoàn thành quá trình vay vốn tại ngân hàng OCB</p>
                    <div class="videoWrapper">
                        <iframe id="yt-frame" src="https://www.youtube.com/embed/ifj7aGzuNIc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade tu-van-modal" style="z-index: 1071" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-bottom: 5px;">
                    <h4 class="modal-title" id="exampleModalLongTitle">Tư vấn đơn vị cho vay phù hợp cho bạn</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div style="margin-top: 10px;">
                        <a type="button" href="https://m.me/IBVayvonOnline" target="_blank" class="btn" style="margin-bottom: 10px;border: 2px solid #0080ff;color: #0080ff;font-weight: bold">
                            <img style="width: 24px;margin-top: -2px;" src="/assets/image/messenger.png"> <span>Tư vấn vay vốn trực tuyến</span></a>
                    </div>
                </div>
                <div class="modal-body">
                    <div>
                        <h5><b>* Bạn nên chọn Doctor Đồng nếu:</b></h5>
                        <p style="color: #000">- Bạn cần lấy tiền ngay trong 24h<br>
                            - Khoản vay dưới 10 triệu, thanh toán trong thời gian 1 tháng<br>
                            - Vay để tiêu dùng khi có nhu cầu gấp<br>
                            - Hiện những giấy tờ bạn có thể đáp ứng ngay là Chứng minh thư</p>
                        <h5><b>* Bạn nên chọn Ngân hàng OCB khi:</b></h5>
                        <p style="color: #000">
                            - Bạn vay vốn lớn hơn 10 triệu<br>
                            - Thời hạn thanh toán được chấp thuận từ 6 đến 36 tháng<br>
                            - Vay phục vụ tiêu dùng lớn hoặc kinh doanh...<br>
                            - Các giấy tờ bạn có là Chứng minh bản thân, sổ hộ khẩu, nếu có thêm chứng minh thu nhập thì càng chắc chắn<br>
                            - Thời gian nhận tiền cũng rất nhanh, có thể là trong ngày nếu bạn đáp ứng đủ hồ sơ yêu cầu
                        </p>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        $('#top-name').change(function () {
            $('#bot-name').val($('#top-name').val());
        });
        $('#bot-name').change(function () {
            $('#top-name').val($('#bot-name').val());
        });
        $('#top-phone').change(function () {
            $('#bot-phone').val($('#top-phone').val());
        });
        $('#bot-phone').change(function () {
            $('#top-phone').val($('#bot-phone').val());
        });
    </script>
    <script>


        $("#so_tien_vay").slider({
            formatter: function (value) {
                return value + " Triệu";
            },
            tooltip: 'always',
            min: 1,
            max: 100,
            scale: 'logarithmic',
            step: 1,
            ticks: [1, 100],
            ticks_labels: ['1 triệu', '100 triệu']
        });
        $("#ky_han_vay").slider({
            formatter: function (value) {
                return value + " Tháng";
            },
            tooltip: 'always',
            min: 1,
            max: 36,
            step: 1,
            ticks: [1, 36],
            ticks_labels: ['1 tháng', '36 tháng']
        });
        $("#so_tien_vay").on("slide", function (slideEvt) {

            Calcul(slideEvt.value, $("#ky_han_vay").val());
        });
        $("#ky_han_vay").on("slide", function (slideEvt) {

            Calcul($("#so_tien_vay").val(), slideEvt.value);
        });
        function Calcul(so_tien_vay, ky_han_vay) {
            so_tien_vay = so_tien_vay * 1000000;
            var sotien = 0;
            var rate = 16 / 100 / 12;
            so_tien = -pmt(rate, ky_han_vay, so_tien_vay, 0, 0);
            so_tien = Math.round(so_tien);
            $("#so_tien_hang_thang").text(numberWithCommas(so_tien));
        }
        function numberWithCommas(x) {
            x = x.toString();
            var pattern = /(-?\d+)(\d{3})/;
            while (pattern.test(x))
                x = x.replace(pattern, "$1.$2");
            return x;
        }
        function pmt(rate_per_period, number_of_payments, present_value, future_value, type) {
            if (rate_per_period != 0.0) {
                // Interest rate exists
                var q = Math.pow(1 + rate_per_period, number_of_payments);
                return -(rate_per_period * (future_value + (q * present_value))) / ((-1 + q) * (1 + rate_per_period * (type)));

            } else if (number_of_payments != 0.0) {
                // No interest rate, but number of payments exists
                return -(future_value + present_value) / number_of_payments;
            }

            return 0;
        }


    </script>

    <script>
        $(document).ready(function (e) {
            $(document).on('click', '.panel-heading a', function () {
                var abc = $(this);
                $(".panel-heading a").each(function (index) {
                    if ($(this).hasClass('collapsed') != true) {
                        $(this).addClass('collapsed');
                    }
                });

                abc.removeClass('collapsed');
            });
            
            $('#dang-ky-btn').click(function (e) {
                e.preventDefault();

                var name = $('#top-name').val();
                var phone = $('#top-phone').val();
                var email = $('#top-email').val();
                var bank = $('#top-bank').val();

                if (name.trim() == '' || phone.trim() == '') {
                    alert('Không được để trống thông tin của bạn!');
                    return;
                }

//                var textBank = $("#top-bank option:selected").text();

                var textBank = 'Doctor Đồng';
                var bank = 'DoctorDong';

                $('#name-bank').html('Tiếp tục với ' + textBank);
                $('#next-bank').html('<i class="fa fa-hand-o-right "></i> Tiếp tục với ' + textBank);
                $('#clip-bank').html('Clip - Hướng dẫn hoàn thành quá trình vay vốn tại ' + textBank);

                if (bank == 'OCB') {
                    $('#yt-frame').attr('src', 'https://www.youtube.com/embed/ifj7aGzuNIc?rel=0&amp;controls=0&amp;showinfo=0')
                    $('#next-bank').attr('href', 'http://member.civi.vn/cpc/?sid=30429&bid=10031700')
                } else if (bank == 'DoctorDong') {
                    $('#yt-frame').attr('src', 'https://www.youtube.com/embed/5_f670NXxEw?rel=0&amp;controls=0&amp;showinfo=0')
                    $('#next-bank').attr('href', 'https://fast.accesstrade.com.vn/deep_link/4773432748394255215?url=https%3A%2F%2Fdoctordong.vn%2F%3Fpartner_token%3DBq7OGnaSE-nrzepIjzrKeUszWQFY0YM49EHU5LLo6g8')
                }

                $.ajax({
                    type: 'post',
                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        bank: bank
                    },
                    url: '{{ url('dang-ky-khoan-vay') }}',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == 1) {
                            $('.dang-ky-modal').modal('show');
                        } else {
                            alert(response.message);
                        }
                    }
                });
            });

            $('#dang-ky-bot-btn').click(function (e) {
                e.preventDefault();

                var name = $('#bot-name').val();
                var phone = $('#bot-phone').val();
                var email = $('#bot-email').val();
                var bank = $('#bot-bank').val();

                if (name.trim() == '' || phone.trim() == '') {
                    alert('Không được để trống thông tin của bạn!');
                    return;
                }

//                var textBank = $("#bot-bank option:selected").text();

                var textBank = 'Doctor Đồng';
                var bank = 'DoctorDong';

                $('#name-bank').html('Tiếp tục với ' + textBank);
                $('#next-bank').html('<i class="fa fa-hand-o-right "></i> Tiếp tục với ' + textBank);
                $('#clip-bank').html('Clip - Hướng dẫn hoàn thành quá trình vay vốn tại ' + textBank);

                if (bank == 'OCB') {
                    $('#yt-frame').attr('src', 'https://www.youtube.com/embed/ifj7aGzuNIc?rel=0&amp;controls=0&amp;showinfo=0')
                    $('#next-bank').attr('href', 'http://member.civi.vn/cpc/?sid=30429&bid=10031700')
                } else if (bank == 'DoctorDong') {
                    $('#yt-frame').attr('src', 'https://www.youtube.com/embed/5_f670NXxEw?rel=0&amp;controls=0&amp;showinfo=0')
                    $('#next-bank').attr('href', 'https://fast.accesstrade.com.vn/deep_link/4773432748394255215?url=https%3A%2F%2Fdoctordong.vn%2F%3Fpartner_token%3DBq7OGnaSE-nrzepIjzrKeUszWQFY0YM49EHU5LLo6g8')
                }

                $.ajax({
                    type: 'post',
                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        bank: bank
                    },
                    url: '{{ url('dang-ky-khoan-vay') }}',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == 1) {
                            $('.dang-ky-modal').modal('show');
                        } else {
                            alert(response.message);
                        }
                    }
                });
            });

            $('#top-bank, #bot-bank').on('change', function () {
                if (this.value == 'UNKNOWN') {
                    $('.tu-van-modal').modal('show');
                }
            });
        });
    </script>


@endsection