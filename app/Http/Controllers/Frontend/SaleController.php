<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Code;
use App\Models\Coupon;
use App\Models\Discount;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index() {
        return view('frontend.km.all');
    }

    public function loadMore(Request $request) {
        $count = $request->input('count', 0);

        $newests = Discount::where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->offset($count)->limit(20)->get();

        return view('frontend.km.load_more', compact('newests'))->render();
    }

    public function loadMoreCoupon(Request $request) {
        $count = $request->input('count', 0);
        $name = $request->input('name');

        $coupons = Code::where('name', $name)->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->offset($count)->limit(20)->get();

        return view('frontend.km.load_more_coupon', compact('coupons'))->render();
    }

    public function hot() {
        $title = 'TỔNG HỢP TẤT CẢ MÃ GIẢM GIÁ THÁNG '.Carbon::now()->format('m/Y');

        $newests = Discount::where('status', 0)->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->limit(20)->get();

        return view('frontend.km.hot', compact('newests', 'page', 'title'));
    }

    public function online(Request $request) {
        $page = $request->input('page', 0);

        $title = 'KHUYẾN MÃI - GIẢM GIÁ MỚI NHẤT';

        $newests = Discount::where('status', 0)->where('is_coupon', 0)
            ->where('end_time', '>=', \Carbon\Carbon::now()->toDateString() . ' 00:00:00')
            ->orderBy('start_time', 'desc')->paginate(20);

        return view('frontend.km.online', compact('newests', 'page', 'title'));
    }

    public function lazada() {
        $lazada = Partner::where('name', 'Lazada')->first();

        $coupons = Code::where('name', 'lazada')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'lazada')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.lazada', compact('lazada', 'coupons', 'discounts'));
    }

    public function tiki() {
        $lazada = Partner::where('name', 'Tiki')->first();

        $coupons = Code::where('name', 'tiki')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'tikivn')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.tiki', compact('lazada', 'coupons', 'discounts'));
    }

    public function shopee() {
        $lazada = Partner::where('name', 'Shopee')->first();

        $coupons = Code::where('name', 'shopee')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'shopee')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.shopee', compact('lazada', 'coupons', 'discounts'));
    }

    public function grab() {
        $lazada = Partner::where('name', 'Grab')->first();

        $coupons = Code::where('name', 'grab')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.grab', compact('lazada', 'coupons'));
    }

    public function yes24() {
        $lazada = Partner::where('name', 'Yes24')->first();

        $coupons = Code::where('name', 'yes24')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'yes24vn')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.yes24', compact('lazada', 'coupons', 'discounts'));
    }

    public function adayroi() {
        $lazada = Partner::where('name', 'Adayroi')->first();

        $coupons = Code::where('name', 'adayroi')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'adayroi')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.adayroi', compact('lazada', 'coupons', 'discounts'));
    }

    public function duLich() {
        $lazada = Partner::where('name', 'MyTour')->first();

        $coupons = Code::whereIn('name', ['dulich', 'mytour'])->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::whereIn('merchant', ['mytourvn', 'vntrip', 'vietravel', 'bookin', 'gotadi', 'fiditour', 'ivivu', 'bestprice'])->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.du_lich', compact('lazada', 'coupons', 'discounts'));
    }

    public function lotte() {
        $lazada = Partner::where('name', 'Lotte')->first();

        $coupons = Code::where('name', 'lotte')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        $discounts = Discount::where('merchant', 'lottevn')->where('status', 0)->where('is_coupon', 0)->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.km.lotte', compact('lazada', 'coupons', 'discounts'));
    }



    public function danhMuc() {
        return view('frontend.km.danh_muc');
    }

    public function congNghe() {
        $lazada = Partner::where('name', 'congnghe')->first();

        $coupons = Code::where('name', 'congnghe')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.cong_nghe', compact('lazada', 'coupons'));
    }

    public function giaDung() {
        $lazada = Partner::where('name', 'giadung')->first();

        $coupons = Code::where('name', 'giadung')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.gia_dung', compact('lazada', 'coupons'));
    }

    public function meBe() {
        $lazada = Partner::where('name', 'mebe')->first();

        $coupons = Code::where('name', 'mebe')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.me_be', compact('lazada', 'coupons'));
    }

    public function lamDep() {
        $lazada = Partner::where('name', 'lamdep')->first();

        $coupons = Code::where('name', 'lamdep')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.lam_dep', compact('lazada', 'coupons'));
    }

    public function duLich2() {
        $lazada = Partner::where('name', 'dulich2')->first();

        $coupons = Code::where('name', 'dulich2')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.du_lich_2', compact('lazada', 'coupons'));
    }

    public function thoiTrang() {
        $lazada = Partner::where('name', 'thoitrang')->first();

        $coupons = Code::where('name', 'thoitrang')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.thoi_trang', compact('lazada', 'coupons'));
    }

    public function doiSong() {
        $lazada = Partner::where('name', 'doisong')->first();

        $coupons = Code::where('name', 'doisong')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.doi_song', compact('lazada', 'coupons'));
    }

    public function dichVuGiamGia() {
        $lazada = Partner::where('name', 'dichvugiamgia')->first();

        $coupons = Code::where('name', 'dichvugiamgia')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.dich_vu_giam_gia', compact('lazada', 'coupons'));
    }

    public function bachHoa() {
        $lazada = Partner::where('name', 'bachhoa')->first();

        $coupons = Code::where('name', 'bachhoa')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.bach_hoa', compact('lazada', 'coupons'));
    }

    public function Sach() {
        $lazada = Partner::where('name', 'sach')->first();

        $coupons = Code::where('name', 'sach')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.sach', compact('lazada', 'coupons'));
    }

    public function Xe() {
        $lazada = Partner::where('name', 'xe')->first();

        $coupons = Code::where('name', 'xe')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.xe', compact('lazada', 'coupons'));
    }

    public function nganHang() {
        $lazada = Partner::where('name', 'nganhang')->first();

        $coupons = Code::where('name', 'nganhang')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(20)->get();

        return view('frontend.km.ngan_hang', compact('lazada', 'coupons'));
    }

    public function saveCoupon(Request $request) {
        $id = $request->input('id');
        $title = $request->input('title');
        $desc = $request->input('desc');
        $coupon = $request->input('code');
        $exp = $request->input('exp');

        $id = explode('-', $id);
        $id = $id[1];

        $code = Code::find($id);

        if (empty($code)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại coupon này'
            ]);
        }

        $code->update([
            'code' => $coupon,
            'title' => $title,
            'desc' => $desc,
            'hsd' => $exp
        ]);

        return response([
            'status' => 1,
            'message' => 'Cập nhật Coupon thành công'
        ]);
    }

    public function hideCoupon(Request $request) {
        $id = $request->input('id');

        $id = explode('-', $id);
        $id = $id[1];

        $code = Code::find($id);

        if (empty($code)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại coupon này'
            ]);
        }

        $code->update([
            'status' => 1, // hide
        ]);

        return response([
            'status' => 1,
            'message' => 'Ẩn Coupon thành công'
        ]);
    }

    public function removeIndex(Request $request) {
        $id = $request->input('id');

        $id = explode('-', $id);
        $id = $id[1];

        $code = Code::find($id);

        if (empty($code)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại coupon này'
            ]);
        }

        $code->update([
            'priority' => 0, // hide
        ]);

        return response([
            'status' => 1,
            'message' => 'Xóa Index Coupon thành công'
        ]);
    }

    public function upCoupon(Request $request) {
        $id = $request->input('id');
        $upId = $request->input('upId');

        $id = explode('-', $id);
        $id = $id[1];

        $upId = explode('-', $upId);
        $upId = $upId[1];

        $code = Code::find($id);
        $upCode = Code::find($upId);

        if (empty($code) or empty($upCode)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại coupon này'
            ]);
        }

        $priority = $code->priority;
        $upPriority = $upCode->priority;

        if ($priority == $upPriority) {
            $upPriority++;
        }

        $code->update([
            'priority' => $upPriority, // hide
        ]);

        $upCode->update([
            'priority' => $priority, // hide
        ]);

        return response([
            'status' => 1,
            'message' => 'Sắp xếp Coupon thành công'
        ]);
    }

    public function downCoupon(Request $request) {
        $id = $request->input('id');
        $downId = $request->input('downId');

        $id = explode('-', $id);
        $id = $id[1];

        $downId = explode('-', $downId);
        $downId = $downId[1];

        $code = Code::find($id);
        $downCode = Code::find($downId);

        if (empty($code) or empty($downCode)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại coupon này'
            ]);
        }

        $priority = $code->priority;
        $downPriority = $downCode->priority;

        if ($priority == $downPriority) {
            $downPriority--;
        }

        $code->update([
            'priority' => $downPriority, // hide
        ]);

        $downCode->update([
            'priority' => $priority, // hide
        ]);

        return response([
            'status' => 1,
            'message' => 'Sắp xếp Coupon thành công'
        ]);
    }
}
