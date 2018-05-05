<?php

namespace App\Http\Controllers\Backend;

use App\Models\Discount;
use App\Models\KmProduct;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\Facades\DataTables;

class DiscountController extends AdminController
{
    public function index(Request $request) {
        $type = $request->input('type');

        return view('admin.discounts.index', compact('type'));
    }

    public function discountAttribute(Request $request) {
        $type = $request->input('type');

        $discounts = Discount::orderBy('id', 'desc')->get();

        return $this->datatable($discounts);
    }

    public function datatable($discounts)
    {
        return DataTables::of($discounts)
            ->editColumn('image', function ($discount) {
                $text = '<div style="width: 400px"><img style="width: 100%" src="'.$discount->image.'"></div>';

                return $text;
            })
            ->addColumn('time', function ($discount) {
                $text = Carbon::parse($discount->start_time)->format('d/m/Y') . ' - ' . Carbon::parse($discount->end_time)->format('d/m/Y');

                if ($discount->status == 0) {
                    $text .= ' <label class="label label-success">Còn hạn</label>';
                } else {
                    $text .= ' <label class="label label-danger">Hết hạn</label>';
                }

                return $text;
            })
            ->editColumn('is_coupon', function ($discount) {
                $text = '';

                if ($discount->is_coupon == 1) {
                    $text = '<label class="label label-primary">Có coupon</label>';
                }

                return $text;
            })
            ->editColumn('merchant', function ($discount) {
                $text = '<a href="https://'.$discount->domain. '" target="_blank">'.$discount->merchant.'</a>';

                return $text;
            })
            ->addColumn('action', function ($discount) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/discounts/'.$discount->id.'">Chi tiết</a><a href="/admin/discounts/delete/'.$discount->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'merchant', 'image', 'is_coupon', 'time'])
            ->make(true);
    }

    public function detail($id) {
        $discount = Discount::find($id);

        if (empty($discount)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.discounts.detail', compact('discount'));
    }

    public function setBanner($id) {
        $banner = Discount::find($id);

        if (!empty($banner)) {
            Discount::where('is_banner', 1)->update(['is_banner' => 0]);
            $banner->update(['is_banner' => 1]);

            Cache::forget('bannerKm');
            Cache::rememberForever('bannerKm', function() use ($banner) {
                return $banner;
            });
        } else {
            return redirect()->back()->with('error', 'Cập nhật không thành công');
        }

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function delete($id) {
        try {
            Discount::where('id', $id)->delete();
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa không thành công!');
        }

        return redirect()->back()->with('success', 'Xóa thành công!');
    }

//    product KM

    public function productIndex(Request $request) {
        $type = $request->input('type');

        return view('admin.discounts.product_index', compact('type'));
    }

    public function productAttribute(Request $request) {
        $type = $request->input('type');

        $discounts = KmProduct::orderBy('id', 'desc')->get();

        return $this->productDatatable($discounts);
    }

    public function productDatatable($discounts)
    {
        return DataTables::of($discounts)
            ->editColumn('image', function ($discount) {
                $text = '<div style="width: 200px"><img style="width: 100%" src="'.$discount->image.'"></div>';

                return $text;
            })
            ->editColumn('status', function ($discount) {
                if ($discount->status == KmProduct::ACTIVE) {
                    $text = ' <label class="label label-success">Hiện</label>';
                } else {
                    $text = ' <label class="label label-danger">Ẩn</label>';
                }

                return $text;
            })
            ->editColumn('name', function ($discount) {
                $text = '<a href="'.$discount->aff_link.'" target="_blank">'.$discount->name.'</a>';

                return $text;
            })
            ->editColumn('price', function ($discount) {
                $text = number_format($discount->price, 0, '.', '.') . ' đ';

                return $text;
            })
            ->editColumn('discount', function ($discount) {
                $text = number_format($discount->discount, 0, '.', '.') . ' đ';

                return $text;
            })
            ->addColumn('percent', function ($discount) {
                $text = round(($discount->price - $discount->discount) / $discount->price * 100);
                $text = 'Giảm -' . $text . '%';

                return $text;
            })
            ->addColumn('action', function ($discount) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/km-products/'.$discount->id.'">Chi tiết</a><a href="/admin/km-products/delete/'.$discount->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'aff_link', 'image', 'status', 'percent', 'discount', 'price', 'name'])
            ->make(true);
    }

    public function productDetail($id) {
        $discount = KmProduct::find($id);

        if (empty($discount)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.discounts.product_detail', compact('discount'));
    }

    public function productDelete($id) {
        try {
            Discount::where('id', $id)->delete();
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa không thành công!');
        }

        return redirect()->back()->with('success', 'Xóa thành công!');
    }

    public function productUpdate(Request $request) {
        $id = $request->input('id');
        $status = $request->input('status', null);

        $product = KmProduct::find($id);

        if (empty($product)) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
        }

        $status = $status == 'on' ? KmProduct::ACTIVE : KmProduct::IN_ACTIVE;

        $product->update(['status' => $status]);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }




    public function kmIndex() {
        return view('admin.km.index');
    }

    public function kmAttribute(Request $request) {
        $posts = Partner::all();

        return $this->kmDatatable($posts);
    }

    public function kmDatatable($posts)
    {
        return DataTables::of($posts)
            ->editColumn('desc_up', function ($brand) {
                $html = '<div style="height: 300px; overflow: hidden"><p>'.$brand->desc_up.'</p></div>';

                return $html;
            })->editColumn('desc_bot', function ($brand) {
                $html = '<div style="height: 300px; overflow: hidden"><p>'.$brand->desc_bot.'</p></div>';

                return $html;
            })
            ->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/don-vi-khuyen-mai/'.$brand->id.'">Sửa</a>';
//<a href="/admin/don-vi-khuyen-mai/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'desc_up', 'desc_bot'])
            ->make(true);
    }

    public function kmCreate() {
        return view('admin.km.create');
    }

    public function kmStore(Request $request) {
        $data = $request->all();

        if (empty($data['name']) or empty($data['desc_up']) or empty($data['desc_bot'])) {
            return redirect('admin/don-vi-khuyen-mai/them')->with('error', 'Lỗi! Thêm mới không thành công, hãy điền đủ thông tin');
        }

        try {
            $post = Partner::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('admin/don-vi-khuyen-mai/them')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/don-vi-khuyen-mai/'. $post->id)->with('success', 'Thêm mới thành công');
    }

    public function kmEdit($id) {
        $post = Partner::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.km.edit', compact('post'));
    }

    public function kmUpdate(Request $request) {
        $data = $request->all();

        $category = Partner::find($data['id']);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $category->update($data);

        return redirect('admin/don-vi-khuyen-mai/'. $category->id)->with('success', 'Cập nhật thành công');
    }

    public function update(Request $request) {
        $data = $request->all();

        $category = Discount::find($data['id']);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        try {
            $startTime = Carbon::parse($data['start_time'])->toDateString();
            $endTime = Carbon::parse($data['end_time'])->toDateString();
        } catch (\Exception $ex) {

        }

        $category->update($data);

        return redirect('admin/discounts/'. $category->id)->with('success', 'Cập nhật thành công');
    }
}
