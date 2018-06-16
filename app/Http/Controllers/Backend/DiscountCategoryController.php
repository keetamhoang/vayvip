<?php

namespace App\Http\Controllers\Backend;

use App\Models\Discount;
use App\Models\DiscountCategory;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class DiscountCategoryController extends Controller
{
    //
    public function categories($id) {
        $partner = Partner::find($id);

        if (empty($partner)) {
            return redirect()->back()->with('error', 'Không tìm thấy trang');
        }

        return view('admin.km.category.index', compact('partner'));
    }

    public function discountCategoryAttribute(Request $request) {
        $id = $request->input('id');

        $categories = DiscountCategory::where('partner_id', $id)->get();

        return $this->discountCategoryDatatable($categories);
    }

    public function discountCategoryDatatable($categories) {
        return DataTables::of($categories)
            ->editColumn('content', function ($brand) {
                $html = '<div style="height: 100px; overflow: hidden"><p>'.$brand->content.'</p></div>';

                return $html;
            })
            ->editColumn('count_coupon', function ($brand) {
                $count = Discount::where('discount_category_id', $brand->id)->count();

                $html = '<label class="label label-success">'.$count.'</label>';

                return $html;
            })
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/discount-categories/'.$brand->id.'">Sửa</a>';

                return $url;
            })
            ->rawColumns(['action', 'content', 'count_coupon'])
            ->make(true);
    }

    public function add($id) {
        $partner = Partner::find($id);

        if (empty($partner)) {
            return redirect()->back()->with('error', 'Không tìm thấy trang');
        }

        return view('admin.km.category.add', compact('partner'));
    }

    public function store(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');
        $id = $request->input('id');

        $partner = Partner::find($id);

        if (empty($partner)) {
            return redirect()->back()->with('error', 'Không tìm thấy trang');
        }

        if (empty($title)) {
            return redirect()->back()->with('error', 'Không đc để trống tên danh mục');
        }

        DiscountCategory::create([
            'title' => $title,
            'content' => $content,
            'partner_id' => $id
        ]);

        return redirect()->back()->with('success', 'Thành công');
    }

    public function edit($id) {
        $category = DiscountCategory::find($id);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tìm thấy danh mục');
        }

        return view('admin.km.category.edit', compact('category'));
    }

    public function update(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');
        $id = $request->input('id');

        $partner = DiscountCategory::find($id);

        if (empty($partner)) {
            return redirect()->back()->with('error', 'Không tìm thấy danh mục');
        }

        if (empty($title)) {
            return redirect()->back()->with('error', 'Không đc để trống tên danh mục');
        }

        $partner->update([
            'title' => $title,
            'content' => $content,
        ]);

        return redirect()->back()->with('success', 'Thành công');
    }

    public function change(Request $request) {
        $id = $request->input('id');
        $value = $request->input('value');

        $discount = Discount::find($id);

        if (empty($discount)) {
            return response([
                'status' => 0,
                'message' => 'Không tìm thấy khuyến mãi'
            ]);
        }

        $discount->update([
            'discount_category_id' => $value
        ]);

        return response([
            'status' => 1,
            'message' => 'Cập nhật thành công'
        ]);
    }
}
