<?php

namespace App\Http\Controllers\Frontend\V2;

use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index() {
        return view('frontend.v2.ma_giam_gia.index');
    }

    public function hot() {
        return view('frontend.v2.ma_giam_gia.hot');
    }

    public function lazada() {
        $store = 'Lazada';
        $name = 'Mã Giảm Giá Lazada tháng '.Carbon::now()->format('m/Y') .' mới nhất, khuyến mãi Lazada cập nhật liên tục mỗi ngày';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Lazada tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/lazada1.png';

        $countMost = Discount::where('status', 0)->where('merchant', 'lazada')->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', 'lazada')->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', 'lazada')->count();

        $mosts = Discount::where('status', 0)->where('merchant', 'lazada')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', 'lazada')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', 'lazada')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals'));
    }

    public function tiki() {
        $store = 'Tiki';
        $name = 'Mã giảm giá Tiki tháng '.Carbon::now()->format('m/Y').', Voucher Tiki khuyến mãi mới nhất, ưu đãi Tiki SIÊU KHỦNG';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Tiki tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/tiki1.png';

        $countMost = Discount::where('status', 0)->where('merchant', 'tikivn')->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', 'tikivn')->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', 'tikivn')->count();

        $mosts = Discount::where('status', 0)->where('merchant', 'tikivn')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', 'tikivn')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', 'tikivn')->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals'));
    }
}
