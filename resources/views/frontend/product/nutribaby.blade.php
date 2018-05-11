@extends('frontend.v2.layout')

@section('title')
    <title>Chuyên trang chăm sóc sức khỏe cả gia đình</title>
    <!-- Hotjar Tracking Code for https://taichinhsmart.vn/san-pham/com-vi-sinh-bao- -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:877617,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/{{ $post->slug }}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Chuyên trang chăm sóc sức khỏe cả gia đình"/>
    <meta property="og:description"
          content="{!!  !empty(trim($post->short_desc)) ? $post->short_desc : 'Chuyên trang chăm sóc sức khỏe cả gia đình.'  !!}"/>
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
                                        </div>
                                        <div data-check-position="body_end"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="noibat-right col col-lg-4">
                            <div class="banner">
                                <img src="/assets/image/sanpham.png">
                            </div>
                            <div style="text-align: center;" class="hidden-xs">
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