<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Discount;
use App\Models\Post;
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

    public function detail($slug, $id) {
        $discount = Discount::find($id);

        if (empty($discount)) {
            return redirect()->back();
        }

        $discount->update(['count_view' => $discount->count_view + 1]);

        return view('frontend.km.detail', compact('discount'));
    }

    public function category($slug, $id) {
        $title = 'KHUYẾN MẠI TỪ ' .$slug;

        $newests = Discount::where('merchant_id', $id)->where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->paginate(20);

        return view('frontend.km.category', compact('newests', 'title'));
    }

    public function search(Request $request) {
        $s = $request->input('s');

        $title = 'Kết quả tìm kiếm: ' . $s;

        $s = trim($s);

        if (!empty($s)) {
            $newests = Discount::where('name', 'like', '%'.$s.'%')->orderBy('start_time', 'desc')->paginate(20);
        } else {
            return redirect()->back();
        }

        return view('frontend.km.category', compact('newests', 'title', 's'));
    }

    public function review(Request $request) {
        $page = $request->input('page', 0);

        $title = 'REVIEW & ĐÁNH GIÁ';

        $newests = Post::where('is_review', 1)->where('status', 1)->orderBy('updated_at', 'desc')->paginate(20);

        return view('frontend.km.review', compact('newests', 'page', 'title'));
    }
}
