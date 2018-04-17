<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($discounts as $discount)
        <url>
            <loc>{{ !empty($discount->image_local) ? url($discount->image_local) : $discount->image }}</loc>
            <lastmod>{{ $discount->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach

    @foreach($products as $discount)
        <url>
            <loc>{{ !empty($discount->image_local) ? url($discount->image_local) : $discount->image }}</loc>
            <lastmod>{{ $discount->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach
</urlset>