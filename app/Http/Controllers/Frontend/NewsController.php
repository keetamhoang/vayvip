<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index() {
        $bigPosts = Post::where('is_highlight', 1)->orderBy('updated_at', 'desc')->limit(3)->get();

        $otherPosts = Post::where('is_highlight', 0)->orderBy('updated_at', 'desc')->limit(21)->get();

        return view('frontend.news.index')->with(compact('bigPosts', 'otherPosts'));
    }

    public function detail(Request $request) {
        return view('frontend.news.detail');
    }
}
