<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Code;
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

        $coupons = Code::where('name', 'lazada')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.lazada', compact('lazada', 'coupons'));
    }

    public function tiki() {
        $lazada = Partner::where('name', 'Tiki')->first();

        $coupons = Code::where('name', 'tiki')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.tiki', compact('lazada', 'coupons'));
    }

    public function shopee() {
        $lazada = Partner::where('name', 'Shopee')->first();

        $coupons = Code::where('name', 'shopee')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.shopee', compact('lazada', 'coupons'));
    }

    public function grab() {
        $lazada = Partner::where('name', 'Grab')->first();

        $coupons = Code::where('name', 'grab')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.grab', compact('lazada', 'coupons'));
    }

    public function yes24() {
        $lazada = Partner::where('name', 'Yes24')->first();

        $coupons = Code::where('name', 'yes24')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.yes24', compact('lazada', 'coupons'));
    }

    public function adayroi() {
        $lazada = Partner::where('name', 'Adayroi')->first();

        $coupons = Code::where('name', 'adayroi')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.adayroi', compact('lazada', 'coupons'));
    }

    public function duLich() {
        $lazada = Partner::where('name', 'MyTour')->first();

        $coupons = Code::where('name', 'dulich')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.du_lich', compact('lazada', 'coupons'));
    }

    public function lotte() {
        $lazada = Partner::where('name', 'Lotte')->first();

        $coupons = Code::where('name', 'lotte')->where('status', 0)->orderBy('priority', 'desc')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.lotte', compact('lazada', 'coupons'));
    }



    public function danhMuc() {
        return view('frontend.km.danh_muc');
    }

    public function congNghe() {
        return view('frontend.km.cong_nghe');
    }

    public function giaDung() {
        return view('frontend.km.gia_dung');
    }

    public function meBe() {
        return view('frontend.km.me_be');
    }

    public function lamDep() {
        return view('frontend.km.lam_dep');
    }

    public function duLich2() {
        return view('frontend.km.du_lich_2');
    }

    public function thoiTrang() {
        return view('frontend.km.thoi_trang');
    }

    public function doiSong() {
        return view('frontend.km.doi_song');
    }

    public function dichVuGiamGia() {
        return view('frontend.km.dich_vu_giam_gia');
    }

    public function bachHoa() {
        return view('frontend.km.bach_hoa');
    }

    public function Sach() {
        return view('frontend.km.sach');
    }

    public function Xe() {
        return view('frontend.km.xe');
    }

    public function nganHang() {
        return view('frontend.km.ngan_hang');
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
