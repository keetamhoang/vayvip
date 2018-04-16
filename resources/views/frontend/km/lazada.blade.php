@extends('frontend.km.index')

@section('title')
    <title>Mã giảm giá Lazada, Voucher Lazada khuyến mãi HOT tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</title>
@endsection

@section('meta')
    <meta property="og:url" content="http://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-lazada">
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="Mã giảm giá Lazada, Voucher Lazada khuyến mãi HOT tháng {{ \Carbon\Carbon::now()->format('m/Y') }}"/>
    <meta property="og:description"
          content="Tổng hợp các mã giảm giá Lazada, voucher Lazada khuyến mãi mới nhất trong tháng. Các mã giảm giá Lazada app và web được chúng tôi cập nhật liên tục hàng ngày, hàng giờ. Hiện đang có các voucher Lazada 50K, 100K, mã Lazada 10%, 20% số lượng có hạn. Nhanh tay truy cập ngay để lấy mã sử dụng kẻo hết ..."/>
    <meta property="og:image" content="http://taichinhsmart.vn/assets/image/khuyenmai.png"/>

    <meta name="description"
          content="Tổng hợp các mã giảm giá Lazada, voucher Lazada khuyến mãi mới nhất trong tháng. Các mã giảm giá Lazada app và web được chúng tôi cập nhật liên tục hàng ngày, hàng giờ. Hiện đang có các voucher Lazada 50K, 100K, mã Lazada 10%, 20% số lượng có hạn. Nhanh tay truy cập ngay để lấy mã sử dụng kẻo hết ..."/>
    <meta name="keywords" content=""/>
@endsection

@section('content_km')

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap">
            <h1 class="entry-title" itemprop="headline">Mã Giảm Giá Lazada Khuyến Mãi Lazada Mới Nhất Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h1>

            <div class="entry-content lazada" itemprop="text"><p>Hiện tại, Lazada là địa chỉ mua hàng trực tuyến lớn nhất Việt
                    Nam. Bạn gần như sẽ tìm được mọi thứ cần mua ở đây. Những <strong>mã giảm giá Lazada, Voucher
                        Lazada</strong> Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} và các chương trình <strong>Lazada khuyến mãi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</strong>
                    được cập nhật liên tục ở nội dung bài này.</p>

                <h2 class="title-phu">Mã giảm giá Lazada, Lazada khuyến mãi Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</h2>

                {!! $lazada->desc_up !!}

                <div class="couponh2"><span class="h2white">MÃ VOUCHER LAZADA TỐT NHẤT</span></div>

                @foreach($coupons as $coupon)
                    <div class="coupondiv">
                        <div class="promotiontype">
                            <div class="promotag">
                                <div class="promotagcont {{ $coupon->type == 2 ? 'tagsale' : '' }}">
                                    <div class="saveamount"> {{ $coupon->percent }}</div>
                                    <div class="saleorcoupon"> {{ $coupon->type_km }}</div>
                                    <div class=""><a target="_blank" href="{{ url('admin/codes/' . $coupon->id) }}">Sửa</a></div>
                                </div>
                            </div>
                            <div class="promotiondetails">
                                <div class="coupontitle"> {{ $coupon->title }}</div>
                                <div class="cpinfo"><strong>{{ !empty($coupon->hsd) ? $coupon->hsd : 'Không giới hạn' }} </strong><br>
                                    {!! $coupon->desc !!}
                                </div>
                            </div>
                            <div class="cpbutton">
                                <div class="copyma"
                                     onclick="var person = prompt('Copy mã bên dưới để sử dụng tại bước thanh toán:', '{{ $coupon->code }}');window.open('http://bit.ly/2IVGKP4','_blank')">
                                    <div class="coupon-code">{{ $coupon->code }}</div>
                                    <div>COPY MÃ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--<div class="couponh2"><span class="h2white">MÃ GIẢM GIÁ LAZADA NGÀNH MỸ PHẨM</span></div>--}}
                {{--<div class="coupondiv">--}}
                    {{--<div class="promotiontype">--}}
                        {{--<div class="promotag">--}}
                            {{--<div class="promotagcont">--}}
                                {{--<div class="saveamount"> 10%</div>--}}
                                {{--<div class="saleorcoupon"> COUPON</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="promotiondetails">--}}
                            {{--<div class="coupontitle"> Mã giảm giá 10% cho đơn hàng mỹ phẩm ZA</div>--}}
                            {{--<div class="cpinfo"><strong>Hạn dùng: </strong>30/4/2018<br> Áp dụng với đơn hàng từ--}}
                                {{--350.000đ--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="cpbutton">--}}
                            {{--<div class="copyma"--}}
                                 {{--onclick="window.open('http://ho.lazada.vn/SHOegW?sku=&amp;redirect=http%3A%2F%2Fho.lazada.vn%2FSH79ra%3Furl%3Dhttps%253A%252F%252Fwww.lazada.vn%252Fshop%252Fza-official-store%253foffer_id%253D%257Boffer_id%257D%2526affiliate_id%253D%257Baffiliate_id%257D%2526offer_name%253D%257Boffer_name%257D_%257Boffer_file_id%257D%2526affiliate_name%253D%257Baffiliate_name%257D%2526transaction_id%253D%257Btransaction_id%257D%26aff_sub%3Dza','_blank')">--}}
                                {{--<div class="coupon-code">ZA10T4</div>--}}
                                {{--<div>COPY MÃ</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="coupondiv">--}}
                    {{--<div class="promotiontype">--}}
                        {{--<div class="promotag">--}}
                            {{--<div class="promotagcont tagsale">--}}
                                {{--<div class="saveamount"> 15%</div>--}}
                                {{--<div class="saleorcoupon"> SALE</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="promotiondetails">--}}
                            {{--<div class="coupontitle"> Lazada khuyến mãi Flash Sale giảm giá tốt nhất mỗi ngày</div>--}}
                            {{--<div class="cpinfo"><strong>Hạn dùng: </strong>31/3/2018.<br> Danh mục các sản phẩm giảm giá--}}
                                {{--nhiều nhất hàng ngày ở Lazada, mở bán sản phẩm mới mỗi 2 tiếng.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="cpbutton">--}}
                            {{--<div class="xemngayz" onclick="window.open('http://bit.ly/2yvnoL8','_blank')">XEM NGAY</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {!! $lazada->desc_bot !!}


                <h2>Gian hàng uy tín tại Lazada</h2>
                <p>Hiện tại, Lazada đã có hơn 3.000 Shop/người bán hàng. Vì vậy, việc chọn được người bán hàng uy tín
                    trên Lazada là rất quan trọng nếu bạn đang có những lo lắng về chất lượng sản phẩm. Bạn nên xem thêm
                    bài <a href="{{ url('') }}" rel="noopener" target="_blank">kinh nghiệm
                        mua hàng ở Lazada</a> để biết cách chọn mua hàng giá rẻ, chất lượng.</p>
                <p>Trong danh mục những người bán hàng uy tín trên Lazada thì các đơn hàng được bán và vận chuyển bởi
                    Lazada hiện là những đơn hàng 100% bạn có thể yên tâm về chất lượng. Bạn sẽ không phải có bất kỳ lo
                    lắng nào nếu chọn mua các sản phẩm bán bởi Lazada.</p>
                <p>Hãy ưu tiên xem danh mục các sản phẩm bán và vận chuyển bởi Lazada trước khi chọn mua hàng từ những
                    người bán khác nhé.</p>
                <figure id="attachment_11743" style="width: 750px" class="wp-caption aligncenter"><img
                                src="/assets/image/mua-hang-lazada.jpg"
                                alt="Hàng được bán bởi Lazada thì bạn có thể yên tâm về chất lượng" width="750"
                                height="255" class="size-full wp-image-11743">
                    <figcaption class="wp-caption-text">Hàng được bán bởi Lazada thì bạn có thể yên tâm về chất lượng
                    </figcaption>
                </figure>

                <h2>Hướng dẫn mua hàng ở Lazada</h2>
                <p>Các bước mua hàng ở Lazada khá là đơn giản. Nếu bạn chưa từng mua hàng trên Lazada thì có thể đặt mua
                    hàng thử rồi sau đó huỷ đơn hàng đi cũng được. Các đơn hàng ở Lazada đều cho phép hình thức thanh
                    toán khi nhận hàng (COD) nên bạn không cần có tài khoản ngân hàng, không cần có thẻ ATM/Thẻ tín dụng
                    thì vẫn mua hàng được bình thường nhé.</p>
                <p>Để có thể thoải mái đặt thử cũng như huỷ đơn hàng, theo dõi đơn hàng khi cần thì bạn nên đăng ký tạo
                    tài khoản ở Lazada. Dĩ nhiên Lazada cũng có hình thức đặt mua hàng mà không cần đăng ký tài
                    khoản.</p>
                <p>Việc sử dụng Voucher, mã giảm giá (nếu có) thì sẽ là sử dụng ở bước cuối cùng trong quá trình mua
                    hàng. Ở bước thanh toán đơn hàng, bạn lưu ý là sẽ có mục để nhập mã giảm giá Lazada nhé. Bạn tìm đến
                    mục đó và điềm Code giảm giá Lazada ở trên vào để được giảm tiền.</p>
                <h2>Mua hàng trên lazada</h2>
                <p>Theo một báo cáo nội bộ gần đây của Lazada thì thị phần của Lazada đang chiếm khoảng 36% thị trường
                    mua sắm trực tuyến ở Việt Nam. Con số này dù rất khó xác minh nhưng cũng cho thấy sự thật là mọi
                    người vẫn đang mua hàng trên Lazada rất nhiều.</p>
                <p>Dù đúng là Lazada cũng bị nhiều vụ không kiểm soát được chất lượng hàng của nhà cung cấp, dẫn đến
                    tình trạng khách hàng nói Lazada lừa đảo khách hàng.
                    Nhưng rõ ràng là nhiều mặt hàng trên Lazada đang được bán với giá quá rẻ. Nhiều khi rẻ đến mức bạn
                    sẽ “không thể cưỡng lại được”.</p>
                <figure id="attachment_11873" style="width: 614px" class="wp-caption aligncenter"><img
                                src="/assets/image/hang-giam-gia-lazada.jpg"
                                alt="Một chiếc máy nghe nhạc chỉ 37.000đ" width="614" height="358"
                                class="size-full wp-image-11873">
                    <figcaption class="wp-caption-text">Một chiếc máy nghe nhạc chỉ 37.000đ</figcaption>
                </figure>
                <p>Cách đây không lâu còn có bạn hỏi mình về một sản phẩm máy nghe nhạc MP3 có giá chỉ 37.000đ. Đúng là
                    mức giá không thể tin nổi với một sản phẩm công nghệ mà cách đây 4-5 năm phải có giá ít nhất vài
                    trăm nghìn. Hy vọng là những mã giảm giá Lazada ở đây giúp bạn tiết kiệm được nhiều hơn khi mua hàng
                    trực tuyến ở Lazada.vn.</p>

                <h2>Hướng dẫn cách nhập Mã giảm giá Lazada</h2>

                <p>Tháng {{ \Carbon\Carbon::now()->format('m/Y') }} Lazada có một số thay đổi về giao diện. Chính vì vậy mà nhiều bạn băn khoăn không biết
                    làm sao để nhập mã giảm giá Lazada. Có những bạn nhập xong không thấy giá giảm thì lại cứ nghĩ là mã
                    giảm giá không dùng được. Dưới đây mình hướng dẫn bạn các nhập mã Voucher Lazada khi mua hàng.</p>
                <p><strong>Bước 1:</strong> Nhập mã giảm giá khi tiến hành đặt hàng. Trước đây khi bạn nhập mã ở bước
                    này thì sẽ thấy giá sản phẩm giảm luôn. Tuy nhiên, theo giao diện mới thì bước này bạn nhập xong có
                    thể giá chưa giảm ngay nhưng bạn sẽ nhận được thông báo.</p>
                <p>Như trường hợp dưới đây mình sử dụng mã giảm giá khi thanh toán bằng thẻ MasterCard. Ở bước này chỉ
                    nhận được thông báo là sẽ được giảm giá cho hình thức thanh toán phù hợp (Thanh toán thẻ)</p>
                <figure id="attachment_17889" style="width: 750px" class="wp-caption aligncenter"><img
                            src="/assets/image/huong-dan-nhap-ma-giam-gia-lazada.png"
                            alt="Hướng dẫn nhập mã giảm giá Lazada khi mua hàng" width="750" height="410"
                            class="size-full wp-image-17889">
                    <figcaption class="wp-caption-text">Hướng dẫn nhập mã giảm giá Lazada khi mua hàng</figcaption>
                </figure>
                <p><strong>Bước 2:</strong> Thanh toán đơn hàng. Ở bước này, bạn chọn hình thức thanh toán phù hợp. Ví
                    dụ với đơn của mình phải thanh toán bằng thẻ MasterCard thì mới được giảm giá. Mình đã tiến hành
                    nhập thông tin số thẻ chính xác vào thì mới thấy giá được giảm như dưới đây.</p>
                <figure id="attachment_17891" style="width: 750px" class="wp-caption aligncenter"><img
                            src="/assets/image/huong-dan-thanh-toan-the-Lazada.jpg"
                            alt="Hướng dẫn thanh toán đơn hàng ở Lazada" width="750" height="333"
                            class="size-full wp-image-17891">
                    <figcaption class="wp-caption-text">Hướng dẫn thanh toán đơn hàng ở Lazada</figcaption>
                </figure>
                <p>Sau hai bước này thì bạn sẽ nhìn thấy phần giảm giá hiển thị. Như đơn hàng trên đây có mức giảm giá
                    là 10% giá trị đơn hàng. Lưu ý là nhiều mã giảm giá yêu cầu bạn phải <strong>Đăng nhập tài khoản
                        Lazada</strong> thì mới nhập được mã nhé. Nếu không đăng nhập thì sẽ không dùng được, mặc dù mã
                    vẫn có hiệu lực.</p>

            </div>
        </div>
    </section>

@endsection