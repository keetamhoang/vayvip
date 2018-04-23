<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Code;
use App\Models\Discount;
use App\Models\KmProduct;
use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function sitemap() {
        return response()->view('frontend.sitemap.index', [])->header('Content-Type', 'text/xml');
    }

    public function trangchinh() {
        $magiamgia = Discount::where('status', 0)->orderBy('created_at', 'desc')->first();
        $tintuctaichinh = Post::where('category_id', 1)->orderBy('updated_at', 'desc')->first();
        $muasamhomnay = Post::where('category_id', 2)->orderBy('updated_at', 'desc')->first();
        $lazada = Code::where('name', 'lazada')->orderBy('id', 'desc')->first();
        $tiki = Code::where('name', 'tiki')->orderBy('id', 'desc')->first();
        $shopee = Code::where('name', 'shopee')->orderBy('id', 'desc')->first();
        $grab = Code::where('name', 'grab')->orderBy('id', 'desc')->first();
        $yes24 = Code::where('name', 'yes24')->orderBy('id', 'desc')->first();
        $adayroi = Code::where('name', 'adayroi')->orderBy('id', 'desc')->first();
        $lotte = Code::where('name', 'lotte')->orderBy('id', 'desc')->first();
        $dulich = Code::where('name', 'dulich')->orderBy('id', 'desc')->first();

        return response()->view('frontend.sitemap.trangchinh', compact('magiamgia', 'tintuctaichinh', 'muasamhomnay', 'lazada', 'tiki', 'shopee', 'grab',
            'yes24', 'adayroi', 'lotte', 'dulich'))
            ->header('Content-Type', 'text/xml');
    }

    public function tintuctaichinh() {
        $tintuctaichinhs = Post::where('category_id', 1)->orderBy('updated_at', 'desc')->get();

        return response()->view('frontend.sitemap.tintuctaichinh', compact('tintuctaichinhs'))
            ->header('Content-Type', 'text/xml');
    }

    public function muasamhomnay() {
        $muasamhomnays = Post::where('category_id', 2)->orderBy('updated_at', 'desc')->get();

        return response()->view('frontend.sitemap.muasamhomnay', compact('muasamhomnays'))
            ->header('Content-Type', 'text/xml');
    }

    public function anh() {
        $discounts = Discount::orderBy('created_at', 'desc')->get();
        $products = KmProduct::orderBy('created_at', 'desc')->get();

        return response()->view('frontend.sitemap.anh', [
            'discounts' => $discounts,
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }

    public function sanpham() {
        $discounts = Discount::orderBy('created_at', 'desc')->get();

        return response()->view('frontend.sitemap.sanpham', compact('discounts'))
            ->header('Content-Type', 'text/xml');
    }

    public function landingpage() {
        return response()->view('frontend.sitemap.landingpage')
            ->header('Content-Type', 'text/xml');
    }
}
