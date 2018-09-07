@extends('frontend.v2.layout')

@section('title')
    <title>{{ $post->title }}</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/{{ $post->slug }}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:description"
          content="{{ !empty($post->desc_meta) ? $post->desc_meta : 'Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…' }}"/>
    <meta property="og:image" content="http://taichinhsmart.vn{{ $post->image }}"/>

    <meta name="description"
          content="{{ !empty($post->desc_meta) ? $post->desc_meta : 'Tổng hợp mã giảm giá, khuyến mãi HOT từ các trang mua sắm online uy tín tại Việt Nam như Lazada, Tiki, Adayroi,... Chia sẻ kinh nghiệm mua sắm online…' }}"/>
    <meta name="keywords" content="{{ $post->keyword_meta }}"/>
@endsection

@section('style')
    <link rel="stylesheet" id="mltx-style-css" href="/new/assets/css/news.css" type="text/css" media="all">
@endsection

@section('pageId')
    <div
            class="fb-customerchat"
            page_id="{{ $post->category_id == 3 ? '175253416410272' : '2150730271821209' }}"
            ref="">
    </div>
@endsection

@section('content')

    {!! $post->pixel !!}

    <section id="kienthuc" class="clearfix">
            <div class="bgadmtoptotal "></div>
            <div class="adm-mainsection">
                <div class="khungdetail totalcontentdetail">

                    <div class="wp980">
                        <div class="newscontent adm-leftsection noibat col col-lg-8">

                            <div class="detail-single2">


                                <div class="content" id="mainDetail">


                                    <h1 class="title title-p">
                                        {{ $post->title }}
                                    </h1>
                                    <div class="timeandcatdetail">
                                        <span class="time">
                                        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}
                                        </span>
                                        <span class="gach">|</span>
                                        <span class="cat"><a href="#" title="{{ $post->category->name }}">{{ $post->category->name }}</a></span>
                                    </div>

                                    <div id="fbrecommend">
                                        <div class="fbLikeWrap">
                                            <div class="fb-like add" data-href="{{ url($post->slug) }}"
                                                 data-layout="button_count" data-action="like" data-size="small"
                                                 data-show-faces="false" data-share="false"></div>
                                        </div>

                                        <div class="send-button fr">
                                            <div class="fb-send fl add" data-href="{{ url($post->slug) }}"
                                                 data-colorscheme="light"></div>
                                        </div>
                                    </div>


                                    <div class="w640right">
                                        <div class="mxhsingle2">
                                            <i class="icontronfb"
                                               onclick=""></i>
                                            <i class="icontronsendfb"
                                               onclick=""></i>
                                        </div>

                                        {{--short desc--}}
                                        <div class="short-desc">{!! $post->short_desc !!}</div>

                                        <div data-check-position="body_start" style="padding-bottom: 20px;"></div>

                                        <div class="detail-content">
                                            {{--content--}}
                                            {!! $post->content !!}
                                            <p class="p-author">
                                                <strong class="detail-author">
                                                    {{ $post->account->name }}</strong>
                                            </p>
                                        </div>
                                        <div data-check-position="body_end"></div>
                                        @php
                                            $nextPost = \App\Models\Post::where('id', '>', $post->id)->first();
                                            if (empty($nextPost)) {
                                                $nextPost = \App\Models\Post::where('id', '<', $post->id)->first();
                                            }
                                        @endphp

                                        @if (!empty($nextPost))
                                            <div class="VCSortableInPreviewMode link-content-footer IMSCurrentEditorEditObject"
                                                 type="link">
                                                <a href="{{ $nextPost->slug }}" title="{{ $nextPost->title }}"
                                                   style="font-size: 22px; font-weight: bold;">{{ $nextPost->title }}</a>
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="noibat-right col col-lg-4">
                            <div class="banner">
                                <img src="/assets/image/sanpham.png">
                            </div>
                            <div style="text-align: center;">
                                <a class="btn3 scrollto pre-link" href="{{ url('/san-pham/landing/com-vi-sinh-bao-ve-suc-khoe-nutribaby') }}" style="text-decoration: none;">
                                    Đặt hàng ngay!
                                </a>
                            </div>
                        </div>

                        <!--end newscontent-->
                        <!--end contentright-->
                    </div>

                    <div class="tinmoidetail">
                        <div class="docthemdetail tab">Đọc thêm</div>
                        <div class="wp980">
                            <div class="timelineld">
                                <div class="listtimeline list_home2 listpopup listdetail">
                                    <ul class="loadin" id="LoadStreamDetail" dspid="3" algid="0" boxid="1">
                                        @php $randoms = \App\Models\Post::where('id', '!=', $post->id)->inRandomOrder()->limit(15)->get();  @endphp
                                        @foreach($randoms as $random)
                                            <li class="pulistdt"
                                                id="LocalNewsId20180427102712288"><a
                                                        href="{{ $random->slug }}"
                                                        title="{{ $random->title }}"
                                                        class="show-popup visit-popup"><img
                                                            src="{{ $random->image }}"
                                                            alt="{{ $random->title }}"
                                                            title="{{ $random->title }}"
                                                            width="260" height="162"></a>
                                                <h3>
                                                    <a href="{{ $random->slug }}"
                                                       title="{{ $random->title }}"
                                                       class="show-popup visit-popup">{{ $random->title }}</a></h3>
                                                <p class="cate"><span class="time" title="{{ \Carbon\Carbon::parse($random->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($random->created_at)->format('d/m/Y H:i') }}</span>
                                                </p>
                                                <p class="desc">{!! $random->short_desc !!}</p>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="fb-loading-wrapper more_loading"
                                         style="max-width: 710px; display: none;">
                                        <div class="fblw-timeline-item ">
                                            <div class="fblwti-animated">
                                                <div class="fblwtia-mask fblwtia-title-line fblwtia-title-mask-0"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sapo-line-0"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-0"></div>
                                                <div class="fblwtia-mask fblwtia-title-line fblwtia-title-mask-1"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sapo-line-1"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-1"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-2"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-2"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-2"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-3"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-3"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-3"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-4"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-4"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" rel="nofollow" class="more" style="display: none">Xem
                                        tiếp &gt;&gt;</a>
                                </div>
                            </div>
                            <div class="timelinerd">

                                <div id="admsection7"></div>

                                <div id="admzone479828"></div>
                            </div>
                            <div class="clearb"></div>
                            <div id="adm_sponsor_footer2"></div>
                        </div>
                    </div>


                    <div class="light-box-bounder">
                        <div class="light-box-content">
                            <div class="light-box loading">
                            </div>
                        </div>
                        <div class="radianbotpopup"></div>
                        <div class="close-wrap">
                            <div class="close">
                                <div class="close-1"></div>
                                <div class="close-2"></div>

                            </div>
                        </div>
                    </div>

                    <div class="clearb"></div>
                </div>

                <div style="clear: both"></div>
            </div>
    </section>
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