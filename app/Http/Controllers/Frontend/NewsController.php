<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index() {
        return view('frontend.news.index');
    }

    public function detail(Request $request) {
        return view('frontend.news.detail');
    }
}
