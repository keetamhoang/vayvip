@extends('frontend.product.layout')

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=""> <meta name="description" content="">
    <title>Tỏi đen 1 nhánh Blaga</title>
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
    <style>
        .banner {
            margin-bottom: 0;
        }
    </style>
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
                    <div class="col-lg-4">
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

                    <div class="col-lg-4">
                        <div class="left">
                            <i class="fa fa-volume-control-phone" style="font-size: 39px;margin-top: 5px;"></i>
                        </div>
                        <div class="left" style="margin-left: 8px;">
                            <div>
                                <p style="margin-bottom: 2px;margin-top: 4px;">Chuyên gia tư vấn:</p>
                            </div>
                            <div>
                                <strong><a href="#time-countdown">Đăng ký ngay</a></strong>
                            </div>
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
                                <p style="margin-bottom: 2px;margin-top: 1px;">Chuyên gia tư vấn</p>
                            </div>
                            <div>
                                <strong><a href="#time-countdown">Đăng ký ngay</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="banner box4 banner-success">
            <div class="container">

                <p class="box4-text" style="text-align: center">Bạn đã đăng ký thành công giải pháp điều trị tiểu đường hiệu quả Tỏi đen 1 nhánh Blaga. Chuyên gia về sức khỏe của chúng tôi sẽ sớm liên hệ với bạn. Chúc bạn và gia đình luôn mạnh khỏe, bình an!</p>
                <p class="box4-title">Tỏi đen Blaga -  Vì sức khỏe người Việt</p>
            </div>
        </div> <!-- banner -->

        <button class="btnsubmit"  type="button"><a style="color: #000;padding: 17px 0px;" href="{{ url('san-pham/san-pham-toi-den-1-nhanh-blaga') }}">Quay về trang chủ</a></button>

        <div class="box4">
            <div class="container">
                <div class="box5-title">
                    CÁC BÀI BÁO NÓI VỀ TỎI ĐEN
                </div>
                <div class="box4-content">
                    <div class="image-box4">
                        <a href="http://vietnamnet.vn/vn/suc-khoe/cac-loai-benh/5-dieu-nguoi-bi-tieu-duong-buoc-phai-nho-trong-mua-he-370824.html" target="_blank"><img src="/product/toiden/image/vietnamnet.png"></a>
                    </div>
                    <div class="image-box4">
                        <a href="https://suckhoe.vnexpress.net/tin-tuc/tu-van/bai-thuoc-chua-benh-hay-tu-toi-den-2984876.html" target="_blank"><img src="/product/toiden/image/vnexpress.png"></a>
                    </div>
                    <div class="image-box4">
                        <a href="https://baomoi.com/mach-ban-4-cach-dung-toi-den-tot-nhat-cho-suc-khoe/c/21141042.epi" target="_blank"><img src="/product/toiden/image/baomoi.png"></a>
                    </div>
                    <div class="image-box4">
                        <a href="https://tuoitre.vn/toi-den-va-cong-dung-trong-y-hoc-1179687.htm" target="_blank"><img src="/product/toiden/image/tuoitre.png"></a>
                    </div>
                </div>

            </div>
            <img src="/product/toiden/image/4.png" alt="" id="box4-absimg">
            <img src="/product/toiden/image/3.png" alt="" id="box4-absimg2">
        </div>


        <div class="box6">
            <img src="/product/toiden/image/6.png" alt="" id="box6-absimg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="box6-left">
                            <img src="/product/toiden/image/5.jpg" alt="">
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

        <div class="box7">
            <img src="/product/toiden/image/bg2.jpg" alt="" id="box7-bg">
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
            <img src="/product/toiden/image/8.png" alt="" id="box7-absimg">
        </div>



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
            <div class="col col-lg-4 left" style="background: #ff9002">
                <a href="{{ url('/san-pham/san-pham-toi-den-1-nhanh-blaga') }}"><i class="fa fa-home"></i> TRANG CHỦ</a>
            </div>
            <div class="col col-lg-4 left" style="background: #d81921">
                <a href="{{ url('/san-pham/san-pham-toi-den-1-nhanh-blaga') }}#contact"><i class="fa fa-gift"></i> ƯU ĐÃI</a>
            </div>
            <div class="col col-lg-4 left" style="background: #00ab4d">
                <a href="{{ url('/san-pham/san-pham-toi-den-1-nhanh-blaga') }}#time-countdown"><i class="fa fa-shopping-cart"></i> ĐẶT HÀNG</a>
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
                                BootstrapDialog.alert({
                                    title: 'Đặt hàng thành công!',
                                    message: 'Cảm ơn bạn đã đặt hàng Tỏi đen 1 nhánh Blaga. Chúng tôi sẽ liên hệ sớm nhất với bạn sau khi nhận được đơn hàng này.',
                                    type: BootstrapDialog.TYPE_SUCCESS,
                                    size: BootstrapDialog.SIZE_LARGE,
                                    closable: true,
                                    buttonLabel: 'Đóng'
                                });

                                $('#name').val('');
                                $('#phone').val('');
                                $('#address').val('');
                            } else {
                                BootstrapDialog.alert({
                                    title: 'Đặt hàng không thành công!',
                                    message: response.message,
                                    type: BootstrapDialog.TYPE_WARNING,
                                    size: BootstrapDialog.SIZE_LARGE,
                                    closable: true,
                                    buttonLabel: 'Đóng'
                                });
                            }
                        }
                    });
                }
            });
        </script>


    </div>
@endsection