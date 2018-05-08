@extends('frontend.v2.layout')

@section('title')
    <title>Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="https://taichinhsmart.vn">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ"/>
    <meta property="og:description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>

    <meta name="keywords"
          content=""/>
@endsection

@section('h1_seo')
    <h1 class="h1-seo">Tổng hợp mã giảm giá mới, khuyến mãi HOT trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="slide-wrap shadow">
                <div class="main-slider">
                    <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="one"> <img src="/new/assets/images/ma-giam-gia-banner-2.png" alt="Mã giảm giá HOT nhất"> </a>
                    <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="item" data-hash="two"> <img src="/new/assets/images/ma-giam-gia-banner-1.png" alt="Mã giảm giá khuyến mại HOT nhất"> </a>
                    <a href="{{ url('vay-von/dang-ky') }}" class="item" data-hash="three"> <img src="/new/assets/images/vay-von-tin-dung-banner-2.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>
                    <a href="{{ url('tin-dung/dang-ky') }}" class="item" data-hash="four"> <img src="/new/assets/images/the-tin-dung-banner-1.png" alt="Đăng ký vay vốn tín dụng NHANH"> </a>
                </div>
                <!-- /.carosuel -->
                <div class="carousel-tabs clearfix">
                    <a class="col-sm-3 tab url" href="#three">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-2-small.png" alt="Mã giảm giá HOT nhất"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mua sắm thả ga</h4>
                                <p>Tự tin không lo về giá ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#four">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/ma-giam-gia-banner-1-small.png" alt="Mã giảm giá khuyến mại HOT nhất"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Săn deal khủng</h4>
                                <p>Các mã giảm giá đến 50% ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#one">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/vay-von-tin-dung-banner-2-small.png" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Vay vốn tín dụng</h4>
                                <p>Vay tới 100 triệu đồng ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 tab url" href="#two">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="/new/assets/images/the-tin-dung-banner-1-small.png" alt="Đăng ký vay vốn tín dụng NHANH"> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Làm thẻ tín dụng</h4>
                                <p>Hoàn toàn miễn phí ...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--/slide wrap -->
        </div>
        <!-- /col 12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            @include('frontend.v2.coupon_home')
            <!-- end: Tab content -->
            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        TOP đơn vị khuyến mãi
                    </h3>
                    <div class="widget-widgets"> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">Xem tất cả <span class="ti-angle-right"></span></a> </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}"> <img class="img-responsive" src="/new/assets/images/lazada-240x240.png" alt="Khuyến mãi HOT nhất Lazada"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Lazada</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}"> <img class="img-responsive" src="/new/assets/images/tiki-240x240.png" alt="Khuyến mãi HOT nhất Tiki"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Tiki</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}"> <img class="img-responsive" src="/new/assets/images/adayroi-240x240.png" alt="Khuyến mãi HOT nhất Adayroi"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Adayroi</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}"> <img class="img-responsive" src="/new/assets/images/grab-240x240.png" alt="Khuyến mãi HOT nhất Grab"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Grab</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}"> <img class="img-responsive" src="/new/assets/images/mytour-240x240.png" alt="Khuyến mãi HOT nhất Du lịch"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>MyTour</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="{{ url('ma-giam-gia/ma-giam-gia-lotte') }}"> <img class="img-responsive" src="/new/assets/images/lotte-240x240.png" alt="Khuyến mãi HOT nhất Lotte"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Lotte</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Vay vốn tín dụng trên Tài chính SMART
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body widget-vayvon">
                    <div class="">
                        <h3 class="text-center" style="margin-top: 0;color: #f30;">Lợi ích</h3>
                        <p>Sản phẩm thỏa mãn ngay các nhu cầu chi tiêu cá nhân đột xuất của bạn, dễ dàng trả khoản vay theo hình thức trả góp hàng tháng nhưng không cần thế chấp tài sản đảm bảo.</p>
                        <div class="row" style="font-size: 17px;margin: 20px 0;">
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Đáp ứng nhanh chóng các nhu cầu chi tiêu đột xuất
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Lựa chọn được những ngân hàng cho vay uy tín, phù hợp với nhu cầu vay
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Không cần thế chấp tài sản đảm bảo
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Thủ tục hồ sơ giản lược, thời gian phê duyệt nhanh chóng
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Vay tối đa tới 100 triệu trong 48 tháng
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Nhiều ưu đãi hấp dẫn đến từ các ngân hàng
                                </div>
                            </div>
                        </div>
                        <p>Vay tiêu dùng thế chấp là sản phẩm tín dụng hỗ trợ vốn nhanh chóng cho các nhu cầu tiêu dùng một khoản lớn của Khách hàng như du lịch, cưới hỏi, mua sắm trang thiết bị nội thất, đồ gia dụng...</p>
                        <div class="btn-div">
                            <a class="btn btn-danger" href="{{ url('vay-von/dang-ky') }}">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Đăng ký làm thẻ tín dụng miễn phí tại các ngân hàng uy tín
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body widget-vayvon">
                    <div class="">
                        <h3 class="text-center" style="margin-top: 0;color: #f30;">Lợi ích làm thẻ tín dụng</h3>
                        <p>Tài chính SMART là cầu nối giữa bạn và những ngân hàng lớn, uy tín trên cả nước với mục đích kết nối nhu cầu mở thẻ tín dụng của bạn tới những ngân hàng phù hợp.</p>
                        <div class="row" style="font-size: 17px;margin: 20px 0;">
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Được ngân hàng ưu đãi lãi suất 0% trong 30-45 ngày đầu tiên
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Thanh toán linh hoạt, bạn có thể thanh toán hóa đơn, mua vé máy bay,… với giá ưu đãi
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Ưu đãi bất tận khi mua sắm tại các siêu thị, trung tâm thương mại, trang thương mại điện tử lớn
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="col col-lg-1 i-left">
                                    <i class="ti-check-box"></i>
                                </div>
                                <div class="col col-lg-11">
                                    Thanh toán trong và ngoài nước với thẻ tín dụng quốc tế Mastercard/Visa, đi du lịch chỉ cần mang theo thẻ tín dụng thôi đấy
                                </div>
                            </div>
                        </div>
                        <div class="btn-div">
                            <a class="btn btn-danger" href="{{ url('tin-dung/dang-ky') }}">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget categories b-b-0">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Tiện ích nổi bật
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <!-- Sidebar navigation -->
                    <ul class="nav sidebar-nav">
                        <li>
                            <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}"> <i class="ti-gift">
                                </i> Săn mã giảm giá HOT - Deal khủng <span class="sidebar-badge">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('vay-von/dang-ky') }}"> <i class="ti-wallet">
                                </i> Vay vốn tín dụng NHANH <span class="sidebar-badge">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('tin-dung/dang-ky') }}"> <i class="ti-ticket">
                                </i> Đăng ký làm thẻ tín dụng FREE <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('tin-tuc-tai-chinh') }}"> <i class="ti-pulse">
                                </i> Theo dõi tin tức về tài chính <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('mua-sam-hom-nay') }}"> <i class="ti-shopping-cart-full">
                                </i> Mua sắm hôm nay có gì HOT? <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('san-pham/san-pham-toi-den-1-nhanh-blaga') }}"> <i class="ti-heart-broken">
                                </i> Trị tiểu đường - Tỏi đen 1 nhánh Blaga <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                        <li>
                            <a href="{{ url('san-pham/san-pham-hoan-xuan-thang') }}"> <i class="ti-heart-broken">
                                </i> Trị tóc bạc, sinh lý kém - Hoàn Xuân Thang <span class="sidebar-badge badge-circle">
                             <i class="ti-arrow-right" style="margin: 0px;border: none;padding: 0px;"></i>
                             </span> </a>
                        </li>
                    </ul>
                    <!-- Sidebar divider -->
                </div>
            </div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Tìm kiếm Mã giảm giá, Khuyến mãi HOT
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <form class="form-horizontal select-search" action="{{ url('tim-kiem') }}" method="get">
                        {{--<label class="control-label ">What you searching for?</label>--}}
                        {{--<div class="btn-group" data-toggle="buttons">--}}
                            {{--<label class="btn btn-default"> <i class="ti-tag"></i>--}}
                                {{--<input type="checkbox" checked>Coupons</label>--}}
                            {{--<label class="btn btn-default"> <i class="ti-cut"></i>--}}
                                {{--<input type="checkbox">Discounts</label>--}}
                            {{--<label class="btn btn-default active"> <i class="ti-alarm-clock"></i>--}}
                                {{--<input type="checkbox">Deals</label>--}}
                        {{--</div>--}}
                        <fieldset>
                            <div class="form-group">
                                {{--<label class="control-label ">Keyword</label>--}}
                                <input class="form-control" id="s" name="s" type="text" placeholder="Vd: Lazada, tivi, sách,..."/>
                            </div>
                            {{--<div class="row">--}}
                                {{--<!-- Select Basic -->--}}
                                {{--<div class="form-group col-sm-6 col-xs-12">--}}
                                    {{--<label class="control-label " for="category">Select category</label>--}}
                                    {{--<select class="select form-control" id="category" name="category">--}}
                                        {{--<option value="Electronics">Electronics</option>--}}
                                        {{--<option value="Fashion">Fashion</option>--}}
                                        {{--<option value="Kids">Kids</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-sm-6 col-xs-12">--}}
                                    {{--<label class="control-label " for="store">Select a store</label>--}}
                                    {{--<select class="select form-control" id="store" name="store">--}}
                                        {{--<option value="Shopname">Shopname</option>--}}
                                        {{--<option value="Ebay">Ebay</option>--}}
                                        {{--<option value="Ebay">Shopname</option>--}}
                                        {{--<option value="Ebay">Hostgator</option>--}}
                                        {{--<option value="Ebay">Ebay</option>--}}
                                        {{--<option value="Bangdoo">Bangdoo</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <!-- //row -->
                            <!-- Button -->
                            <div class="form-group ">
                                <button id="search_btn" class="btn btn-danger left">Tìm kiếm</button>
                                <div class="left" style="margin-top: 14px;">| Nhóm <a href="https://www.facebook.com/groups/166734627219703/" target="_blank"><i class="ti-facebook"></i> Sale Hunter</a></div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Từ khóa nổi bật
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <ul class="tags">
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}" class="tag">
                                Mã giảm giá
                            </a>
                        </li>
                        <li> <a href="{{ url('vay-von-tin-dung') }}" class="tag">
                                Vay vốn tín dụng
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-tiki') }}" class="tag">
                                Tiki
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-lazada') }}" class="tag">
                                Lazada
                            </a>
                        </li>
                        <li> <a href="{{ url('tin-tuc/the-tin-dung-la-gi-12') }}" class="tag">
                                Thẻ tín dụng
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-grab') }}" class="tag">
                                Grab
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}" class="tag">
                                Adayroi
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}" class="tag">
                                Du lịch
                            </a>
                        </li>
                        <li> <a href="{{ url('ma-giam-gia/ma-giam-gia-shopee') }}" class="tag">
                                Shopee
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget">
                <!-- /widget heading -->
                <div class="ads-slider">
                    <a href="{{ url('san-pham/san-pham-toi-den-1-nhanh-blaga') }}" target="_blank"><img src="/new/assets/images/toi-den-blaga-banner-1.png" alt="Tỏi đen 1 nhánh Blaga chữa bệnh tiểu đường"></a>
                    <a href="{{ url('san-pham/san-pham-hoan-xuan-thang') }}" target="_blank"><img src="/new/assets/images/hoan-xuan-thang-tri-bac-toc-banner-1.png" alt="Tóc bạc sớm, sinh lý kém Hoàn xuân thang"></a>
                </div>
                <!-- // widget body -->
            </div>
            <div class="widget trending-coupons">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Khuyến mãi HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    @php $randomKms = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->inRandomOrder()->limit(7)->get() @endphp

                    @foreach($randomKms as $randomKm)
                        <div class="media">
                            {{--http://placehold.it/64x64--}}
                            <div class="media-left media-middle a-image"> <a href="{{ $randomKm->aff_link }}" target="_blank" title="{{ $randomKm->name }}"
                                                                             style="background: url({{ $randomKm->image }}) no-repeat center;"></a> </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{ $randomKm->aff_link }}" target="_blank" title="{{ $randomKm->name }}">{{ $randomKm->name }}</a></h4>
                                <div class="media-div">
                                    <p>{!! $randomKm->content !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- // widget body -->
            </div>
            <!-- /widget -->

        </div>
        <!-- end col -->
    </div>
    <!-- End row -->
@endsection

@section('script')

@endsection