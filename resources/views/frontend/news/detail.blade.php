@extends('frontend')

@section('title')
    <title>{{ $post->title }} | TaichinhSMART.vn</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/tin-tuc/{{ $post->slug }}">
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $post->title }} | TaichinhSMART.vn" />
    <meta property="og:description"   content="{!!  !empty(trim($post->short_desc)) ? $post->short_desc : 'Tài chính thông minh trong tầm tay của bạn.'  !!}" />
    <meta property="og:image"         content="http://taichinhsmart.vn{{ $post->image }}" />
@endsection

@section('styles')
    <link rel="preload" href="/assets/news/fonts/SFD-Bold.woff2" as="font">
    <link href="/assets/news/detail/css/kenh14flat-20180109v1.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/news/detail/css/detailflat-20171205v3.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/news/detail/css/responsive-20170407v1.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/form/style.css">

    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <style>
        @media screen and (max-width: 1200px) {
            .small-news .kbwc-body > .w300 {
                margin-right: 0;
            }
        }

        @media (max-width: 767px) {
            .fl {
                float: none;
            }
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
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '171691203603021');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=171691203603021&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    {!! $post->pixel !!}
    <div class="container ">
        <div id="admWrapsite">
            <div id="admzone13602"></div>
            <div class="kenh14-wrapper kenh14-detail size-m ">
                <!-- top toolbar -->

                <div class="kenh14-header-wrapper">
                    <!-- header -->

                    {{--<div class="sticky-wrapper" style="height: 40px;">--}}
                        {{--<div id="k14-main-menu-wrapper-sticky-wrapper" class="sticky-wrapper" style="height: 40px;">--}}
                            {{--<div id="k14-main-menu-wrapper" style="width: 1903px;">--}}
                                {{--<div class="khw-bottom-header">--}}
                                    {{--<div class="w1040 clearfix">--}}
                                        {{--<ul class="kbh-menu-list clearfix fl">--}}
                                            {{--<li class="kmli home"><a href="http://kenh14.vn/">TRANG CHỦ</a></li>--}}
                                            {{--<li class="kmli active"><a href="http://kenh14.vn/star.chn"--}}
                                                                       {{--title="Star">Star</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/tv-show.chn" title="TV Show">TV--}}
                                                    {{--Show</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/cine.chn" title="Ciné">Ciné</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/musik.chn" title="Musik">Musik</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/fashion.chn"--}}
                                                                 {{--title="Fashion">Fashion</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/doi-song.chn" title="Đời sống">Đời--}}
                                                    {{--sống</a></li>--}}

                                            {{--<li class="kmli "><a href="http://kenh14.vn/an-ca-the-gioi.chn"--}}
                                                                 {{--title="Ăn cả thế giới">Ăn cả thế giới</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/xa-hoi.chn" title="Xã hội">Xã--}}
                                                    {{--hội</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/the-gioi.chn" title="Thế giới">Thế--}}
                                                    {{--giới</a></li>--}}
                                            {{--<li class="kmli "><a href="http://kenh14.vn/sport.chn" title="Sport">Sport</a>--}}
                                            {{--</li>--}}

                                            {{--<li class="kmli "><a href="http://kenh14.vn/hoc-duong.chn" title="Học đường">Học--}}
                                                    {{--đường</a></li>--}}
                                            {{--<li class="kmli"><a href="http://kenh14.vn/video.chn" title="Video">Video</a>--}}
                                            {{--</li>--}}

                                            {{--<li class="kmli expand-icon">--}}
                                                {{--<a href="http://kenh14.vn/soc-em-trai-ha-ji-won-qua-doi-o-tuoi-34-vi-benh-tram-cam-20180121221924009.chn#"--}}
                                                   {{--rel="nofollow">--}}
                                                    {{--<span class="ei-line1"></span>--}}
                                                    {{--<span class="ei-line2"></span>--}}
                                                    {{--<span class="ei-line3"></span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="kbh-wca-gala-toggle fr pre-live kbhwgt-collapsed"--}}
                                             {{--style="display: none;">--}}
                                            {{--<a href="javascript:;" class="kbhwgt-btn clearfix">--}}
                                                {{--<span class="kbhwgtb-icon"></span>--}}
                                                {{--<span class="kbhwgtb-text">live</span>--}}
                                                {{--<span class="kbhwgtb-arrow"></span>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <!-- top banner -->

                    <div class="khw-ads-wrapper">
                        <div class="w1040">
                            <div id="admzone49"></div>
                        </div>
                    </div>

                </div>

                <div class="kenh14-body-wrapper">
                    <div class="adm-mainsection">
                        <div class="ads-sponsor type-2 adm-hidden">
                            <div id="admsectionlogo"></div>
                            <div id="admsection1"></div>
                        </div>
                        <div class="adm-sponsor">

                            <div class="ads-sponsor type-2 adm-hidden">
                                <div id="admsection2"></div>
                                <div id="admsection3"></div>
                            </div>
                        </div>
                        <div class="kbw-background">

                            <div class="kbw-submenu">
                                <div class="w1040 clearfix">
                                    <div style="padding: 17px 0px;color: #078145"><a href="#">{{ $post->category->name }}</a>
                                        {{--<i class="fa fa-angle-right"></i> <a href="#">AXX</a>--}}
                                        @if (auth('admin')->check())
                                            <a style="float: right;" href="{{ url('admin/posts/' . $post->id) }}">Sửa bài viết</a>
                                        @endif</div>
                                </div>
                            </div>
                            <style>

                                .diroisedenIcon a {
                                    width: 118px;
                                    padding: 0 !important;
                                    height: 30px !important;
                                    background: url(http://kenh14cdn.com/web_images/Di-roi-se-den-cat-logo.png) center center no-repeat;
                                    position: absolute;
                                    border-bottom: none !important;
                                    margin-top: 5px;
                                }

                                .diroisedenIcon a:hover {
                                    background-color: transparent !important;
                                    border-bottom: none !important;
                                }

                                .roadToWeChoiceIcon a {
                                    width: 152px;
                                    padding: 0 !important;
                                    height: 30px !important;
                                    background: url(http://kenh14cdn.com/web_images/RTWC-menu-icon.png) center center no-repeat;
                                    position: absolute;
                                    border-bottom: none !important;
                                    margin-top: 5px;
                                }

                                .roadToWeChoiceIcon a:hover {
                                    background-color: transparent !important;
                                    border-bottom: none !important;
                                }
                            </style>

                            <style>

                                .kenh14-wrapper.size-m .knc-content h3 {
                                    width: 100%;
                                }

                                .kenh14-wrapper.size-l .klw-new-content .VCSortableInPreviewMode[type=Photo].big-image-detail .detail-img-lightbox img {
                                    width: auto !important;
                                }

                                .fancybox-type-image a.fancybox-close, .fancybox-type-image a.fancybox-expand, .fancybox-type-image a.fancybox-nav span, .fancybox-type-inline a.fancybox-close, .fancybox-type-inline a.fancybox-expand, .fancybox-type-inline a.fancybox-nav span {
                                    display: none;
                                }

                            </style>

                            <div class="kbw-content ">
                                <div class="w1040 wfull">
                                    <div class="w1040 kbwc-body clearfix" id="k14-detail-content">

                                        <div class="w300 fr adm-rightsection">
                                            <div id="admsection8"></div>

                                            <div class="w300 mg0 clearfix">


                                                <div id="admzone24309"></div>

                                                <div id="admzone51"></div>

                                                <div id="admzone253"></div>

                                                <div id="admzone972"></div>

                                                <div id="admzone55"></div>

                                                <div id="admzone336"></div>

                                            </div>

                                        </div>

                                        <div class="w700 kbwcb-left kbwcb-top fl adm-leftsection">
                                            <div class="kbwcb-left-wrapper">
                                                <div class="clearfix">
                                                    <div class="klw-body-top">


                                                        <div class="kbwc-header mb-20">


                                                            <h1 class="kbwc-title">{{ $post->title }}</h1>

                                                            <div class="kbwc-meta" sourceid="7">
                                                                <span class="kbwcm-author"><i class="fa fa-user"></i> {{ $post->account->name }}, </span>
                                                                <span class="kbwcm-time" title="{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}</span>
                                                            </div>

                                                            <div class="kbwc-socials">
                                                                <div class="fb-like" data-href="{{ url('tin-tuc/' . $post->slug.'?ref=fb') }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                                            </div>


                                                        </div>

                                                        <div class="klw-new-content">


                                                            <h2 class="knc-sapo">
                                                                {!! $post->short_desc !!}
                                                            </h2>


                                                            <div class="knc-relate-wrapper">
                                                                <ul class="krw-list">

                                                                    @php $randoms = \App\Models\Post::where('status', config('const.ACTIVE'))->inRandomOrder()->limit(3)->get(); @endphp
                                                                    @foreach($randoms as $random)
                                                                        <li class="krwli">
                                                                            <a href="{{ url('tin-tuc/' . $random->slug) }}"
                                                                               title="{{ $random->title }}"
                                                                               data-popup-url="{{ url('tin-tuc/' . $random->slug) }}"
                                                                               class="show-popup visit-popup">
                                                                                {{ $random->title }}
                                                                                <i class="icon-show-popup"></i>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>

                                                            <div class="react-relate animated hiding-react-relate">
                                                            </div>

                                                            <div data-check-position="body_start"></div>
                                                            <div class="knc-content">

                                                                <!-- Kham pha -->


                                                                {!! $post->content !!}

                                                            </div>
                                                            <!-- LIVE -->

                                                            <div data-check-position="body_end"></div>

                                                            <div class="knc-rate-link">
                                                                @php
                                                                    $nextPost = \App\Models\Post::where('id', '>', $post->id)->where('status', config('const.ACTIVE'))->orderBy('id', 'asc')->first();
                                                                    if (empty($nextPost)) {
                                                                        $nextPost = \App\Models\Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
                                                                        if (empty($nextPost)) {
                                                                            $nextPost = $post;
                                                                        }
                                                                    }
                                                                @endphp
                                                                @if (!empty($nextPost))
                                                                <a href="{{ url('tin-tuc/'.$nextPost->slug) }}"
                                                                   title="{{ $nextPost->title }}"
                                                                   class="krl">
                                                                    {{ $nextPost->title }}
                                                                </a>
                                                                @endif

                                                            </div>

                                                        </div>
                                                        <div class="post_embed">
                                                            <div id="admzone38016"></div>
                                                        </div>

                                                        {{--tags--}}
                                                        <div class="klw-nomargin">
                                                            <div class="klw-new-socials clearfix">
                                                                <div class="kns-social clearfix">
                                                                        <div class="fb-like" data-href="{{ url('tin-tuc/' . $post->slug.'?ref=fb') }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                                                </div>
                                                            </div>
                                                            {{--<div class="klw-new-tags clearfix">--}}
                                                                {{--<ul class="knt-list">--}}

                                                                    {{--<li class="kli"><a--}}
                                                                                {{--href="http://kenh14.vn/ha-ji-won.html"--}}
                                                                                {{--title="ha ji won">ha ji won</a></li>--}}

                                                                    {{--<li class="kli"><a--}}
                                                                                {{--href="http://kenh14.vn/benh-tram-cam.html"--}}
                                                                                {{--title="bệnh trầm cảm">bệnh trầm cảm</a></li>--}}

                                                                    {{--<li class="kli"><a--}}
                                                                                {{--href="http://kenh14.vn/jeon-tae-soo.html"--}}
                                                                                {{--title="jeon tae soo">jeon tae soo</a></li>--}}

                                                                    {{--<li class="kli"><a href="http://kenh14.vn/sao-han.html"--}}
                                                                                       {{--title="sao Hàn">sao Hàn</a></li>--}}

                                                                    {{--<li class="kli"><a--}}
                                                                                {{--href="http://kenh14.vn/dien-vien.html"--}}
                                                                                {{--title="diễn viên">diễn viên</a></li>--}}

                                                                {{--</ul>--}}
                                                            {{--</div>--}}

                                                        </div>
                                                    </div>

                                                    <div class="ads-sponsor type-2 adm-hidden">
                                                        <div id="admsection5"></div>
                                                    </div>
                                                    <div class="ads-sponsor type-6 hidden">
                                                        <div id="admsection65"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="adm_sponsor_footer1"></div>
                                    <div class="w1040">
                                        <div class="klw-body-bottom w720 kbwcb-left">


                                            <!-- Begin .same-category-stream -->
                                            <div data-break-ad="vt1" style="height: 0px" id="adm_sticky_footer1"></div>
                                            <div class="klw-detail-stream" id="k14-detail-stream">


                                                <div style="position: absolute;top: 830px;right: -343px;">
                                                    <div class="ads-sticky-right">
                                                        <div id="admzone35871"></div>
                                                    </div>


                                                    <div class="ads-sponsor type-2 adm-hidden">
                                                        <div id="admsection7"></div>
                                                    </div>


                                                </div>
                                                <div class="kds-hot-daily" id="ulTinNoiBat"
                                                     data-marked-zoneid="k14_detail_tin_noi_bat">
                                                    <h3 class="kds-title">có thể bạn quan tâm</h3>
                                                    <div class="knd-wrapper swiper-container-horizontal">
                                                        <ul class="khd-list swiper-wrapper">
                                                            @php $relates = \App\Models\Post::where('category_id', $post->category_id)->where('status', config('const.ACTIVE'))->inRandomOrder()->limit(4)->get() @endphp
                                                            @foreach($relates as $relate)
                                                                <li class="khdli swiper-slide col-lg-3">
                                                                    <a href="{{ url('tin-tuc/'.$relate->slug) }}"
                                                                       class="kdhli-ava"
                                                                       title="{{ $relate->title }}">
                                                                        <img src="{{ $relate->image }}"
                                                                             alt="{{ $relate->title }}">
                                                                    </a>
                                                                    <h3 class="kdhli-title">
                                                                        <a href="{{ url('tin-tuc/'.$relate->slug) }}"
                                                                           title="{{ $relate->title }}">
                                                                            {{ $relate->title }}
                                                                        </a>
                                                                    </h3>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-ad-frame="vt2"></div>
                                            <!-- End .same-category-stream -->

                                            <!-- Begin .kds-new-stream-wrapper -->

                                            <style>
                                                .welax .pause-vd-notify span svg {
                                                    margin-top: 0;
                                                }

                                                .welax .pause-vd-notify span {
                                                    bottom: 10px;
                                                }
                                            </style>


                                            <div class="kds-new-stream-wrapper" data-marked-zoneid="kenh14-detail-d3">
                                                <div class="kds-title mb-0">Tin mới trong ngày</div>
                                                <ul class="kscnds-list">


                                                    <!-- Cuối trang, check load -->
                                                    <div data-check-position="k14_detail_list1_start"></div>

                                                    @php $newests = \App\Models\Post::where('status', config('const.ACTIVE'))->orderBy('created_at', 'desc')->limit(10)->get() @endphp

                                                    @foreach($newests as $newest )
                                                        <li class="knswli need-get-value-facebook clearfix  done-get-type done-get-sticker done-get-brand-content"
                                                            data-boxtype="NewsPublish">
                                                            <div class="knswli-left fl">
                                                                <a href="{{ url('tin-tuc/'.$newest->slug) }}"
                                                                   class="kscliw-ava"
                                                                   type="0" rel="newstype"
                                                                   title="{{ $newest->title }}"
                                                                   init-sapo-type="" init-sapo-value="">
                                                                    <img src="{{ $newest->image }}"
                                                                         alt="{{ $newest->title }}">
                                                                </a>
                                                            </div>
                                                            <div class="knswli-right">

                                                                <h3 class="knswli-title">
                                                                    <a href="{{ url('tin-tuc/'.$newest->slug) }}"
                                                                        newstype="0" type="0"
                                                                       title="{{ $newest->title }}">
                                                                        {{ $newest->title }}
                                                                    </a>
                                                                </h3>
                                                                <div class="knswli-meta">
                                                                    <a href="{{ url('danh-muc/'.$newest->category->slug) }}"
                                                                       class="knswli-category">{{ $newest->category->name }}</a> -
                                                                    <span class="knswli-time" title="{{ \Carbon\Carbon::parse($newest->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($newest->created_at)->format('d/m/Y H:i') }}</span>
                                                                </div>
                                                                <span class="knswli-sapo sapo-need-trim">{!!   $newest->short_desc !!}</span>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>

                                            <!-- End .kds-new-stream-wrapper -->

                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>


                </div>

                {{--<div id="kenh14-footer-wrapper" class="kenh14-footer-wrapper" style="display: block;">--}}
                    {{--<div class="kfa-footer-menu">--}}
                        {{--<div class="w1040">--}}
                            {{--<ul class="kfa-list-footer-menu">--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/star.chn" title="Star">Star</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/musik.chn" title="Musik">Musik</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/cine.chn" title="Ciné">Ciné</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/tv-show.chn" title="TV Show">TV Show</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/fashion.chn" title="Fashion">Fashion</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/doi-song.chn" title="Đời sống">Đời sống</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/xa-hoi.chn" title="Xã hội">Xã hội</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/the-gioi.chn" title="Thế giới">Thế giới</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/suc-khoe-gioi-tinh.chn" title="Giới tính">Giới tính</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/made-by-me.chn" title="Made by Me">Made by Me</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/sport.chn" title="Sport">Sport</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/kham-pha.chn" title="Khám phá">Khám phá</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/2-tek.chn" title="2-Tek">2-Tek</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/la-cool.chn" title="Lạ &amp; Cool">Lạ &amp; Cool</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/hoc-duong.chn" title="Học đường">Học đường</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/video.chn" title="Video">Video</a>--}}
                                {{--</li>--}}
                                {{--<li class="kfa-footer-menu">--}}
                                    {{--<a href="http://kenh14.vn/quizz.chn" title="Quizz">Quizz</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<!-- End .kfa-list-footer-menu -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
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
    <script>
        $(document).ready(function () {
            if ($('.register-form').html() != 'undefined') {
                $('.register-form .sign-up').append(
                    '<input type="hidden" name="post_id" value="{{ $post->id }}">'
                );
            }

            $('.sign-up').submit(function (e) {
                e.preventDefault();
                var thisForm = $(this);
                var form = $(this).serialize();

                $.ajax({
                    type: 'post',
                    data: form,
                    url: '{{ url('dang-ky/thong-tin') }}',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == 1) {
                            thisForm.find('.alert-form').removeClass('kee-alert-danger').addClass('kee-alert-success');
                            thisForm.find('.alert-form').html(response.message);
                            thisForm.find('.alert-form').show()
                        } else {
                            thisForm.find('.alert-form').removeClass('kee-alert-success').addClass('kee-alert-danger');
                            thisForm.find('.alert-form').html(response.message);
                            thisForm.find('.alert-form').show()
                        }
                    }
                });
            })
        })
    </script>
@endsection