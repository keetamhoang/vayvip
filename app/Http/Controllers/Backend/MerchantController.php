<?php

namespace App\Http\Controllers\Backend;

use App\Components\Unit;
use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class MerchantController extends AdminController
{
    public function index() {
        return view('admin.merchants.index');
    }

    public function merchantAttribute(Request $request) {
        $posts = Merchant::all();

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
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/merchants/'.$brand->id.'">Sửa</a>';
                if (auth('admin')->user()->type == 'admin') {
                    $url .= '<a href="/admin/merchants/delete/' . $brand->id . '" type="button" class="btn red btn-outline delete-btn">Xóa</a>';
                }

                return $url;
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
    }

    public function create() {
        return view('admin.merchants.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        if (empty($data['name'])) {
            return redirect('admin/merchants/add')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        if (empty($data['image'])) {
            unset($data['image']);
        }

        try {
            $data['slug'] = Unit::create_slug($data['name']);
            $data['parent_id'] = !empty($data['parent_id']) ? $data['parent_id'] : 0;

            $post = Merchant::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('admin/merchants/add')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/merchants/'. $post->id)->with('success', 'Thêm mới thành công');
    }

    public function edit($id) {
        $post = Merchant::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.merchants.edit', compact('post'));
    }

    public function update(Request $request) {
        $data = $request->all();

        $category = Merchant::find($data['id']);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';

        if (empty($data['image'])) {
            unset($data['image']);
        }

        $data['slug'] = Unit::create_slug($data['name']);
        $data['parent_id'] = !empty($data['parent_id']) ? $data['parent_id'] : 0;

        $category->update($data);

        return redirect('admin/merchants/'. $category->id)->with('success', 'Cập nhật thành công');
    }
}
