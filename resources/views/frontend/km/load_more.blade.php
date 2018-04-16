@if (count($newests) > 0)
    @foreach($newests as $newest)
<article
        class="post-17389 post type-post status-publish format-standard has-post-thumbnail category-khuyen-mai entry km-post">
    <div class="post-list alignleft">
        <a href="{{ url('khuyen-mai/'.$newest->slug) }}" class="alignleft" aria-hidden="true"
           style="background: url('{{ $newest->image }}') no-repeat center;">
        </a>
    </div>
    <header class="entry-header">
        <p class="entry-title" itemprop="headline">
            <a href="{{  url('khuyen-mai/'.$newest->slug) }}">{{ $newest->name }}</a>
        </p>
        <a href="{{  url('khuyen-mai/'.$newest->slug) }}"><p style="word-wrap: break-word;"><span><i
                            class="fa fa-forward"></i> {{ $newest->content }}</span></p></a>
    </header>
</article>
        @endforeach
    @endif