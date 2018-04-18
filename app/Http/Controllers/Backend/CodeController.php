<?php

namespace App\Http\Controllers\Backend;

use App\Models\Code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class CodeController extends AdminController
{
    public function codeIndex() {
        return view('admin.code.index');
    }

    public function codeAttribute(Request $request) {
        $posts = Code::all();

        return $this->codeDatatable($posts);
    }

    public function codeDatatable($posts)
    {
        return DataTables::of($posts)
            ->editColumn('desc', function ($brand) {
                $html = '<div style="height: 100px; overflow: hidden"><p>'.$brand->desc.'</p></div>';

                return $html;
            })->editColumn('title', function ($brand) {
                $html = $brand->title;

                return $html;
            })->editColumn('status', function ($brand) {
                if ($brand->status == 1) {
                    $html = '<label class="label label-danger">Đã ẩn</label>';
                } else {
                    $html = '<label class="label label-success">Đang hiện</label>';
                }

                return $html;
            })
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/codes/'.$brand->id.'">Sửa</a><a href="/admin/codes/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'desc', 'title', 'status'])
            ->make(true);
    }

    public function codeCreate() {
        return view('admin.code.create');
    }

    public function codeStore(Request $request) {
        $data = $request->all();

        try {
            $data['type_km'] = 'COUPON';
            $post = Code::create($data);
        } catch (\Exception $e) {
//            dd($e->getMessage());
            return redirect('admin/codes/add')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/codes/'. $post->id)->with('success', 'Thêm mới thành công');
    }

    public function codeEdit($id) {
        $post = Code::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.code.edit', compact('post'));
    }

    public function codeUpdate(Request $request) {
        $data = $request->all();

        $category = Code::find($data['id']);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $category->update($data);

        return redirect('admin/codes/'. $category->id)->with('success', 'Cập nhật thành công');
    }
}
