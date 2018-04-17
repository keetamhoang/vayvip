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

        $coupons = Code::where('name', 'lazada')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.lazada', compact('lazada', 'coupons'));
    }

    public function tiki() {
        $lazada = Partner::where('name', 'Tiki')->first();

        $coupons = Code::where('name', 'tiki')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.tiki', compact('lazada', 'coupons'));
    }

    public function shopee() {
        $lazada = Partner::where('name', 'Shopee')->first();

        $coupons = Code::where('name', 'shopee')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.shopee', compact('lazada', 'coupons'));
    }

    public function grab() {
        $lazada = Partner::where('name', 'Grab')->first();

        $coupons = Code::where('name', 'grab')->orderBy('id', 'desc')->limit(25)->get();

        return view('frontend.km.grab', compact('lazada', 'coupons'));
    }

    public function yes24() {
        return view('frontend.km.yes24');
    }

    public function adayroi() {
        return view('frontend.km.adayroi');
    }

    public function duLich() {
        return view('frontend.km.du_lich');
    }

    public function lotte() {
        return view('frontend.km.lotte');
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

}
