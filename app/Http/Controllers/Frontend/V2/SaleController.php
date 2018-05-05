<?php

namespace App\Http\Controllers\Frontend\V2;

use App\Models\Discount;
use App\Models\KmProduct;
use App\Models\Partner;
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

        $partner = Partner::where('name', 'Lazada')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
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

        $partner = Partner::where('name', 'Tiki')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function shopee() {
        $store = 'Shopee';
        $merchant = 'shopee';
        $name = 'Mã giảm giá Shopee tháng '. Carbon::now()->format('m/Y') .' lên đến 500k, Voucher Shopee cực HOT';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Shopee tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/shopee1.jpg';

        $countMost = Discount::where('status', 0)->where('merchant', $merchant)->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->count();

        $mosts = Discount::where('status', 0)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'Shopee')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function grab() {
        $store = 'Grab';
        $merchant = 'grab';
        $name = 'Mã khuyến mãi Grab hôm nay - Cập nhật mã giảm giá Grab bike, Grab car tháng ' . Carbon::now()->format('m/Y');
        $desc = 'Bạn sẽ thỏa sức đi lại với những mã giảm giá, chương trình khuyến mại Grab tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/grab1.jpg';

        $countMost = Discount::where('status', 0)->where('merchant', $merchant)->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->count();

        $mosts = Discount::where('status', 0)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'Grab')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function yes24() {
        $store = 'Yes24';
        $merchant = 'yes24vn';
        $name = 'Mã giảm giá Yes24 tháng '.Carbon::now()->format('m/Y').', Coupon Yes24 mới nhất lên đến 50%';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Yes24 tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/yes241.jpg';

        $countMost = Discount::where('status', 0)->where('merchant', $merchant)->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->count();

        $mosts = Discount::where('status', 0)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'Yes24')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function adayroi() {
        $store = 'Adayroi';
        $merchant = 'adayroi';
        $name = 'Mã giảm giá Adayroi tháng '.Carbon::now()->format('m/Y').', Voucher Adayroi lên đến 50%';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Adayroi tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/adayroi1.jpg';

        $countMost = Discount::where('status', 0)->where('merchant', $merchant)->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->count();

        $mosts = Discount::where('status', 0)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'Adayroi')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function duLich() {
        $store = 'Travel';
        $name = 'Mã giảm giá Du lịch tháng '.Carbon::now()->format('m/Y').', khuyến mãi đặt phòng khách sạn Mytour.vn, VnTrip, Gotadi,...';
        $desc = 'Bạn sẽ thỏa sức chu du, nghỉ dưỡng với những mã giảm giá, chương trình khuyến mại Du lịch tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/mytour1.jpg';

        $countMost = Discount::where('status', 0)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->count();

        $mosts = Discount::where('status', 0)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'MyTour')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function lotte() {
        $store = 'Lotte';
        $merchant = 'lottevn';
        $name = 'Mã giảm giá Lotte tháng '.Carbon::now()->format('m/Y').', Voucher Lotte với  khuyến mãi lên tới 50%';
        $desc = 'Bạn sẽ thỏa sức mua sắm với những mã giảm giá, chương trình khuyến mại Lotte tháng '.Carbon::now()->format('m/Y').' mới nhất';
        $image = '/new/assets/images/lotte1.jpg';

        $countMost = Discount::where('status', 0)->where('merchant', $merchant)->count();
        $countCoupon = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->count();
        $countDeal = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->count();

        $mosts = Discount::where('status', 0)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $coupons = Discount::where('status', 0)->where('is_coupon', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();
        $deals = Discount::where('status', 0)->where('is_coupon', '!=', 1)->where('merchant', $merchant)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(15)->get();

        $partner = Partner::where('name', 'Lotte')->first();

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc', 'countCoupon', 'countDeal', 'countMost', 'mosts', 'coupons', 'deals', 'partner'));
    }

    public function top() {
        $products = KmProduct::where('status', KmProduct::ACTIVE)->orderBy('id', 'desc')->paginate(24);

        return view('frontend.v2.ma_giam_gia.top', compact('products'));
    }

    public function search(Request $request) {
        $s = $request->input('s');

        $s = trim($s);

        if (!empty($s)) {
            $results = Discount::where('name', 'like', '%'.$s.'%')->where('status', 0)->orderBy('count_view', 'desc')->orderBy('start_time', 'desc');
            $count = $results->count();
            $results = $results->paginate(15);
        } else {
            return redirect()->back();
        }

        return view('frontend.v2.search', compact('results', 's', 'count'));
    }
}
