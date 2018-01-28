<?php

namespace App\Http\Controllers\Backend;

use App\Models\Customer;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends AdminController
{
    public function index(Request $request) {
        $type = $request->input('type');

        return view('admin.customers.index', compact('type'));
    }

    public function customerAttribute(Request $request) {
        $type = $request->input('type');

        if ($type == 'vay-von') {
            $customers = Customer::where('source', config('const.VAY_VON'))->orderBy('id', 'desc')->get();
        } elseif ($type == 'san-pham') {
            $customers = Customer::where('source', config('const.SAN_PHAM'))->orderBy('id', 'desc')->get();
        } else {
            $customers = Customer::orderBy('id', 'desc')->get();
        }

        return $this->datatable($customers);
    }

    public function datatable($customers)
    {
        return DataTables::of($customers)
            ->editColumn('source', function ($customer) {
                if ($customer->source == config('const.VAY_VON')) {
                    $text = '<button class="btn btn-success" type="button">Vay vốn tín dụng</button>';
                } else {
                    $text = '<button class="btn btn-danger" type="button">Tư vấn sản phẩm</button>';
                }

                return $text;
            })
            ->editColumn('created_at', function ($customer) {
                $text = Carbon::parse($customer->created_at)->format('d/m/Y H:i');

                return $text;
            })
            ->editColumn('post_id', function ($customer) {
                $post = Post::find($customer->post_id);

                $text = '';

                if (!empty($post)) {
                    $text = '<a href="' . url('tin-tuc/' . $post->slug) . '" target="_blank">' . $post->title . '</a>';
                }

                return $text;
            })
            ->addColumn('action', function ($customer) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/customers/'.$customer->id.'">Sửa</a><a href="/admin/customers/delete/'.$customer->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'source', 'image', 'created_at', 'post_id'])
            ->make(true);
    }

    public function delete($id) {
        try {
            Customer::where('id', $id)->delete();
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa không thành công!');
        }

        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}
