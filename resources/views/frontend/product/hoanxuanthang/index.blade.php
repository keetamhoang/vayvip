@extends('frontend.product.layout')

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Hoàn Xuân Thang">
    <meta name="description" content="Hoàn Xuân Thang">
    <title>
        Hoàn Xuân Thang</title>

    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/validationEngine.jquery.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/style.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/stylea.css">
    <link rel="stylesheet" type="text/css" href="/product/hoanxuanthang/css/reset.css">
    <link rel="stylesheet" href="/product/hoanxuanthang/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/popup_sp.css">


    <script type="text/javascript" src="/product/hoanxuanthang/js/sdk.js"></script>
    <script type="text/javascript" src="/product/hoanxuanthang/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/product/hoanxuanthang/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/product/hoanxuanthang/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/product/hoanxuanthang/js/jquery.flexisel.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#check_form").validationEngine();
        });
        function goToByScroll(id) {
            if ($("#" + id).length) {
                $('html,body').animate({scrollTop: $("#" + id).offset().top - 100}, 'slow');
            }
        }
    </script>
    <script type="text/javascript">
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

@endsection


@section('body')
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>

            </div>
        </div>
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
        </div>
    </div>

    <div style="position: absolute; margin-top: -9999999px;">
    </div>
    <style type="text/css">
        .fix-icon-right {
            position: fixed;
            right: 10px;
            bottom: 35px;
            display: none;
            z-index: 9999999;
        }

        .fix-icon-right img {
            margin-bottom: 5px;
        }

        #cart {
            position: fixed;
            right: 0;
            top: 40%;
            text-align: center;
            color: #fff;
            font-weight: bold;
            z-index: 999999;
        }
    </style>
    <div id="cart">
        <a href="#frmres"><img src="/product/hoanxuanthang/images/dathangngay.png"></a>
    </div>
    <div class="fix-icon-right" id="fixedmenu" style="overflow: hidden; display: block;">
        <div class="row-fluid">
            <ul class="unstyled">
                <li>
                    <a href="#" title="Top"><img src="/product/hoanxuanthang/images/gotop.gif"
                                                 class="scrollup" alt="Top" title="Top"></a>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $(document).scroll(function () {
            var curPos = $(document).scrollTop();
            if (curPos >= 350) {
                $('#fixedmenu').show(10);
            } else {
                $('#fixedmenu').hide(10);
            }
        });
        $('.scrollup').click(function () {
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
    </script>
    <div id="header">
        <a href="#frmres"><img src="/product/hoanxuanthang/images/logo.png" alt="Trang chủ"
                         class="img-responsive"></a>
    </div>
    <div class="slide">
        <a href="#frmres"><img src="/product/hoanxuanthang/images/slide.png" title="Banner" alt="banner"
                               class="img-responsive"></a>
    </div>
    <div class="bg-ct2-uudai">
        <div class="ct2-uudai">Ưu đãi khủng cho khách hàng:</div>
        <p class="special">Mua 4 tặng 1, Mua 2 free ship</p>
    </div>
    <div class="bg-content">
        <div class="padd-content bg-content-one" id="goto_sanpham">
            <div class="container">
                <div class="ct-one">
                    <div class="ct-one-left">
                        <img src="/product/hoanxuanthang/images/hinhanh1.png" alt="hình ảnh minh hoạ" style="max-width:100%;">
                    </div>
                    <div class="ct-one-right">
                        <p class="nd-ct1-r">Bạn đang gặp phải tình trạng tóc bạc ngày càng nhanh</p>
                        <p class="nd-ct1-r">Tóc bạn rụng nhiều và thưa dần</p>
                        <p class="nd-ct1-r">Sinh lý kém sung mãn ?</p>
                        <p class="nd-ct1-r">Người mệt mỏi, uể oải, thiếu sinh lực ?</p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div><!--end bg-content-one-->


        <div class="bg-content-seven">
            <div class="container">
                <div class="ct-seven">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-right pull-right post-dieutri">
                            <ul>
                                <li>Sinh lý yếu, tóc bạc, tóc rụng, người mệt mỏi là những biểu hiện đầu tiên của quá trình
                                    lão hoá cơ thể
                                </li>
                                <li>Y học hiện đại chỉ ra, nội tiết tố trong cơ thể chúng ta thường có chiều hướng thay đổi
                                    giảm dần theo tuổi tác. Khi bước vào tuổi ngoài bốn mươi mỗi năm lượng nội tiết tố sẽ
                                    suy giảm khoảng 1%. Đến khoảng 70 tuổi chúng ta mất đi một nửa lượng nội tiết tố so với
                                    khi chúng ta đang độ tuổi 30
                                </li>
                                <li>Nồng độ testosterone hay estrogen giảm đi dẫn tới khối lượng bắp thịt hao hụt, các chất
                                    béo trong cơ thể phát triển, mật độ xương loãng dần, hiện tượng xương giòn, dễ gãy có
                                    thể xảy ra cùng các biểu hiện người mệt mỏi, tóc bạc nhanh, năng lực tình dục suy giảm
                                    và thiếu động lực sống
                                </li>
                                <li>Do thói quen sinh hoạt, dinh dưỡng, môi trường sống và các yếu tố di truyền mà tốc độ
                                    suy giảm nội tiết tố, tốc độ lão hoá của mỗi người có sự khác nhau nhất định. Điều này
                                    giải thích tại sao có hiện tượng người này có biểu hiện già đi rất nhanh trong khi người
                                    kia giữ lại được vẻ xuân sắc vượt thời gian
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6 post-dieutri">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/LkgIoTS5PZQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-content-four">
            <div class="container">
                <div class="ct-four">
                    <div class="bg-title-ct4">
                        <div class="title-ct4">Thành phần của sản phẩm</div>
                        <div class="row">
                            <div class="col-xs-12 col-md-7 div-ct4-trai" style="margin:auto;">
                                <div class="max-w-tablet" style="float:right;width:570px;">
                                    <div class="post-ct4 post-ct4-gachtrai">
                                        <div class="name-ct4 name-ct4-gachtrai">Mật ong rừng</div>
                                        <div class="clearfix"></div>
                                        <div class="main-ct4 main-ct4-gachtrai">
                                            <div class="so-ct4 so-ct4-gachtrai">1</div>
                                            <div class="noidung-ct4 noidung-ct4-gachtrai">
                                                <p>Chứa hơn 300 vi chất dinh dưỡng, nhiều vitamin, nhiều loại axit và men
                                                    tiêu hoá... Các vi chất này gần như là đủ mọi nguyên tố vi lượng cần
                                                    thiết cho cơ thể.</p>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="img-ct4-gachtrai"><img
                                                        src="/product/hoanxuanthang/images/mat-ong-rung.png" alt="Mật ong rừng"></div>
                                        </div>

                                    </div>
                                    <div class="post-ct4 post-ct4-gachphai">
                                        <div class="name-ct4 name-ct4-gachphai">Hà thủ ô đỏ</div>
                                        <div class="clearfix"></div>
                                        <div class="main-ct4 main-ct4-gachphai">
                                            <div class="so-ct4 so-ct4-gachphai">2</div>
                                            <div class="noidung-ct4 noidung-ct4-gachphai">
                                                <p>Hà Thủ Ô dỏ làm thuốc bổ, giúp sống lâu, đẹp da, làm đen râu tóc, ích
                                                    huyết, sinh huyết dịch, bổ tim, khoẻ gân cốt, bền tinh khí, kích thích
                                                    tiêu hoá, cải thiện dinh dưỡng, trị thần kinh suy nhược ...</p>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="img-ct4-gachphai"><img src="/product/hoanxuanthang/images/ha-thu-o-do.png"
                                                                               alt="Hà thủ ô đỏ"></div>
                                        </div>
                                    </div>
                                    <div class="post-ct4 post-ct4-gachtrai">
                                        <div class="name-ct4 name-ct4-gachtrai">Hắc chi ma</div>
                                        <div class="clearfix"></div>
                                        <div class="main-ct4 main-ct4-gachtrai">
                                            <div class="so-ct4 so-ct4-gachtrai">3</div>
                                            <div class="noidung-ct4 noidung-ct4-gachtrai">
                                                <p>Vừng (mè đen) Theo y học cổ truyền, vừng đen có vị ngọt, tính bình, có
                                                    tác dụng dưỡng huyết, nhuận táo, bổ ngũ tạng, ích khí lực, bền gân cốt,
                                                    sáng mắt, thêm thông minh, dùng ngoài đắp trị sưng tấy ...</p>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="img-ct4-gachtrai"><img src="/product/hoanxuanthang/images/hac-chi-ma.png"
                                                                               alt="Hắc chi ma"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5 div-ct4-phai">
                                <div class="max-w-tablet">
                                    <div class="post-ct4 post-ct4-all">
                                        <div class="clearfix"></div>
                                        <div class="main-ct4 main-ct4-all">
                                            <div class="img-ct4-all"><img src="/product/hoanxuanthang/images/all.png"
                                                                          alt="Thiên niên kiện" class="img-responsive">
                                            </div>
                                            <div class="noidung-ct4 noidung-ct4-all">
                                                <p style="text-align:center;"><span>Bài thuốc "Cải lão hoàn đồng, đen tóc đẹp da, tăng cường sinh lực"</span>
                                                    <span class="name-ct4" style="display:block;font-size:24px;width:100%;">HOÀN XUÂN THANG</span>
                                                </p>
                                                <div class="clearfix"></div>
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

        <div class="bg-content-six">
            <div class="container">
                <div class="title-ct5">Bài thuốc "Cải lão hoàn đồng, đen tóc đẹp da, tăng cường sinh lực"</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 post-lido">
                        <div class="img-lido"><img src="/product/hoanxuanthang/images/lido1.png" alt="Lý do chọn Diệu cốt vương"
                                                   class="img100"></div>
                        <div class="ct-lido">
                            <p>Trong cuốn sách y dược kinh điển "Bản thảo cương mục" của Lý Thời Chân (Trung Quốc) - nói về
                                lịch sử cây Hà thủ ô đỏ như sau: "Ông Hà Thủ Ô người ở Huyện Nam Hà thuộc Thuận Châu, có tổ
                                là Năng Tự. Năng Tự vốn có tên là Điền Nhi, khi sinh ra yếu ớt. Đến 58 tuổi Điền Nhi vẫn
                                không có con. Một hôm uống rượu say, nằm ở dưới sườn núi bỗng thấy hai gốc cây leo cách xa
                                nhau đến 3 thước vậy mà cành lá vẫn quấn lấy nhau, Điền Nhi lấy làm lạ, đem hỏi một người
                                già, và được khuyên nên đem sắc uống. Điền Nhi liền đem tán bột, mỗi lần uống 1 đồng cân
                                (4g), uống luôn 7 ngày đã nảy ra ý tưởng tình dục, liền uống luôn vài tháng, thời mạnh khoẻ
                                như người thường. Nên uống mãi, dần dần tăng lên 2 đồng cân (8g). Uống suốt một năm, các
                                bệnh tật đều khỏi, tóc đương trắng hoá đen, vẻ mặt trẻ lại"</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 post-lido">
                        <div class="img-lido"><img src="/product/hoanxuanthang/images/lido2.png" alt="Lý do chọn Diệu cốt vương"
                                                   class="img100"></div>
                        <div class="ct-lido">
                            <p>Trong khoảng 10 năm sinh được vài con trai, do đó mới đổi tên là Năng Tự (nhiều con). Cùng
                                với cha là Điền Tú tiếp tục uống thứ bột đó mà thọ tới 160 tuổi. Điền Tú sinh ra Hà Thủ Ô,
                                tiếp tục uống mà sinh được vài con trai, thọ tới 130 tuổi, tóc vẫn còn đen. Có người tên là
                                Lý An Kỳ, bạn thân với Thủ Ô, lấy được bài thuốc đó đem về uống và cũng thọ được rất lâu và
                                thuật lại truyện trên. Từ đó cây Giao Đằng được dân gian thường gọi với tên Hà Thủ Ô". Từ
                                dược liệu này về sau giới quý tộc phong kiến đã phát triển với sự kết hợp của Hà thủ ô đỏ +
                                Mật ong rừng + Hắc Chi ma được dân gian lưu truyền coi như một bài thuốc trời ban giúp bồi
                                bổ tinh tuỷ, trẻ hoá cơ thể, đen râu tóc, bồi đẹp da tăng cường sinh lý bền vững ở người lão
                                hoá sớm và người lớn tuổi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-content-eight">
            <div class="container">
                <div class="ct-eight">
                    <div class="bg-title-ct8">
                        <div class="title-ct8">Thông tin sản phẩm</div>
                    </div>
                    <div class="main-8">
                        <div class="main-8-40">
                            <div><span class="bold">Tên sản phẩm:</span> <strong style="font-size: 30px">Hoàn Xuân Thang</strong></div>
                            <p class="bold" style="float:left;">Thành phần (Hộp 500g):</p><br>
                            <ul>
                                <li>Hà Thủ Ô</li>
                                <li>Hắc Chi ma</li>
                                <li>Mật ong rừng</li>
                            </ul>
                            <div class="clearfix"></div>

                        </div>
                        <div class="main-8-60">

                            <div><p class="bold">* Công dụng: </p>
                                <p>Đen tóc, đẹp da, tăng cường sinh lý nam nữ bền vững, bồi bổ cơ thể: bổ tim thận; kích
                                    thích sinh huyết dịch; bền tinh khí, khoẻ gân cốt; Thải độc, nhuận tràng, gia tăng tuổi
                                    thọ, trẻ hoá cơ thể. Hỗ trợ điều trị tốt cho những trường hợp cao huyết áp, mạch máu bị
                                    xơ vữa</p>
                            </div>
                            <div><p class="bold">* Cách dùng: </p></div>
                            <div>Dùng trực tiếp hoặc pha với nước ấm, uống sau bữa ăn 30p, ngày 2-3 lần, mỗi lần 1-2 thìa
                                cafe (10g)
                            </div>
                            <div>Đối tượng sử dụng: Từ 5 tuổi trở lên, không dùng cho phụ nữ có thai hoặc cho con bú</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-content-nine">
            <div class="container">
                <div class="ct-eight">
                    <div class="bg-title-ct9">
                        <div class="title-ct9">Chia sẻ của khách hàng</div>
                    </div>
                    <div class="main-9">
                        <div class="row">
                            <div class="nbs-flexisel-container">
                                <div class="nbs-flexisel-inner">
                                    <ul id="flexiselDemo4" class="nbs-flexisel-ul" style="left: -600px;">
                                        <div class="post-khachhang" style="width: 600px;">
                                            <div class="content-slide">
                                                <div class="img-khachhang col-xs-12 col-sm-4">
                                                    <img src="/product/hoanxuanthang/images/hoan-xuan-thang-ava6.png" alt=""
                                                         class="img-responsive">
                                                </div>
                                                <div class="main-khachhang col-xs-12 col-sm-8">

                                                    <div class="name-khachhang">
                                                        <div class="div2" style="height: 30px;">Nguyễn Hà My (Hà Nội)</div>
                                                        <div class="checked"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>
                                                    </div>
                                                    <div class="shortdes-khachhang">
                                                        <div class="div5" style="height: 66px;">
                                                            Năm nay tôi mới 23 tuổi mà tóc bị rụng, bạc nhiều, dù đã dùng
                                                            nhiều loại thuốc nhưng không hiệu quả. Tình cờ tôi biết đến sản
                                                            phẩm Hoàn Xuân Thang trên báo. Quyết định dùng thử, sau 2 tháng,
                                                            tóc tôi cải thiện rất nhiều và không còn bị rụng tóc như trước
                                                            nữa.
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="post-khachhang" style="width: 600px;">
                                            <div class="content-slide">
                                                <div class="img-khachhang col-xs-12 col-sm-4">
                                                    <img src="/product/hoanxuanthang/images/hoan-xuan-thang-ava8.png" alt=""
                                                         class="img-responsive">
                                                </div>
                                                <div class="main-khachhang col-xs-12 col-sm-8">

                                                    <div class="name-khachhang">
                                                        <div class="div2" style="height: 30px;">Anh Tiến Hưng (Đồng Nai)
                                                        </div>
                                                        <div class="checked"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>
                                                    </div>
                                                    <div class="shortdes-khachhang">
                                                        <div class="div5" style="height: 66px;">
                                                            Trước đây tôi có dùng nguyên Hà Thủ Ô, thấy tóc có sự chuyển
                                                            biến nhưng không rõ rệt và rất chậm, đọc trên báo thấy có sản
                                                            phẩm Hoàn Xuân Thang kết hợp thêm mật ong và mè đen nên quyết
                                                            định dùng thử, từ khi dùng tới nay là 3 tháng, thấy hiệu quả cái
                                                            thiện rõ rệt, sau 2 lần cắt tóc còn rất ít sợi tóc bạc.
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="post-khachhang" style="width: 600px;">
                                            <div class="content-slide">
                                                <div class="img-khachhang col-xs-12 col-sm-4">
                                                    <img src="/product/hoanxuanthang/images/hoan-xuan-thang-ava3.png" alt=""
                                                         class="img-responsive">
                                                </div>
                                                <div class="main-khachhang col-xs-12 col-sm-8">

                                                    <div class="name-khachhang">
                                                        <div class="div2" style="height: 30px;">Anh Hoàng (Hải Phòng)
                                                        </div>
                                                        <div class="checked"><i class="fa fa-check-circle-o"></i> Xác nhận đã mua hàng</div>
                                                    </div>
                                                    <div class="shortdes-khachhang">
                                                        <div class="div5" style="height: 66px;">
                                                            So với các loại thuốc nam khác, Hoàn Xuân Thang rất dễ dùng, mùi
                                                            vị thơm ngon, không đắng, không cần chế biến cầu kỳ. Tôi thường
                                                            xuyên mang theo khi đi công tác, rất tiện lợi.
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </ul>
                                </div>
                                <div class="nbs-flexisel-nav-left" style="visibility: visible; top: 98.5px;"></div>
                                <div class="nbs-flexisel-nav-right" style="visibility: visible; top: 98.5px;"></div>
                            </div>
                            <script type="text/javascript">
                                $(window).load(function () {
                                    $("#flexiselDemo4").flexisel({
                                        visibleItems: 2,
                                        animationSpeed: 1000,
                                        autoPlay: true,
                                        autoPlaySpeed: 5000,
                                        pauseOnHover: true,
                                        enableResponsiveBreakpoints: true,
                                        responsiveBreakpoints: {
                                            portrait: {
                                                changePoint: 767,
                                                visibleItems: 1
                                            },
                                            landscape: {
                                                changePoint: 768,
                                                visibleItems: 2
                                            },
                                            tablet: {
                                                changePoint: 1000,
                                                visibleItems: 2
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-content-dangky">
            <div class="favor-ft">
                <div class="ft-favor">Ưu đãi khủng cho khách hàng: <br><strong>Mua 4 tặng 1, Mua 2 free ship</strong></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4"><img src="/product/hoanxuanthang/images/2hopthuoc.png" alt=""
                                                         class="img-responsive" style="margin:0px auto 50px auto;"></div>

                    <div class="col-sm-4 col-xs-12" id="frmres" style="margin: 80px 0;">
                        <span>Gửi thông tin liên hệ đặt hàng</span>
                        <form class="form-group" style="  margin-top: 22px;" id="myform" name="contactForm" method="post"
                              action="{{ url('san-pham/dang-ky') }}">
                            {{ csrf_field() }}
                            <input name="sp" type="hidden" value="hoanxuanthang">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Họ và tên"
                                   required="">
                            <input class="form-control" name="mobile" id="phone" type="text" placeholder="Số điện thoại"
                                   required="">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Địa chỉ Email"
                                   required="">
                            <!-- <input class="form-control" name="title" id="noidung" type="hidden" placeholder="Địa chỉ Email" value="Sản phẩm Supermass 2100"> -->
                            <div class="form-group" style="display: none;">
                                <select name="soluong" id="" class="form-control">
                                    <option value="1">Số lượng mua</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>


                            <button class="btnsubmit" type="submit" value="Gửi mail" name="save">Gửi thông tin</button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div style="text-align:center;margin-top:32px;"><img src="/product/hoanxuanthang/images/giaychungnhan.png"
                                                                             alt="" style="margin:auto;"
                                                                             class="img-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div>Bản quyền thuộc về Mẹ Tự Nhiên</div>
            </div>
        </div>


        <script type="text/javascript">
            function equalHeight(group) {
                var tallest = 0;
                group.each(function () {
                    var thisHeight = $(this).height();
                    if (thisHeight > tallest) {
                        tallest = thisHeight;
                    }
                });

                group.each(function () {
                    $(this).height(tallest);
                });
            }

            $(document).ready(function () {
                equalHeight($('.div0'));
            });
            $(document).ready(function () {
                equalHeight($('.div1'));
            });
            $(document).ready(function () {
                equalHeight($('.div2'));
            });
            $(document).ready(function () {
                equalHeight($('.div3'));
            });
            $(document).ready(function () {
                equalHeight($('.div4'));
            });
            $(document).ready(function () {
                equalHeight($('.div5'));
            });
        </script>
    </div>

    <div id="myModal" class="popup_show_ct modal fade in toiden" role="dialog"
         style="display: none; padding-right: 17px;">
        <div class="popup-child"><a href="javascript:void(0);" class="btn_close" data-dismiss="modal"
                                    aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            <div class="title">ĐĂNG KÝ MUA HÀNG NGAY</div>
            <form id="frmTVMP" name="frmTVMP" class="submit_form has-validation-callback" method="POST"
                  action="{{ url('san-pham/dang-ky') }}">
                {{ csrf_field() }}
                <input name="sp" type="hidden" value="hoanxuanthang">
                <div class="content_form">
                    <div class="form-group">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"
                                                                                    aria-hidden="true"></i></span><input
                                    type="text" id="txtName" name="name" placeholder="Nhập họ và tên"
                                    class="form-control" data-validation="required"
                                    data-validation-error-msg="Vui lòng nhập họ tên"></div>
                    </div>
                    <div class="form-group">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"
                                                                                    aria-hidden="true"></i></span><input
                                    type="text" id="txtSdt" name="mobile" placeholder="Nhập số điện thoại"
                                    class="form-control" data-validation="custom"
                                    data-validation-regexp="^(\+84|0)\d{9,10}$"
                                    data-validation-error-msg="Vui lòng nhập số điện thoại hợp lệ"></div>
                    </div>
                    <div class="form-group">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"
                                                                                    aria-hidden="true"></i></span><input
                                    type="text" id="txtAddress" name="email" placeholder="Nhập email"
                                    class="form-control" data-validation="custom"
                                    data-validation-error-msg="Vui lòng nhập email"></div>
                    </div>
                </div>
                <div class="btn_dktv">
                    <div class="loading-gif" style="display: none;">
                        <img src="/product/toiden/image/toi-den-blaga-loading.gif" alt="Đầu tư cho sức khỏe của bản thân là sự đầu tư có ích nhất!">
                    </div>
                    <button type="submit" id="btnSend" class="btn btn-lg">ĐĂNG KÝ</button>
                </div>
                <div class="info_list">
                    <div class="info_item"><i class="fa fa-gift" aria-hidden="true"></i>Sản phẩm <span
                                class="hot_line">Hoàn Xuân Thang</span>
                    </div>
                    <div class="info_item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Mua 4 tặng 1, mua 2 free ship, giá chỉ <span class="hot_line">450.000Đ/lọ 500gr</span></div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#myform').submit(function (e) {
                e.preventDefault();

                $('.btnsubmit').hide();
                $('.loading-gif').show();

                if ($('#name').val().trim() != '' && $('#phone').val().trim() != '' && $('#email').val().trim() != '') {
                    var form = $(this).serialize();
                    var url = $(this).attr('action');

                    $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: form,
                        success: function (response) {
                            if (response.status == 1) {
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

            $('#frmTVMP').submit(function (e) {
                e.preventDefault();

                $('#btnSend').hide();
                $('.loading-gif').show();

                if ($('#txtName').val().trim() != '' && $('#txtSdt').val().trim() != '' && $('#txtAddress').val().trim() != '') {
                    var form = $(this).serialize();
                    var url = $(this).attr('action');

                    $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: form,
                        success: function (response) {
                            if (response.status == 1) {
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
                    $('#btnSend').show();
                    $('.loading-gif').hide();
                }
            });
        })
    </script>
@endsection