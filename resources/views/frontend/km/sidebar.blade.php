<aside class="sidebar sidebar-primary widget-area" role="complementary" aria-label="Primary Sidebar"
       itemscope="" itemtype="https://schema.org/WPSideBar">
    <section id="search-2" class="widget widget_search">
        <div class="widget-wrap">
            <form class="search-form" itemprop="potentialAction" itemscope=""
                  itemtype="" method="get"
                  action="#"
                  role="search">
                <meta itemprop="target" content="#">
                <input itemprop="query-input" name="s" placeholder="Điền từ khóa để tìm kiếm..."
                       type="search"><input value="Search" type="submit"></form>
        </div>
    </section>

    <section id="rpwe_widget-3" class="widget rpwe_widget recent-posts-extended">
        <div class="widget-wrap"><h4 class="widget-title widgettitle">KHUYẾN MÃI</h4>
            <div class="rpwe-block">
                <ul class="rpwe-ul">
                    @php $randomKms = \App\Models\Discount::where('status', 0)->where('is_coupon', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->inRandomOrder()->limit(10)->get() @endphp

                    @foreach($randomKms as $randomKm)
                        <li class="rpwe-li rpwe-clearfix">
                            <a class="rpwe-img" target="_blank" href="{{ $randomKm->aff_link }}" rel="bookmark">
                                <img
                                        class="rpwe-alignleft rpwe-thumb"
                                        src="{{ $randomKm->image }}"
                                        alt="{{ $randomKm->name }}">
                            </a>
                            <h3 class="rpwe-title"><a href="{{ $randomKm->aff_link }}"
                                                      title="{{ $randomKm->name }}"
                                                      rel="bookmark">{{ $randomKm->name }}</a></h3></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <section id="rpwe_widget-5" class="widget rpwe_widget recent-posts-extended">
        <div class="widget-wrap"><h4 class="widget-title widgettitle">Mã giảm giá</h4>
            <div class="rpwe-block">
                <ul class="rpwe-ul">
                    @php $randomCodes = \App\Models\Discount::where('status', 0)->where('is_coupon', 1)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')->inRandomOrder()->limit(10)->get() @endphp

                    @foreach($randomCodes as $randomCode)
                        <li class="rpwe-li rpwe-clearfix">
                            <div class="post-side rpwe-thumb">
                                <a class="rpwe-img" target="_blank" href="{{ $randomCode->aff_link }}" rel="bookmark" style="background: url('{{ $randomCode->image }}') no-repeat center;">
                                </a>
                            </div>
                            <h3 class="rpwe-title">
                                <a href="{{ $randomCode->aff_link }}"
                                   title="{{ $randomCode->name }}"
                                   rel="bookmark">{{ $randomCode->name }}</a></h3></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
</aside>