<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{ url('ma-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('vay-von-tin-dung') }}</loc>
        <lastmod>{{ \Carbon\Carbon::create('2018', '01', '01')->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('tin-tuc-tai-chinh') }}</loc>
        <lastmod>{{ $tintuctaichinh->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('mua-sam-hom-nay') }}</loc>
        <lastmod>{{ $muasamhomnay->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-hot') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-online') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/danh-muc-san-pham-co-ma-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/nhan-ma-giam-gia-cap-nhat') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-lazada') }}</loc>
        <lastmod>{{ $lazada->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-tiki') }}</loc>
        <lastmod>{{ $tiki->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-shopee') }}</loc>
        <lastmod>{{ $shopee->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-grab') }}</loc>
        <lastmod>{{ $grab->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-yes24') }}</loc>
        <lastmod>{{ $yes24->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-adayroi') }}</loc>
        <lastmod>{{ $adayroi->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-du-lich') }}</loc>
        <lastmod>{{ $dulich->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-lotte') }}</loc>
        <lastmod>{{ $lotte->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    {{--san pham giam gia--}}

    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-san-pham-dien-tu-cong-nghe') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/do-gia-dung-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-cho-me-va-be') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-lam-dep') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-du-lich-2') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-thoi-trang') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-nha-cua-doi-song') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/dich-vu-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-bach-hoa') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/sach-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/xe-may-giam-gia') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/ma-giam-gia-ngan-hang') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>

    {{--nhan thong tin giam gia--}}

    <url>
        <loc>{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-inbox') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('ma-giam-gia/nhan-ma-giam-gia-qua-email') }}</loc>
        <lastmod>{{ $magiamgia->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.6</priority>
    </url>
</urlset>