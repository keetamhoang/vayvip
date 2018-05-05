@extends('frontend.v2.layout')

@section('title')
    <title>TOP sản phẩm giảm giá ngày {{ \Carbon\Carbon::now()->format('d/m') }} - san pham khuyen mai cập nhật hàng giờ - ĐỪNG BỎ LỠ</title>
@endsection

@section('meta')
    <meta property="og:url" content="https://taichinhsmart.vn/ma-giam-gia/danh-muc-san-pham-co-ma-giam-gia">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Sản phẩm giảm giá HOT nhất ngày {{ \Carbon\Carbon::now()->format('d/m') }} → Giảm 30% - 50% - Tìm là Có"/>
    <meta property="og:description"
          content="Tổng hợp sản phẩm, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp sản phẩm, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…"/>
    <meta name="keywords" content=""/>
@endsection

@section('style')
@endsection

@section('h1_seo')
@endsection

@section('content')
    <section class="results m-t-30 ">
        <div class="row sp">
            <div class="col-sm-9">
                <div class="widget">
                    <div class="widget-heading widget-default b-b-0">
                        <h2 class="widget-title text-dark">
                            TOP SẢN PHẨM GIẢM GIÁ BÁN CHẠY NHẤT {{ \Carbon\Carbon::now()->year }}
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                </div>

            @foreach($products as $product)
                <div class="col-sm-3">
                    <div class="widget">
                        <div class="coupon-block equal">
                            <div class="top-sp-img">
                                <a href="{{ $product->aff_link }}" title="{{ $product->name }}"
                                   style="background: url('{{ $product->image }}') no-repeat center;"></a>
                            </div>
                            @if ($product->discount != 0)
                                <div class="coupon-value" content="">{{ number_format($product->discount, 0, '.', '.') }} ₫</div>
                            @else
                                <div class="coupon-value" content="">{{ number_format($product->price, 0, '.', '.') }} ₫</div>
                            @endif
                            <div class="top-sp-bot">
                                <span class="top-sp-price">{{ number_format($product->price, 0, '.', '.') }} ₫</span>
                                @if ($product->discount != 0)
                                    <span class="top-sp-percent">Giảm {{ round(($product->price - $product->discount) / $product->price * 100) }}%</span>
                                @else
                                    {{--<span class="top-sp-percent">Giảm 0%</span>--}}
                                @endif
                            </div>
                            <p class="coupon-title"><a href="{{ $product->aff_link }}" class="top-sp-title">{{ $product->name }}</a></p>
                            <div class="action-block">
                                <p class="btn-code" onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', 'Xem chi tiết sản phẩm ở trang mở ra');window.open('{{ $product->aff_link }}','_blank')"> <span class="partial-code">Xem chi tiết</span> <span class="btn-hover">Xem chi tiết</span> </p>
                            </div>
                        </div>
                        <!--//coupon block -->
                    </div>
                </div>
            @endforeach
                {{ $products->links('frontend.paginate') }}
            </div>
            @include('frontend.v2.ma_giam_gia.sidebar')
        </div>
    </section>
@endsection