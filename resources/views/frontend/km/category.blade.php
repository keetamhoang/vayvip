@extends('frontend.km.index')

@section('content_km')

    <section id="featured-post-3" class="widget featured-content featuredpost">
        <div class="widget-wrap"><h4 class="widget-title widgettitle"><i class="fa fa-forward"></i> {{ $title }} <i class="fa fa-backward"></i></h4>

            @foreach($newests as $newest)
                <article
                        class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry">
                    <div class="post-list alignleft">
                        <a href="{{ $newest->aff_link }}" target="_blank" class="alignleft" aria-hidden="true"
                           style="background: url('{{ $newest->image }}') no-repeat center;">
                        </a>
                    </div>
                    <header class="entry-header">
                        <h2 class="entry-title" itemprop="headline">
                            <a target="_blank" href="{{  $newest->aff_link }}">{{ $newest->name }}</a>
                        </h2>
                        <a target="_blank" href="{{  $newest->aff_link }}"><p style="word-wrap: break-word;"><span><i
                                            class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
                    </header>
                </article>
            @endforeach

            <div class="archive-pagination pagination">
                {{ $newests->links('frontend.paginate') }}
            </div>

        </div>
    </section>
@endsection