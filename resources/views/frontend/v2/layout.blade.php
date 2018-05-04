<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    @yield('title')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    @yield('meta')

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
    <link href="/new/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/animsition.min.css" rel="stylesheet" type="text/css">
    <link href="/new/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Theme styles -->
    <link href="/new/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/new.css" rel="stylesheet" type="text/css">

    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="site-wrapper" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <!-- Navigation Bar-->

    @include('frontend.v2.header')

    <!-- Navigation ends -->
    <div class="wrapper">
        <div class="container">
            @yield('content')
        </div>

        <section class="call-to-action">
            <div class="container">
                <div class="row explain_group">
                    <div class="col-md-4">
                        <a class="item" rel="nofollow" href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">
                            <div class="box-icon"> <i class="bg-danger ti-shopping-cart"></i> </div>
                            <div class="box-info">
                                <h3>Cùng săn mã giảm giá</h3>
                                <h4>Sale off tới 50% cùng nhiều ưu đãi</h4>
                                <div class="point"><i class="ti-check"></i><span>Cập nhật nhanh nhất</span> </div>
                                <div class="point"><i class="ti-check"></i><span>Các mã có độ chính xác cao</span> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="item" rel="nofollow" href="{{ url('vay-von-tin-dung') }}">
                            <div class="box-icon"> <i class="bg-info ti-wallet"></i> </div>
                            <div class="box-info">
                                <h3>Vay vốn tín dụng</h3>
                                <h4>Có thể vay tới 100 triệu</h4>
                                <div class="point"><i class="ti-check"></i><span>Thủ tục nhanh chóng, tiện lợi</span> </div>
                                <div class="point"><i class="ti-check"></i><span>Nhiều ưu đãi hấp dẫn về lãi suất</span> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="item" rel="nofollow" href="{{ url('tin-tuc/the-tin-dung-la-gi-12') }}">
                            <div class="box-icon"> <i class="bg-purple ti-ticket"></i> </div>
                            <div class="box-info">
                                <h3>Làm thẻ tín dụng</h3>
                                <h4>Từ các ngân hàng lớn, uy tín</h4>
                                <div class="point"><i class="ti-check"></i><span>Miễn phí hoàn toàn phí mở thẻ</span> </div>
                                <div class="point"><i class="ti-check"></i><span>Thủ tục nhanh chóng, tiện lợi</span> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter-alert">
            <div class="container text-center">
                <div class="col-sm-12">
                    <div class="newsletter-form">
                        <h4><i class="ti-email"></i>Đăng ký để nhận mã giảm giá, các chương trình khuyến mại mới nhất, tốt nhất</h4>
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Email"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" type="button">
                           Đăng ký
                           </button>
                           </span>
                        </div>
                        <p><small>Chúng tôi cam kết bảo mật thông tin của bạn.</small> </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end:Newsletter signup -->
        <!-- Footer -->

        @include('frontend.v2.footer')

        <!-- start modal -->
        <!-- Large modal -->
        <div class="coupon_modal modal fade couponModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span> </button>
                    <div class="coupon_modal_content">

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <h2>Save 30% off New Domains Names</h2>
                                <p>Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="text-center text-uppercase m-t-20 text-muted">Click below to get your coupon code</h5>
                                </div>

                                <div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3"> <a href="#" target="_blank" class="coupon_code alert alert-info"><span class="coupon_icon"><i class="ti-cut hidden-xs"></i></span>  DAZ50-8715
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="report">Did this coupon work? <span class="yes vote-link" data-src="#">Yes</span> <span class="no vote-link" data-src="#">No</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Coupon modal content -->
                </div>



                <div class="newsletter-modal">
                    <div class="newsletter-form">
                        <h4><i class="ti-email"></i>Sign up for our weekly email newsletter with the best money-saving coupons.</h4>
                        <div class="input-group">
                            <input class="form-control input-lg" placeholder="Email" type="text"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" type="button">
                           Subscribe
                           </button>
                           </span>
                        </div>
                        <p><small>We’ll never share your email address with a third-party.</small> </p>
                    </div>
                </div>
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="It worked"><i class="ti-check color-green"></i></a> </li>
                    <li role="presentation"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="I love it"><i class="ti-heart color-primary"></i></a> </li>
                    <li role="presentation"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-close"></i></a> </li>
                </ul>


            </div>
        </div>
        <!-- end: Modall -->
    </div>
</div>
<!-- //wrapper -->
<!-- jQuery  -->
<script src="/new/assets/js/jquery.min.js"></script>
<script src="/new/assets/js/bootstrap.min.js"></script>
<script src="/new/assets/js/animsition.min.js"></script>
<script src="/new/owl.carousel/owl.carousel.min.js"></script>
<!-- Kupon js -->
<script src="/new/assets/js/kupon.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.coupon-wrapper .btn-code, .coupon-wrapper .coupon-title a', function (e) {
            var id = $(this).attr('data-id');

            $.ajax({
                type: 'get',
                data: {id: id},
                url: '{{ url('used') }}',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                }
            });
        });

        $('#load-more').click(function (e) {
            var count = $('.magiamgiahot .coupon-single').length;

            $.ajax({
                url: '{{ url('ma-giam-gia/load-more') }}',
                type: 'get',
                dataType: 'html',
                data: {
                    count: count,
                },
                success: function (response) {
                    $('#coupons').append(response);
                }
            });
        });
    })
</script>

@yield('script')



</body>
</html>