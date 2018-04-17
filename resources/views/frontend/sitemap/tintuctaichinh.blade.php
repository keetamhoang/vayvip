<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($tintuctaichinhs as $discount)
        <url>
            <loc>{{ url('tin-tuc/'.$discount->slug) }}</loc>
            <lastmod>{{ $discount->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach

</urlset>