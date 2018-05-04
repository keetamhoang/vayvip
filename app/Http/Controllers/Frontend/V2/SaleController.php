<?php

namespace App\Http\Controllers\Frontend\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index() {
        return view('frontend.v2.ma_giam_gia.index');
    }

    public function hot() {

    }
}
