<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KmController extends Controller
{
    public function index() {
        return view('frontend.km.all');
    }

    public function newest(Request $request) {
        $page = $request->input('page', 0);

        $title = 'KHUYẾN MẠI MỚI NHẤT';

        $newests = Discount::where('status', 0)->where('is_coupon', 0)
            ->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->paginate(20);

        return view('frontend.km.category', compact('newests', 'page', 'title'));
    }

    public function coupon(Request $request) {
        $page = $request->input('page', 0);

        $title = 'MÃ GIẢM GIÁ';

        $newests = Discount::where('is_coupon', 1)->where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->paginate(20);

        return view('frontend.km.category', compact('newests', 'page', 'title'));
    }
}
