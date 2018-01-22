@extends('frontend')

@section('styles')
    <link rel="preload" href="/assets/news/fonts/SFD-Bold.woff2" as="font">
    <link href="/assets/news/detail/css/kenh14flat-20180109v1.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/news/detail/css/detailflat-20171205v3.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/news/detail/css/responsive-20170407v1.min.css" rel="stylesheet">
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

@section('content')
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
                                    <div style="padding: 17px 0px;color: #078145"><a href="#">ABC</a> <i class="fa fa-angle-right"></i> <a href="#">AXX</a></div>
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


                                                            <h1 class="kbwc-title">SỐC: Em trai Ha Ji Won qua đời ở tuổi 34
                                                                vì bệnh trầm cảm</h1>

                                                            <div class="kbwc-meta" sourceid="7">
                                                                <span class="kbwcm-author">Nhã An, </span>
                                                                <span class="kbwcm-source">Theo <a target="_blank"
                                                                                                   rel="nofollow"
                                                                                                   href="http://ttvn.vn/">Trí Thức Trẻ</a> </span>
                                                                <span class="kbwcm-time" title="2018-01-21T22:20:10">22:20 21/01/2018</span>
                                                            </div>

                                                            <div class="kbwc-socials">

                                                                <div>Chia se</div>
                                                            </div>


                                                        </div>

                                                        <div class="klw-new-content">


                                                            <h2 class="knc-sapo">
                                                                Hiện tại, các fan đang gửi tới gia đình Ha Ji Won những lời
                                                                động viên và chia buồn sâu sắc nhất.
                                                            </h2>


                                                            <div class="knc-relate-wrapper">
                                                                <ul class="krw-list">

                                                                    <li class="krwli">
                                                                        <a data-newsid="20180116171506947"
                                                                           href="http://kenh14.vn/pgone-sinh-tram-cam-doi-tu-sat-sau-scandal-ngoai-tinh-va-su-nghiep-xuong-doc-20180116171506947.chn"
                                                                           title="PGone sinh trầm cảm, đòi tự sát sau scandal ngoại tình và sự nghiệp xuống dốc?"
                                                                           data-popup-url="/pgone-sinh-tram-cam-doi-tu-sat-sau-scandal-ngoai-tinh-va-su-nghiep-xuong-doc-20180116171506947rf20180121221924009.chn"
                                                                           class="show-popup visit-popup">
                                                                            PGone sinh trầm cảm, đòi tự sát sau scandal
                                                                            ngoại tình và sự nghiệp xuống dốc?
                                                                            <i class="icon-show-popup"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li class="krwli">
                                                                        <a data-newsid="20180102214442498"
                                                                           href="http://kenh14.vn/gay-tranh-cai-vi-phat-ngon-ve-benh-tram-cam-sau-khi-jonghyun-mat-baekhyun-chinh-thuc-len-tieng-giai-bay-20180102214442498.chn"
                                                                           title="Gây tranh cãi vì phát ngôn về bệnh trầm cảm sau khi Jonghyun mất, Baekhyun chính thức lên tiếng giãi bày"
                                                                           data-popup-url="/gay-tranh-cai-vi-phat-ngon-ve-benh-tram-cam-sau-khi-jonghyun-mat-baekhyun-chinh-thuc-len-tieng-giai-bay-20180102214442498rf20180121221924009.chn"
                                                                           class="show-popup visit-popup">
                                                                            Gây tranh cãi vì phát ngôn về bệnh trầm cảm sau
                                                                            khi Jonghyun mất, Baekhyun chính thức lên tiếng
                                                                            giãi bày
                                                                            <i class="icon-show-popup"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li class="krwli">
                                                                        <a data-newsid="20171224001054466"
                                                                           href="http://kenh14.vn/kha-chan-dong-tram-cam-doi-tu-tu-sau-khi-chia-tay-nguoi-yeu-hon-6-tuoi-sau-3-nam-hen-ho-20171224001054466.chn"
                                                                           title="Kha Chấn Đông trầm cảm, đòi tự tử sau khi chia tay người yêu hơn 6 tuổi sau 3 năm hẹn hò?"
                                                                           data-popup-url="/kha-chan-dong-tram-cam-doi-tu-tu-sau-khi-chia-tay-nguoi-yeu-hon-6-tuoi-sau-3-nam-hen-ho-20171224001054466rf20180121221924009.chn"
                                                                           class="show-popup visit-popup">
                                                                            Kha Chấn Đông trầm cảm, đòi tự tử sau khi chia
                                                                            tay người yêu hơn 6 tuổi sau 3 năm hẹn hò?
                                                                            <i class="icon-show-popup"></i>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                            <div class="react-relate animated hiding-react-relate">
                                                            </div>

                                                            <div data-check-position="body_start"></div>
                                                            <div class="knc-content">

                                                                <!-- Kham pha -->


                                                                <p>Hàng loạt các trang báo xứ Hàn đưa tin sốc, Jeon Tae
                                                                    Soo - cậu em trai của<a title="Ha Ji Won"
                                                                                                           class="link-tag"
                                                                                                           target="_blank"
                                                                                                           href="http://kenh14.vn/ha-ji-won.html"> Ha Ji Won</a> đã qua đời ngày hôm nay, hưởng dương 34 tuổi. Nam diễn viên qua đời sau một thời gian dài chiến đấu với chứng bệnh trầm cảm.
                                                                </p>
                                                                <div class="VCSortableInPreviewMode alignCenter active"
                                                                     type="Photo" data-style="align-center" style="">
                                                                    <div><a href="/assets/news/detail/image/gas-1516547205102.jpg"
                                                                            data-fancybox-group="img-lightbox"
                                                                            title="Jeon Tae Soo - em trai của Ha Ji Won"
                                                                            target="_blank" class="detail-img-lightbox"><img
                                                                                    src="/assets/news/detail/image/gas-1516547205102.jpg"
                                                                                    id="img_b2813b50-febc-11e7-8811-033600859e0f"
                                                                                    w="550" h="389"
                                                                                    alt="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm - Ảnh 1."
                                                                                    title="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm - Ảnh 1."
                                                                                    rel="lightbox"
                                                                                    photoid="b2813b50-febc-11e7-8811-033600859e0f"
                                                                                    type="photo" style="width:100%;max-width:100%;"
                                                                                    data-original="https://kenh14cdn.com/2018/gas-1516547205102.jpg"
                                                                                    width="" height="" class="lightbox-content"></a>
                                                                    </div>
                                                                    <div class="PhotoCMS_Caption"><p
                                                                                data-placeholder="[nhập chú thích]" class="">
                                                                            Jeon Tae Soo - em trai của Ha Ji Won</p></div>
                                                                </div>
                                                                <p>Được biết, lễ tang sẽ được tổ chức kín đáo và lặng lẽ với
                                                                    sự tham dự của người thân và gia đình. Hiện những dòng
                                                                    chia sẻ và động viên trên mạng xã hội đang được gửi đến
                                                                    gia đình Ha Ji Won.</p>
                                                                <div class="VCSortableInPreviewMode active noCaption big-image-detail"
                                                                     type="Photo" style="">
                                                                    <div>
                                                                        <a href="/assets/news/detail/image/1387193888-1541190820-1516547492442.jpg"
                                                                           data-fancybox-group="img-lightbox" title=""
                                                                           target="_blank" class="detail-img-lightbox"><img
                                                                                    src="/assets/news/detail/image/1387193888-1541190820-1516547492442.jpg"
                                                                                    id="img_5ddd2ea0-febd-11e7-a98d-1b9a1f1c3ac8"
                                                                                    w="958" h="1440"
                                                                                    alt="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm - Ảnh 2."
                                                                                    title="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm - Ảnh 2."
                                                                                    rel="lightbox"
                                                                                    photoid="5ddd2ea0-febd-11e7-a98d-1b9a1f1c3ac8"
                                                                                    type="photo" style="max-width:100%;"
                                                                                    data-original="https://kenh14cdn.com/2018/1387193888-1541190820-1516547492442.jpg"
                                                                                    width="" height="" class="lightbox-content"></a>
                                                                    </div>
                                                                    <div class="PhotoCMS_Caption"></div>
                                                                </div>
                                                                <p>Jeon Tae Soo sinh năm 1984, được chú ý với những tác phẩm
                                                                    điện ảnh như "Sungkyunkwan scandal", "It's alright,
                                                                    daddy's daughter" của SBS và "All my love" của MBC.</p>
                                                                <p style="text-align: right;"><span
                                                                            style="">Nguồn: Sina</span></p>
                                                                <div id="admzone474524"></div>

                                                            </div>
                                                            <!-- LIVE -->


                                                            <div data-check-position="body_end"></div>

                                                            <div class="knc-rate-link">

                                                                <a href="http://kenh14.vn/lan-truyen-cip-con-gai-thua-nhan-gia-nai-luong-bi-ly-tieu-lo-cam-sung-va-su-that-bat-ngo-dang-sau-20180121182958509.chn"
                                                                   title="Lan truyền clip con gái thừa nhận Giả Nãi Lượng bị Lý Tiểu Lộ &quot;cắm sừng&quot; và sự thật bất ngờ đằng sau"
                                                                   class="krl">
                                                                    Lan truyền clip con gái thừa nhận Giả Nãi Lượng bị Lý
                                                                    Tiểu Lộ "cắm sừng" và sự thật bất ngờ đằng sau
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="post_embed">
                                                            <div id="admzone38016"></div>
                                                        </div>

                                                        {{--tags--}}
                                                        <div class="klw-nomargin">
                                                            <div class="klw-new-socials clearfix">
                                                                <div class="kns-social clearfix">

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
                                                    <h3 class="kds-title">Tin nổi bật kenh 14</h3>
                                                    <div class="knd-wrapper swiper-container-horizontal">
                                                        <ul class="khd-list swiper-wrapper">

                                                            <li class="khdli swiper-slide col-lg-3">
                                                                <a href="http://kenh14.vn/giao-su-quan-dui-noi-ve-he-dieu-hanh-cua-con-nguoi-trong-ky-nguyen-40-20180120022124338.chn"
                                                                   class="kdhli-ava"
                                                                   title="&quot;GS quần đùi&quot; nói về những giới hạn trong tư duy của người trẻ ở thời đại công nghệ làm được mọi thứ">
                                                                    <img src="/assets/news/detail/image/photo1516389576500-1516389576500.jpg"
                                                                         alt="&quot;GS quần đùi&quot; nói về những giới hạn trong tư duy của người trẻ ở thời đại công nghệ làm được mọi thứ">
                                                                </a>
                                                                <h3 class="kdhli-title">
                                                                    <a href="http://kenh14.vn/giao-su-quan-dui-noi-ve-he-dieu-hanh-cua-con-nguoi-trong-ky-nguyen-40-20180120022124338.chn"
                                                                       title="&quot;GS quần đùi&quot; nói về những giới hạn trong tư duy của người trẻ ở thời đại công nghệ làm được mọi thứ">
                                                                        "GS quần đùi" nói về những giới hạn trong tư duy của
                                                                        người trẻ ở thời đại công nghệ làm được mọi thứ
                                                                    </a>
                                                                </h3>
                                                            </li>
                                                            <li class="khdli swiper-slide col-lg-3">
                                                                <a href="http://kenh14.vn/truong-giang-chinh-thuc-noi-loi-xin-loi-sau-man-cau-hon-nha-phuong-gay-tranh-cai-20180122094833416.chn"
                                                                   class="kdhli-ava"
                                                                   title="Trường Giang chính thức nói lời xin lỗi sau màn cầu hôn Nhã Phương gây tranh cãi">
                                                                    <img src="/assets/news/detail/image/photo1516589297610-1516589297611(1).jpg"
                                                                         alt="Trường Giang chính thức nói lời xin lỗi sau màn cầu hôn Nhã Phương gây tranh cãi">
                                                                </a>
                                                                <h3 class="kdhli-title">
                                                                    <a href="http://kenh14.vn/truong-giang-chinh-thuc-noi-loi-xin-loi-sau-man-cau-hon-nha-phuong-gay-tranh-cai-20180122094833416.chn"
                                                                       title="Trường Giang chính thức nói lời xin lỗi sau màn cầu hôn Nhã Phương gây tranh cãi">
                                                                        Trường Giang chính thức nói lời xin lỗi sau màn cầu
                                                                        hôn Nhã Phương gây tranh cãi
                                                                    </a>
                                                                </h3>
                                                            </li>
                                                            <li class="khdli swiper-slide col-lg-3">
                                                                <a href="http://kenh14.vn/soc-em-trai-ha-ji-won-qua-doi-o-tuoi-34-vi-benh-tram-cam-20180121221924009.chn"
                                                                   class="kdhli-ava"
                                                                   title="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm">
                                                                    <img src="/assets/news/detail/image/photo1516547905486-1516547905486.jpg"
                                                                         alt="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm">
                                                                </a>
                                                                <h3 class="kdhli-title">
                                                                    <a href="http://kenh14.vn/soc-em-trai-ha-ji-won-qua-doi-o-tuoi-34-vi-benh-tram-cam-20180121221924009.chn"
                                                                       title="SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh trầm cảm">
                                                                        SỐC: Em trai Ha Ji Won qua đời ở tuổi 34 vì bệnh
                                                                        trầm cảm
                                                                    </a>
                                                                </h3>
                                                            </li>
                                                            <li class="khdli swiper-slide col-lg-3" >
                                                                <a href="http://kenh14.vn/mang-lai-tieng-cuoi-cho-khan-gia-nhung-trong-hanh-trinh-15-nam-tao-quan-cung-khong-it-lan-vuong-phai-nhung-lum-xum-20180110161507369.chn"
                                                                   class="kdhli-ava"
                                                                   title="Mang lại tiếng cười cho khán giả nhưng trong hành trình 15 năm, Táo Quân cũng không ít lần vướng phải những lùm xùm">
                                                                    <img src="/assets/news/detail/image/photo1516263953873-1516263953873(1).jpg"
                                                                         alt="Mang lại tiếng cười cho khán giả nhưng trong hành trình 15 năm, Táo Quân cũng không ít lần vướng phải những lùm xùm">
                                                                </a>
                                                                <h3 class="kdhli-title">
                                                                    <a href="http://kenh14.vn/mang-lai-tieng-cuoi-cho-khan-gia-nhung-trong-hanh-trinh-15-nam-tao-quan-cung-khong-it-lan-vuong-phai-nhung-lum-xum-20180110161507369.chn"
                                                                       title="Mang lại tiếng cười cho khán giả nhưng trong hành trình 15 năm, Táo Quân cũng không ít lần vướng phải những lùm xùm">
                                                                        Mang lại tiếng cười cho khán giả nhưng trong hành
                                                                        trình 15 năm, Táo Quân cũng không ít lần vướng ...
                                                                    </a>
                                                                </h3>
                                                            </li>
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
                                                    <li class="knswli need-get-value-facebook clearfix  done-get-type done-get-sticker done-get-brand-content"
                                                        data-boxtype="NewsPublish">
                                                        <div class="knswli-left fl">
                                                            <a href="http://kenh14.vn/moi-dau-nam-angela-phuong-trinh-va-minh-tu-da-thieu-dot-tham-do-voi-nhung-thiet-ke-dam-xe-cao-tit-tap-20180122102230353.chn"
                                                               class="kscliw-ava" newsid="20180122102230353" newstype="0"
                                                               type="0" rel="newstype"
                                                               title="Mới đầu năm, Angela Phương Trinh và Minh Tú đã thiêu đốt thảm đỏ với những thiết kế đầm xẻ cao tít tắp"
                                                               init-sapo-type="" init-sapo-value="">
                                                                <img src="/assets/news/detail/image/photo1516591296685-1516591296686.jpg"
                                                                     alt="Mới đầu năm, Angela Phương Trinh và Minh Tú đã thiêu đốt thảm đỏ với những thiết kế đầm xẻ cao tít tắp">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">

                                                            <h3 class="knswli-title">
                                                                <a href="http://kenh14.vn/moi-dau-nam-angela-phuong-trinh-va-minh-tu-da-thieu-dot-tham-do-voi-nhung-thiet-ke-dam-xe-cao-tit-tap-20180122102230353.chn"
                                                                   data-id="20180122102230353" newstype="0" type="0"
                                                                   rel="/news-20180122102230353.chn"
                                                                   title="Mới đầu năm, Angela Phương Trinh và Minh Tú đã thiêu đốt thảm đỏ với những thiết kế đầm xẻ cao tít tắp">
                                                                    Mới đầu năm, Angela Phương Trinh và Minh Tú đã thiêu đốt
                                                                    thảm đỏ với những thiết kế đầm xẻ cao tít tắp
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href="http://kenh14.vn/fashion.chn"
                                                                   class="knswli-category">Fashion</a> -
                                                                <span class="knswli-time" title="2018-01-22T11:18:44">19 phút trước</span>
                                                                <span class="item-comment knswli-comment"
                                                                      href="/moi-dau-nam-angela-phuong-trinh-va-minh-tu-da-thieu-dot-tham-do-voi-nhung-thiet-ke-dam-xe-cao-tit-tap-20180122102230353.chn#mingid_comments_content"
                                                                      rel="/news-20180122102230353.chn"
                                                                      style="display:none;"></span>
                                                                <span class="knswli-facebook1 item-fb"
                                                                      rel="/news-20180122102230353.chn"
                                                                      style="display:none;"></span>
                                                            </div>
                                                            <span class="knswli-sapo sapo-need-trim">Minh Tú và Angela Phương Trinh chính là 2 người đẹp mở màn những pha diện đầm xẻ ngút ngàn trong năm 2018 này.</span>
                                                        </div>
                                                    </li>
                                                    <li class="knswli need-get-value-facebook clearfix  done-get-type done-get-sticker done-get-brand-content"
                                                        data-boxtype="NewsPublish">
                                                        <div class="knswli-left fl">
                                                            <a href="http://kenh14.vn/danh-bom-tai-khu-cho-thai-lan-lam-3-nguoi-chet-18-nguoi-bi-thuong-2018012211171465.chn"
                                                               class="kscliw-ava" newsid="2018012211171465" newstype="0"
                                                               type="0" rel="newstype"
                                                               title="Đánh bom tại khu chợ Thái Lan làm 3 người chết, 18 người bị thương"
                                                               init-sapo-type="" init-sapo-value="">
                                                                <img src="/assets/news/detail/image/photo1516594556296-1516594556296.jpg"
                                                                     alt="Đánh bom tại khu chợ Thái Lan làm 3 người chết, 18 người bị thương">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">

                                                            <h3 class="knswli-title">
                                                                <a href="http://kenh14.vn/danh-bom-tai-khu-cho-thai-lan-lam-3-nguoi-chet-18-nguoi-bi-thuong-2018012211171465.chn"
                                                                   data-id="2018012211171465" newstype="0" type="0"
                                                                   rel="/news-2018012211171465.chn"
                                                                   title="Đánh bom tại khu chợ Thái Lan làm 3 người chết, 18 người bị thương">
                                                                    Đánh bom tại khu chợ Thái Lan làm 3 người chết, 18 người
                                                                    bị thương
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href="http://kenh14.vn/the-gioi.chn"
                                                                   class="knswli-category">Thế Giới</a> -
                                                                <span class="knswli-time" title="2018-01-22T11:17:19">20 phút trước</span>
                                                                <span class="item-comment knswli-comment"
                                                                      href="/danh-bom-tai-khu-cho-thai-lan-lam-3-nguoi-chet-18-nguoi-bi-thuong-2018012211171465.chn#mingid_comments_content"
                                                                      rel="/news-2018012211171465.chn"
                                                                      style="display:none;"></span>
                                                                <span class="knswli-facebook1 item-fb"
                                                                      rel="/news-2018012211171465.chn"
                                                                      style="display:none;"></span>
                                                            </div>
                                                            <span class="knswli-sapo sapo-need-trim">Sáng 22/1, xảy ra một vụ đánh bom tại khu chợ ở tỉnh Yala miền nam Thái Lan, khiến 3 người thiệt mạng và 18 người khác ...</span>
                                                        </div>
                                                    </li>
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