@extends('frontend')

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
    <meta name="keywords" content="tin tuc, tin tung tieu dung, tin tuc san pham, san pham thong minh, dang ky san pham, tin tuc smart, tindungsmart, tin dung smart, vay tien thong minh, vay uy tin">
@endsection

@section('styles')
    <link rel="preload" href="/assets/news/fonts/SFD-Bold.woff2" as="font">


    <link href="/assets/news/css/kenh14per-20180119v1.min.css" rel="stylesheet" type="text/css">


    <link href="/assets/news/css/nhomchudeflat-20171027v1.min.css" rel="stylesheet" type="text/css">

    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <style>
        .topic-body-wrapper {
            margin-top: 83px;
        }

        .w1014 {
            width: 100%;
        }

        .tbwcw-thumb {
            width: auto;
            height: 500px;
        }
        .tbwcw-content {
            width: 65%;
        }

        .magazine-topic-wrapper .tbwhwl-thumb {
            width: auto;
        }

        .tnwmw-grid-content .tbwnwln .tbwnwln-thumb img {
            width: 100%;
        }

        .tnwmw-grid-content .tbwnwln .tbwnwln-thumb {
            width: 100%;
        }

        .tbwcw-content a:hover {
            color: #eaeaea;
        }
    </style>
@endsection

@section('pageId')
    <div
            class="fb-customerchat"
            page_id="2150730271821209"
            ref="">
    </div>
@endsection

@section('content')
    <div class="container ">
        <div class="k14-topic-brightlgbt magazine-topic-body">

            <div class="kenh14-topic-wrapper magazine-topic-wrapper">

                <div class="clearboth" id="headerLoadTopic"></div>
                <!-- End .topic-cover-wrapper -->
                <div class="topic-body-wrapper clearfix">
                    <div class="w1014">

                        <div class="top-data">
                            @if (count($bigPosts) > 0)
                                <div class="tbw-cover-wrapper col-md-12">
                                    <a href="/tin-tuc/{{ $bigPosts[0]->slug }}"
                                       class="tbwcw-thumb k14-topic-fancy fancybox.iframe"
                                       title="{{ $bigPosts[0]->title }}" >
                                        <img src="{{ $bigPosts[0]->image }}"
                                             alt="{{ $bigPosts[0]->title }}"></a>

                                    <div class="tbwcw-content clearfix">
                                        <h2>
                                            <a href="/tin-tuc/{{ $bigPosts[0]->slug }}"
                                               class="tbwcw-title k14-topic-fancy fancybox.iframe news-title"
                                               title="{{ $bigPosts[0]->title }}">{{ $bigPosts[0]->title }}</a></h2>

                                        <div class="tbwcw-info-user">
                                            <span class="tbwcwiu-info" title="{{ \Carbon\Carbon::parse($bigPosts[0]->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($bigPosts[0]->created_at)->format('d/m/Y H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                        @endif
                        <!-- End .tbw-cover-wrapper -->

                            <div class="tbw-hightlights-wrapper clearfix col-lg-12">
                                <ul class="tbwhw-list">
                                    @foreach($bigPosts as $ind => $bigPost)
                                        @if ($ind != 0)
                                            <li class=" col-lg-6">
                                                <a href="{{ url('tin-tuc/'.$bigPost->slug) }}"
                                                   class="k14-topic-fancy fancybox.iframe tbwhwl-thumb"
                                                   title="{{ $bigPost->title }}">
                                                    <img src="{{ $bigPost->image }}"
                                                         alt="{{ $bigPost->title }}"
                                                         title="{{ $bigPost->title }}">
                                                </a>

                                                <h2 class="tbwhwl-title"><a
                                                            href="{{ url('tin-tuc/'.$bigPost->slug) }}"
                                                            class="k14-topic-fancy fancybox.iframe news-title"
                                                            title="{{ $bigPost->title }}">
                                                        {{ $bigPost->title }}
                                                    </a></h2>

                                                <div class="tbwcw-info-user">

                                                    {{--<span class="tbwcwiu-info"--}}
                                                    {{--title="2018-01-18T08:02:00.0000000">4 ngày trước</span>--}}
                                                    {{--<a href="http://kenh14.vn/tran-dang-dang-khoa-va-chiec-xe-may-di-vong-quanh-the-gioi-binh-than-len-duong-binh-than-tu-do-20180102142706623.chn#mingid_comments_content"--}}
                                                    {{--class="kscndsl-comment" style="display: none;"--}}
                                                    {{--rel="/news-20180102142706623.chn"></a>--}}
                                                    {{--<label class="kscndsl-facebook" style=""--}}
                                                    {{--rel="/news-20180102142706623.chn">4K</label>--}}
                                                </div>
                                                <span class="tbwhwl-sapo">{!!   $bigPost->short_desc !!}</span>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                        <!-- End .tbw-hightlights-wrapper -->


                        <div class="col-lg-12 mobie">
                            <div class="tbw-layout w670 tnwmw-grid-content" id="lstContentLeft">


                                <ul class="tbwnw-list-news clearfix" id="tbwnw-list-news">

                                    @foreach($otherPosts as $otherPost)
                                        <li class="tbwnwln clearfix col-md-4">
                                            <a href="{{ url('tin-tuc/'.$otherPost->slug) }}"
                                               class="tbwnwln-thumb k14-topic-fancy fancybox.iframe"
                                               title="{{ $otherPost->title }}">
                                                <img class="lazy"
                                                     data-original="{{ $otherPost->image }}"
                                                     title="{{ $otherPost->title }}"
                                                     alt="{{ $otherPost->title }}"
                                                     src="{{ $otherPost->image }}"
                                                     style="display: block;"></a>
                                            <div class="tbwnwln-info">
                                                <h3 class="tbwnwln-title"><a
                                                            href="{{ url('tin-tuc/'.$otherPost->slug) }}"
                                                            class="k14-topic-fancy fancybox.iframe"
                                                            title="{{ $otherPost->title }}">{{ $otherPost->title }}</a></h3>

                                                <div class="tbwcw-info-user">


                                                    <span class="tbwcwiu-info" title="{{ \Carbon\Carbon::parse($otherPost->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($otherPost->created_at)->format('d/m/Y H:i') }}</span>

                                                </div>
                                                <div class="other-post">
                                                    <span class="tbwnln-sapo">{!!   $otherPost->short_desc !!}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach



                                </ul>

                                <div class="tbw-page-wrapper clearfix">


                                    <div class="load-stream-animation clearfix" style="display: none;">
                                        <span class="lsa-thumb"></span>
                                        <span class="lsa-line1"></span>
                                        <span class="lsa-line2"></span>
                                    </div>
                                    <div class="view-more-detail clearboth" style="display: block;">
                                        <a href="javascript:void(0)" onclick="viewMore()">Bấm để xem thêm</a>
                                    </div>
                                    <div class="clearboth" id="footerLoadListDetail"></div>
                                </div>

                                <!-- End .tbw-page-wrapper -->
                            </div>

                        </div>
                        <!-- End .tbw-news-wrapper -->


                    </div>
                </div>
                <!-- End .Topic-body-wrapper -->
                <div data-break-ad="vt1" style="height: 0px" id="adm_sticky_footer1"></div>
            </div>
        </div>
    </div>

    <div id="" class=" col-lg-12" style="padding: 0px">
        <div class="kfa-footer-menu">
            <div class="">
                <ul class="kfa-list-footer-menu">
                </ul>
                <!-- End .kfa-list-footer-menu -->
            </div>
        </div>
        <div class=" " style="padding: 0px 0px 30px;">
            <div class="" style="color: #777; text-align: center">
                <b style="font-weight: bold;">Tài chính SMART © 2018.</b><br><br>
                Mọi vấn đề liên quan xin liên hệ tới địa chỉ Email: taichinhsmart.vn@gmail.com
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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