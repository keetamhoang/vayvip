<?php

namespace App\Http\Controllers\Frontend\V2;

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
        $store = 'lazada';
        $name = 'Mã Giảm Giá Lazada Tháng '.Carbon::now()->format('m/Y').' Mới Nhất';
        $desc = 'Mã Giảm Giá Lazada tháng '.Carbon::now()->format('m/Y') .' mới nhất, khuyến mãi Lazada cập nhật liên tục mỗi ngày';
        $image = '/new/assets/images/lazada-240x240.png';

        return view('frontend.v2.ma_giam_gia.store', compact('store', 'image', 'name', 'desc'));
    }
}
