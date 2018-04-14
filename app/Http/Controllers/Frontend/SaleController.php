<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index() {
        return view('frontend.km.all');
    }

    public function hot() {
        return view('frontend.km.hot');
    }

    public function online() {
        return view('frontend.km.online');
    }

    public function lazada() {
        return view('frontend.km.lazada');
    }

    public function tiki() {
        return view('frontend.km.tiki');
    }

    public function shopee() {
        return view('frontend.km.shopee');
    }

    public function grab() {
        return view('frontend.km.grab');
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
