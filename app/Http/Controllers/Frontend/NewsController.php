<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index() {
        $bigPosts = Post::where('is_highlight', 1)->orderBy('updated_at', 'desc')->where('status', config('const.ACTIVE'))->limit(3)->get();

        $otherPosts = Post::orderBy('updated_at', 'desc')->where('status', config('const.ACTIVE'))->limit(21)->get();

        return view('frontend.news.index')->with(compact('bigPosts', 'otherPosts'));
    }

    public function detail($slug, $id) {
        $post = Post::find($id);

        return view('frontend.news.detail', compact('post'));
    }

    public function generateForm() {
        return view('frontend.news.gen');
    }
}
