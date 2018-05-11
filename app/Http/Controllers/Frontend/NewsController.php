<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function indexTinTuc() {
        $posts = Post::where('status', 1)->where('category_id', 1)->orderBy('created_at', 'desc')->get();

        return view('frontend.news.index')->with(compact('posts'));
    }

    public function indexMuaSam() {
        $posts = Post::where('status', 1)->where('category_id', 2)->orderBy('created_at', 'desc')->get();

        return view('frontend.news.index')->with(compact('posts'));
    }

    public function detail($slug, $id) {
        $post = Post::find($id);

        return view('frontend.news.detail', compact('post'));
    }

    public function generateForm() {
        return view('frontend.news.gen');
    }
}
