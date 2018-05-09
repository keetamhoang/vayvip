<?php

namespace App\Http\Controllers\Frontend\V2;

use App\Models\Coupon;
use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        if (session()->get('web') == 'vi') {
            $mosts = Discount::VN()->where('status', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(4)->get();
            $coupons = Discount::VN()->where('status', 0)->where('is_coupon', 1)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(4)->get();
            $deals = Discount::VN()->where('status', 0)->where('is_coupon', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(4)->get();
            $exps = Discount::VN()->where('status', 0)->where('end_time', '>=', Carbon::now()->toDateString())->orderBy('is_hot', 'desc')->orderBy('end_time', 'asc')->orderBy('count_view', 'desc')->limit(4)->get();
        } else {
            $mosts = Discount::EN()->where('status', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(8)->get();
            $coupons = Discount::EN()->where('status', 0)->where('is_coupon', 1)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(8)->get();
            $deals = Discount::EN()->where('status', 0)->where('is_coupon', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(8)->get();
            $exps = Discount::EN()->where('status', 0)->where('end_time', '>=', Carbon::now()->toDateString())->orderBy('is_hot', 'desc')->orderBy('end_time', 'asc')->orderBy('count_view', 'desc')->limit(8)->get();
        }

        if (session()->get('web') == 'vi') {
            return view('frontend.v2.index', compact('mosts', 'coupons', 'deals', 'exps'));
        } else if (session()->get('web') == 'en') {
            return view('frontend.v2.en.index', compact('mosts', 'coupons', 'deals', 'exps'));
        }
    }

    public function getDetail(Request $request) {
        $id = $request->input('id');

        $discount = Discount::find($id);

        if (empty($discount)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại'
            ]);
        }

        if ($discount->is_coupon == 1) {
            $coupon = Coupon::where('discount_id', $id)->first();
        }

        return response([
            'status' => 1,
            'coupon' => !empty($coupon) ? $coupon : null,
            'discount' => $discount
        ]);
    }
}
