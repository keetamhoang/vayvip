<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64597649-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-64597649-5');
    </script>

    <meta charset="utf-8" />

    @yield('title')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    @yield('meta')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/assets/image/{{ session()->get('web') == 'vi' ? 'favicon.ico' : 'nowvoucher-favicon.ico' }}" type="image/x-icon">
    <link href="/new/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/animsition.min.css" rel="stylesheet" type="text/css">
    <link href="/new/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Theme styles -->
    <link href="/new/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/new/assets/css/new.css" rel="stylesheet" type="text/css">

    @if (in_array(session()->get('web'), ['sg', 'my', 'ph']))
        <link href="/new/assets/css/new-en.css" rel="stylesheet" type="text/css">
    @endif

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

    @if (empty($landing))
    @if (session()->get('web') == 'vi')
        @include('frontend.v2.header')
    @else
        @include('frontend.v2.en.header')
    @endif
    @endif

    <!-- Navigation ends -->
    <div class="wrapper">
        @yield('top')
        <div class="container">
            @yield('content')
        </div>

        @if (empty($landing))
        @if (session()->get('web') == 'vi')
        <section class="call-to-action">
            <div class="container">
                <div class="row explain_group">
                    <div class="col-md-4">
                        <a class="item" href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">
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
                        <a class="item" href="{{ url('vay-von-tin-dung') }}">
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
                        <a class="item" href="{{ url('tin-tuc/the-tin-dung-la-gi-12') }}">
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
        @endif
        <section class="newsletter-alert">
            <div class="container text-center">
                <div class="col-sm-12">
                    <div class="newsletter-form">
                        @if (session()->get('web') == 'vi')
                            <h4><i class="ti-email"></i>Nhận ưu đãi và coupon mới nhất ngay tại hộp thư cá nhân!</h4>
                        @else
                            <h4><i class="ti-email"></i>Get the latest deals and coupons at your personal mailbox!</h4>
                        @endif

                        @if (session()->get('web') == 'vi')
                            <p class="dk-alert-footer"><small>Cảm ơn bạn đã đăng ký, bạn sẽ nhận được tin giảm giá và khuyến mãi sớm nhất!</small></p>
                        @else
                            <p class="dk-alert-footer"><small>Thank you for signing up, you will receive the latest discount and promotion information!</small></p>
                        @endif
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Email" id="dk-email-footer"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" id="dk-btn-footer" type="button">
                           @if (session()->get('web') == 'vi')
                                   Đăng ký
                               @else
                               Submit
                               @endif
                           </button>
                           </span>
                        </div>
                            @if (session()->get('web') == 'vi')
                        <p><small>Chúng tôi cam kết bảo mật thông tin của bạn.</small> </p>
                                @else
                                <p><small>We are committed to protecting your private information.</small> </p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end:Newsletter signup -->
        <!-- Footer -->
        @endif

        @if(empty($landing))
        @include('frontend.v2.footer')
        @endif

        <!-- start modal -->
        <!-- Large modal -->
        <div class="coupon_modal modal fade couponModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span> </button>
                    <div class="coupon_modal_content">

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <h2 class="coupon-title"></h2>
                                {{--<p class="coupon-desc"></p>--}}
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @if (session()->get('web') == 'vi')
                                    <h5 class="text-center text-uppercase m-t-20 text-muted">Copy mã bên dưới <a href="#" target="_blank" class="go-site">tới trang này</a> để sử dụng tại bước thanh toán</h5>
                                        @else
                                        <h5 class="text-center text-uppercase m-t-20 text-muted">Copy the code below and visit <a href="#" target="_blank" class="go-site">this page</a> to use it at checkout</h5>
                                        @endif
                                </div>

                                <div class="col-sm-5 col-sm-offset-2 col-xs-6 col-xs-offset-3">
                                    <a href="javascript:;" class="coupon_code alert alert-info"><span class="coupon_icon"></span>
                                        <span id="coupon-code"></span>
                                    </a>
                                </div>
                                <div class="col-sm-2 col-sm-offset-0 col-xs-6 col-xs-offset-3 text-center">
                                    @if (session()->get('web') == 'vi')
                                        <a class="btn btn-danger copy-btn" data-clipboard-action="copy" data-clipboard-target="#coupon-code" onclick="copy()">Sao chép</a>
                                        <a class="btn btn-danger go-site-btn" target="_blank" href="">Vào trang này</a>
                                    @else
                                        <a class="btn btn-danger copy-btn" data-clipboard-action="copy" data-clipboard-target="#coupon-code" onclick="copy()">Copy Code</a>
                                        <a class="btn btn-danger go-site-btn" target="_blank" href="">Go to Store</a>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="report">Did this coupon work? <span class="yes vote-link" data-src="#">Yes</span> <span class="no vote-link" data-src="#">No</span> </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!-- end: Coupon modal content -->
                </div>



                <div class="newsletter-modal col-lg-12">
                    <div class="newsletter-logo hidden-xs col col-lg-4">
                        <img src="/new/assets/images/newsletter_homepage.png" alt="Nhận ưu đãi và coupon mới nhất ngay tại hộp thư cá nhân!">
                    </div>
                    <div class="newsletter-form col col-lg-8 col-lg-offset-2">
                        @if (session()->get('web') == 'vi')
                            <h4>Nhận ưu đãi và coupon mới nhất ngay tại hộp thư cá nhân!</h4>
                        <p class="dk-alert"><small>Cảm ơn bạn đã đăng ký, bạn sẽ nhận được tin giảm giá và khuyến mãi sớm nhất!</small></p>
                        <div class="input-group">
                            <input class="form-control input-lg" placeholder="Email" type="text" id="dk-email"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" id="dk-btn" type="button">
                            Đăng ký
                           </button>
                           </span>
                        </div>
                            <p><small>Chúng tôi cam kết bảo mật thông tin của bạn.</small> </p>
                        @else
                            <h4>Get the latest deals and coupons at your personal mailbox!</h4>
                            <p class="dk-alert"><small>Thank you for signing up, you will receive the latest discount and promotion information!</small></p>
                            <div class="input-group">
                                <input class="form-control input-lg" placeholder="Email" type="text" id="dk-email"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" id="dk-btn" type="button">
                           Submit
                           </button>
                           </span>
                            </div>
                            <p><small>We are committed to protecting your private information.</small> </p>
                        @endif
                    </div>
                </div>
                {{--<ul class="nav nav-pills nav-justified">--}}
                    {{--<li role="presentation" class="active"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="It worked"><i class="ti-check color-green"></i></a> </li>--}}
                    {{--<li role="presentation"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="I love it"><i class="ti-heart color-primary"></i></a> </li>--}}
                    {{--<li role="presentation"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-close"></i></a> </li>--}}
                {{--</ul>--}}


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
<script src="/js/clipboard.min.js"></script>
<!-- Kupon js -->
<script src="/new/assets/js/kupon.js"></script>

<script>
    function copy() {
        @if (session()->get('web') == 'vi')
            $('.copy-btn').html('Đã chép');
        @else
            $('.copy-btn').html('Copied');
        @endif
    }

    $(document).ready(function () {
        new ClipboardJS('.copy-btn');

        @if (Request::input('position') == 1)
        var id = '{{ Request::input('id') }}';

        $.ajax({
            type: 'get',
            data: {id: id},
            url: '{{ url('get-detail') }}',
            dataType: 'json',
            success: function (response) {
                if (response.status == 1) {
                    var coupon = response.coupon;
                    var discount = response.discount;

                    $('.coupon_modal .coupon-title').html(discount.name);
                    $('.coupon_modal .coupon-desc').html(discount.content);
                    $('.coupon_modal .go-site').attr('href', discount.aff_link);
                    if (coupon != null) {
                        $('.go-site-btn').hide();
                        $('.copy-btn').show();

                        $('.coupon_modal #coupon-code').html(coupon.coupon_code);
                    } else {
                        $('.go-site-btn').show();
                        $('.copy-btn').hide();
                        $('.coupon_modal .go-site-btn').attr('href', discount.aff_link);

                        @if (session()->get('web') == 'vi')
                            $('.coupon_modal #coupon-code').html('Không yêu cầu mã coupon');
                        @else
                            $('.coupon_modal #coupon-code').html('No code required');
                        @endif
                    }
                }
            }
        });
            
        $('.coupon_modal').modal('show');
        @endif

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

        $('#dk-btn').click(function (e) {
            var email = $('#dk-email').val();
            $.ajax({
                url: '{{ url('dang-ky/popup/voucher') }}',
                type: 'post',
                dataType: 'json',
                data: {
                    email: email,
                },
                success: function (response) {
                    if (response.status == 1) {
                        $('#dk-email').val('');
                        $('.dk-alert small').html(response.message);
                        $('.dk-alert').show();
                    } else {
                        $('.dk-alert small').html(response.message);
                        $('.dk-alert').show();
                    }
                }
            });
        });

        $('#dk-btn-footer').click(function (e) {
            var email = $('#dk-email-footer').val();
            $.ajax({
                url: '{{ url('dang-ky/popup/voucher') }}',
                type: 'post',
                dataType: 'json',
                data: {
                    email: email,
                },
                success: function (response) {
                    if (response.status == 1) {
                        $('#dk-email-footer').val('');
                        $('.dk-alert-footer small').html(response.message);
                        $('.dk-alert-footer').show();
                    } else {
                        $('.dk-alert-footer small').html(response.message);
                        $('.dk-alert-footer').show();
                    }
                }
            });
        });
    })
</script>

@yield('script')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>