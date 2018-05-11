@extends('frontend.v2.layout')

@section('title')
    <title>Tin tức tài chính thông minh | TaichinhSMART.vn</title>
@endsection

@section('meta')
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tin tức tài chính - Tài chính SMART">
    <meta property="og:description"
          content="Cập nhật tất cả về những thông tin sản phẩm, kinh nghiệm mua hàng mà bạn không thể bỏ qua. Tài chính SMART - Tài chính thông minh trong tầm tay của bạn.">
    <meta property="og:url" content="http://taichinhsmart.vn/tin-tuc">
    <meta property="og:site_name" content="Tin tức tài chính - Tài chính SMART">
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/tintucsmart.jpg">
    <meta name="keywords"
          content="tin tuc, tin tung tieu dung, tin tuc san pham, san pham thong minh, dang ky san pham, tin tuc smart, tindungsmart, tin dung smart, vay tien thong minh, vay uy tin">
@endsection

@section('style')
    <link rel="stylesheet" id="mltx-style-css" href="/new/assets/css/news.css" type="text/css" media="all">
@endsection

@section('pageId')
    <div
            class="fb-customerchat"
            page_id="2150730271821209"
            ref="">
    </div>
@endsection

@section('content')
    <section id="kienthuc" class="clearfix">
            <div class="bgadmtoptotal "></div>
            <div class="contentleft">

                <div data-check-position="cb_home-position_focus"></div>
                <div style="overflow: hidden;">
                    <div class="noibat widget col col-lg-9" data-marked-zoneid="cb_home_focus">
                        @if (count($posts) > 0)
                            <ul>
                                <li class="noibat2">
                                    <h2>
                                        <a href="{{ $posts[0]->slug }}"
                                           title="{{ $posts[0]->name }}">{{ $posts[0]->title }}</a>
                                    </h2>
                                    <div class="infohl col col-lg-6">
                                        {!! $posts[0]->short_desc !!}
                                    </div>
                                    <a class="col col-lg-6 infoa1" href="{{ $posts[0]->slug }}" title="{{ $posts[0]->title }}">
                                        <img src="{{ $posts[0]->image }}" alt="{{ $posts[0]->title }}"></a>
                                </li>

                                @for($i=1;$i<4;$i++)
                                    @if (!empty($posts[$i]))
                                        <li class="normal {{ $i == 3 ? 'last' : '' }} col col-lg-4"><a class="normal-noibat"
                                                    href="{{ $posts[$i]->slug }}"
                                                    title="{{ $posts[$i]->title }}"><img
                                                        src="{{ $posts[$i]->image }}"
                                                        alt="{{ $posts[$i]->title }}"
                                                        width="223" height="140"></a>
                                            <h2>
                                                <a href="{{ $posts[$i]->slug }}"
                                                   title="{{ $posts[$i]->title }}">{{ $posts[$i]->title }}</a></h2></li>
                                    @else
                                        @break
                                    @endif
                                @endfor
                            </ul>
                        @endif
                    </div>
                    <div class="noibat-right col col-lg-3">
                        <div class="banner">
                            <a href="{{ url('san-pham/san-pham-toi-den-1-nhanh-blaga') }}" target="_blank"><img
                                        src="/product/toiden/image/toi-den-blaga-5.png"></a>
                        </div>
                    </div>
                </div>

                <!--end noibat-->

                <div style="display: block; width: 100%; float: left; background: #bababa; width: 90px;"></div>
                <i class="gachtimelinedo"></i>
                <div id="admzone3670"></div>

                <div class="listtimeline list_home">
                    <ul class="last">

                        <div data-check-position="cb_home_list1_start"></div>
                        @if (count($posts) > 4)
                            @for($j=4;$j<count($posts);$j++)
                                <li class="">
                                    <a href="{{ $posts[$j]->slug }}"
                                       title="{{ $posts[$j]->title }}"
                                       class="show-popup visit-popup"><img
                                                src="{{ $posts[$j]->image }}"
                                                alt="{{ $posts[$j]->title }}"
                                                title="{{ $posts[$j]->title }}" width="200"
                                                height="150"></a>
                                    <h3><a href="{{ $posts[$j]->slug }}"
                                           title="{{ $posts[$j]->title }}"
                                           class="show-popup visit-popup">{{ $posts[$j]->title }}</a>
                                    </h3>
                                    <p class="cate">{{ $posts[$j]->category->name }} <span>-</span> <span class="time"
                                                                                                          title="{{ \Carbon\Carbon::parse($posts[$j]->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($posts[$j]->created_at)->format('d/m/Y H:i') }}</span>
                                    </p>
                                    <p class="desc">
                                        {!! $posts[$j]->short_desc !!}
                                    </p>
                                </li>
                            @endfor
                        @endif

                        <div id="admzone485335"></div>
                    </ul>


                </div>

            </div>
    </section>
@endsection

@section('script')
    <script src="/js/jquery.dotdotdot.js"></script>
    <script>
        $(document).ready(function () {
            $(".tbwnwln-title a").each(function (index) {
                if ($(this).height() > 100) {
                    $(this).dotdotdot({
                        height: 100
                    });
                }
            });

            $('.tbwnln-sapo').each(function (index) {
                if ($(this).height() > 110) {
                    $(this).dotdotdot({
                        height: 110
                    });
                }
            });

        })
    </script>
@endsection