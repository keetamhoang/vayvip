<?php

namespace App\Http\Controllers\Backend;

use App\Components\Unit;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PostController extends AdminController
{
    public function index() {
        return view('admin.posts.index');
    }

    public function postAttribute(Request $request) {
        $posts = Post::orderBy('id','desc');

        return $this->datatable($posts);
    }

    public function datatable($posts)
    {
        return DataTables::of($posts)
            ->editColumn('image', function ($brand) {
                $image = '<img src="'.$brand->image.'" style="width: 100%">';

                $image = '<div style="width: 100px">'.$image.'</div>';

                return $image;
            })
            ->editColumn('status', function ($brand) {
                if ($brand->status == config('const.ACTIVE')) {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-success status-btn" data-status="1" type="button">HIỂN THỊ</button>';
                } else {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-danger status-btn" data-status="0" type="button">KHÔNG HIỂN THỊ</button>';
                }

                return $text;
            })
            ->editColumn('category_id', function ($brand) {
                $category = Category::find($brand->category_id);

                $text = '';

                if (!empty($category)) {
                    $text = $category->name;
                }

                return $text;
            })
            ->editColumn('title', function ($brand) {
                $html = '<div style="">'.$brand->title.'</div>';

                return $html;
            })
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/posts/'.$brand->id.'">Sửa</a><a href="/admin/posts/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'status', 'image', 'title'])
            ->make(true);
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';

        $data['status'] = !empty($data['status']) and $data['status'] == 'on' ? 1: 0;
        $data['is_highlight'] = !empty($data['is_highlight']) and $data['is_highlight'] == 'on' ? 1: 0;
        $data['is_review'] = !empty($data['is_review']) and $data['is_review'] == 'on' ? 1: 0;

        $data['slug'] = Unit::create_slug($data['title']);

        $data['account_id'] = auth('admin')->user()->id;

        try {
            $post = Post::create($data);

//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_URL, "https://developers.facebook.com/tools/debug/sharing/?q=http://taichinhsmart.vn/tin-tuc/".$post->slug);
//            curl_setopt($ch, CURLOPT_HEADER, false);
//            curl_exec($ch);
//            curl_close($ch);

        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('admin/posts/add')->with('error','Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/posts/'. $post->id)->with('success', 'Thêm mới thành công');
    }

    public function edit($id) {
        $post = Post::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request) {
        $data = $request->all();

        $post = Post::find($data['id']);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';

        if (empty($data['image'])) {
            unset($data['image']);
        }

//        $data['slug'] = Unit::create_slug($data['title']);

        $data['status'] = !empty($data['status']) and $data['status'] == 'on' ? 1: 0;
        $data['is_highlight'] = !empty($data['is_highlight']) and $data['is_highlight'] == 'on' ? 1: 0;
        $data['is_review'] = !empty($data['is_review']) and $data['is_review'] == 'on' ? 1: 0;

        try {
            $post->update($data);

//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_URL, "https://developers.facebook.com/tools/debug/sharing/?q=http://taichinhsmart.vn/tin-tuc/" . $post->slug);
//            curl_setopt($ch, CURLOPT_HEADER, false);
//            curl_exec($ch);
//            curl_close($ch);
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect('admin/posts/add')->with('error','Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/posts/'. $post->id)->with('success', 'Cập nhật thành công');
    }
}
