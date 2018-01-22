<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UserController extends AdminController
{
    public function index() {
        return view('admin.users.index');
    }

    public function userAttribute(Request $request) {
        $posts = User::all();

        return $this->datatable($posts);
    }

    public function datatable($posts)
    {
        return DataTables::of($posts)
            ->editColumn('status', function ($brand) {
                if ($brand->status == config('const.ACTIVE')) {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-success status-btn" data-status="1" type="button">ĐÃ KÍCH HOẠT</button>';
                } else {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-danger status-btn" data-status="0" type="button">CHƯA KÍCH HOẠT</button>';
                }

                return $text;
            })
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/users/'.$brand->id.'">Sửa</a><a href="/admin/users/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
    }

    public function create() {
        return view('admin.users.add');
    }

    public function edit($id) {
        $post = User::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.users.edit', compact('post'));
    }

    public function update(Request $request) {
        if (auth('admin')->user()->email != 'vohuyhoang112@gmail.com') {
            return redirect()->back()->with('error', 'Bạn không có quyền');
        }

        $data = $request->all();

        unset($data['email']);

        $post = User::find($data['id']);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $post->update($data);

        return redirect('admin/users/'. $post->id)->with('success', 'Cập nhật thành công');
    }
}
