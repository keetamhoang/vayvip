<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('san-pham/san-pham-toi-den-1-nhanh-blaga') }}</loc>
        <lastmod>{{ \Carbon\Carbon::create('2018', '4', '22', '12','12','12')->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
</urlset>