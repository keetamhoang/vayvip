<footer id="footer">
    <div class="btmFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5 text-center">
                    <img src="/assets/image/logo.png" alt="Tài chính SMART - Tài chính thông minh trong tầm tay của bạn">
                </div>
            </div>
            <div class="col-sm-12 text-center m-t-20" itemscope itemtype="http://schema.org/Person">
                <p itemprop="name"> <strong>
                        Copyright {{ \Carbon\Carbon::now()->year }}
                        @if (session()->get('web') == 'vi')
                    </strong> TaichinhSMART.vn - Tiết kiệm tiền của bạn với Tài chính thông minh <i class="ti-heart"></i>
                        @else
                    </strong> NowVoucher.com <i class="ti-heart"></i>
                        @endif
                </p>
            </div>
        </div>
    </div>
</footer>