@extends('frontend.v2.layout')

@section('title')
    <title>
        @include('frontend.v2.ma_giam_gia.title')
    </title>
@endsection

@section('meta')
    @include('frontend.v2.ma_giam_gia.meta')
@endsection

{{--@section('h1_seo')--}}
    {{--@include('frontend.v2.ma_giam_gia.h1_seo')--}}
{{--@endsection--}}

@section('top')

@endsection

@section('content')
    <section class="banner-mgg">
        <a href="http://go.ecotrackings.com//?token=XXIojgGJSvKuZJFGKvUzW&url=http%3A%2F%2Fwww.lazada.vn&sub1=tachinhsmart&sub2=banner&sub3=&sub4=&network_id=lazadamobile" onclick="window.open('{{ url('ma-giam-gia/ma-giam-gia-hot') }}')" target="_self"><img src="/assets/image/ma-giam-gia-lazada.png" alt="tất cả mã giảm giá HOT"></a>
    </section>
    <section class="results m-t-30">
        <div class="row">
            <!--/col -->
            <div class="col-sm-9">
                <div class="dp-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 dph-info">
                                <div class="col-md-2">
                                    <img src="{{ $image }}" class="profile-img" alt="{{ $name }}">
                                </div>
                                <div class="col-md-10">
                                    <h1>{{ $name }}</h1>
                                    <p class="desc-p">{{ $desc }}
                                    </p>
                                    <div class="desc-div">
                                        <a href="javascript:;">{{ $store }}</a> <a href="javascript:;">Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 desc-bot">
                                {!! $partner->desc_up !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!--/widget -->

                @if ($partner->type == 0)
                    @include('frontend.v2.ma_giam_gia.old')
                @elseif ($partner->type == 1)
                    @include('frontend.v2.ma_giam_gia.new')
                @endif

                {{--<div class="coupon-single text-center see-more">--}}
                    {{--<button class="btn btn-danger" id="load-more">Xem thêm, còn nhiều lắm</button>--}}
                {{--</div>--}}
                <!-- end: Tab content -->
                <div class="widget desc-bot">
                    <div class="widget-body">
                    {!! $partner->desc_bot !!}
                    </div>
                </div>

                <!-- Poplura stores -->
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
            </div>
            @include('frontend.v2.ma_giam_gia.sidebar')
        </div>
    </section>
@endsection