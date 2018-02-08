@extends('frontend.km.index')

@section('content_km')

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><h4 class="widget-title widgettitle"> {{ $title }} </h4>
            <div class="col-lg-12 top-sp" style="padding: 0px">
            @foreach($newests as $top)
                <article class="col-lg-4 post-5793 post type-post status-publish format-standard has-post-thumbnail
                    category-lazada category-ma-giam-gia tag-khac entry" style="padding-left: 0px; padding-bottom: 10px;">
                    <div class="top-sp-img">
                        <a href="{{ $top->aff_link }}" target="_blank" style="background: url('{{ $top->image }}') no-repeat center;"></a>
                    </div>
                    <a class="top-sp-title" href="{{ $top->aff_link }}" target="_blank">{{ $top->name }}</a>
                    <div class="top-sp-info">
                        @if ($top->discount != 0)
                            <p class="top-sp-discount">{{ number_format($top->discount, 0, '.', '.') }} ₫</p>
                        @else
                            <p class="top-sp-discount">{{ number_format($top->price, 0, '.', '.') }} ₫</p>
                        @endif
                        <div class="top-sp-bot">
                            <span class="top-sp-price">{{ number_format($top->price, 0, ',', '.') }}₫</span>
                            @if ($top->discount != 0)
                                <span class="top-sp-percent">Giảm -{{ round(($top->price - $top->discount) / $top->price * 100) }}%</span>
                            @else
                                <span class="top-sp-percent">Giảm -0%</span>
                            @endif
                        </div>
                    </div>
                    <a href="{{ $top->aff_link }}" target="_blank" class="top-sp-view">Xem sản phẩm</a>
                </article>
            @endforeach
            </div>

            <div class="archive-pagination pagination">
                {{ $newests->links('frontend.paginate') }}
            </div>

        </div>
    </section>
@endsection