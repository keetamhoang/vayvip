@extends('frontend.v2.layout')

@section('title')
    <title>Mã giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - ma giam gia cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia">
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
    <section class="results m-t-30">
        <div class="row">
            @include('frontend.v2.ma_giam_gia.sidebar')
            <!--/col -->
            <div class="col-sm-9">
                <div class="widget">
                    <div class="widget-heading widget-default b-b-0">
                        <h2 class="widget-title text-dark">
                            KHUYẾN MÃI - GIẢM GIÁ MỚI NHẤT
                        </h2>
                        <div class="widget-widgets">
                            <div class="form-group sort">
                                <a href="{{ url('ma-giam-gia/ma-giam-gia-hot') }}">Còn nhiều lắm, xem hết <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default" class="panel-collapse collapse">
                        <div class="widget-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</div>
                    </div>
                </div>

                <div class="coupon-wrapper coupon-single featured">
                    <div class="row">
                        <div class="ribbon-wrapper hidden-xs">
                            <div class="ribbon">HOT</div>
                        </div>
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">45%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">98% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="#more">Shop these Store deals of the day to save as much...</p>
                            <p id="more" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- //row -->
                </div>
                <!-- //coupon wrapper -->
                <div class="coupon-wrapper coupon-single">
                    <div class="row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">50%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">90% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="#more6">Shop these Store deals of the day to save as much...</p>
                            <p id="more6" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- //row -->
                </div>
                <!-- //coupon wrapper -->
                <div class="coupon-wrapper coupon-single featured">
                    <div class="row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">15%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="#more2">Shop these Store deals of the day to save as much...</p>
                            <p id="more2" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- //row -->
                </div>
                <!-- //coupon wrapper -->
                <div class="coupon-wrapper coupon-single">
                    <div class="row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">75%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="#more3">Shop these Store deals of the day to save as much...</p>
                            <p id="more3" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- //row -->
                </div>

                <div class="widget">
                    <div class="widget-heading widget-default b-b-0">
                        <h2 class="widget-title text-dark">
                            TOP MÃ GIẢM GIÁ SẢN PHẨM BÁN CHẠY NHẤT {{ \Carbon\Carbon::now()->year }}
                        </h2>
                        <div class="widget-widgets">
                            <div class="form-group sort">
                                <a href="{{ url('ma-giam-gia/danh-muc-san-pham-co-ma-giam-gia') }}">Còn nhiều lắm, xem hết <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default" class="panel-collapse collapse">
                        <div class="widget-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</div>
                    </div>
                </div>
                <!-- end: Widget -->

                @php $products = \App\Models\KmProduct::where('status', \App\Models\KmProduct::ACTIVE)->inRandomOrder()->limit(3)->get(); @endphp

                <div class="row sp">
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="widget">
                                <div class="coupon-block equal">
                                    <div class="top-sp-img">
                                        <a href="{{ $product->aff_link }}" title="{{ $product->name }}"
                                           style="background: url('{{ $product->image }}') no-repeat center;"></a>
                                    </div>
                                    <div class="coupon-value" content="">{{ number_format($product->price, 0, '.', '.') }} ₫</div>
                                    <div class="top-sp-bot">
                                        <span class="top-sp-price">12.800.000₫</span>
                                        <span class="top-sp-percent">Giảm -18%</span>
                                    </div>
                                    <h4 class="coupon-title"><a href="{{ $product->aff_link }}" class="top-sp-title">{{ $product->name }}</a></h4>
                                    <div class="action-block">
                                        <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Xem chi tiết sản phẩm ở trang mở ra');window.open('{{ $product->aff_link }}','_blank')"> <span class="partial-code">Xem chi tiết</span> <span class="btn-hover">Xem chi tiết</span> </p>
                                    </div>
                                </div>
                                <!--//coupon block -->
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--<ul class="pagination pagination-lg m-t-0">--}}
                    {{--<li>--}}
                        {{--<a href="#"> <i class="ti-arrow-left"></i> </a>--}}
                    {{--</li>--}}
                    {{--<li> <a href="#">1</a> </li>--}}
                    {{--<li class="active"> <a href="#">2</a> </li>--}}
                    {{--<li> <a href="#">3</a> </li>--}}
                    {{--<li> <a href="#">4</a> </li>--}}
                    {{--<li>--}}
                        {{--<a href="#"> <i class="ti-arrow-right"></i> </a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </section>
@endsection