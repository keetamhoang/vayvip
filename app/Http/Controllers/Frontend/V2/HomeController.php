<?php

namespace App\Http\Controllers\Frontend\V2;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
//        $populars = Discount::where('status', 0)->

        return view('frontend.v2.index');
    }
}
