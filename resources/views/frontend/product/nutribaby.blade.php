@extends('frontend.v2.layout')

@section('title')
    <title>Cốm vi sinh bảo vệ sức khỏe cho bé Nutri Baby</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/{{ $post->slug }}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Cốm vi sinh bảo vệ sức khỏe cho bé Nutri Baby"/>
    <meta property="og:description"
          content="{!!  !empty(trim($post->short_desc)) ? $post->short_desc : 'Tài chính thông minh trong tầm tay của bạn.'  !!}"/>
    <meta property="og:image" content="http://taichinhsmart.vn{{ $post->image }}"/>
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
            <div class="adm-mainsection">
                <div class="khungdetail totalcontentdetail">

                    <div class="wp980">
                        <div class="newscontent adm-leftsection noibat col col-lg-8">

                            <div class="detail-single2">


                                <div class="content" id="mainDetail">


                                    <h1 class="title">
                                        {{ $post->title }}
                                    </h1>

                                    <div id="fbrecommend">

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