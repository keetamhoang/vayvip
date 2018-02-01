<?php

namespace App\Http\Controllers\Backend;

use App\Models\ChatfuelCustomer;
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
            $customers = Customer::where('source', config('const.SAN_PHAM'))->orWhere('type', 1)->orderBy('id', 'desc')->get();
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

                if (empty($customer->source)) {
                    $text = 'Đăng ký tư vấn sản phẩm';
                } else {
                    if (!empty($post)) {
                        $text = '<a href="' . url('tin-tuc/' . $post->slug) . '" target="_blank">' . $post->title . '</a>';
                    }
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


    public function chatfuelIndex(Request $request) {
        $type = $request->input('type');

        return view('admin.customers.chatfuel_index', compact('type'));
    }

    public function chatfuelAttribute(Request $request) {
        $type = $request->input('type');

        if ($type == 'citi') {
            $customers = ChatfuelCustomer::where('type', ChatfuelCustomer::CITI)->orderBy('status', 'asc')->get();
        } elseif ($type == 'vpbank') {
            $customers = ChatfuelCustomer::where('type', ChatfuelCustomer::VPBANK)->orderBy('status', 'asc')->get();
        } else {
            $customers = ChatfuelCustomer::orderBy('status', 'asc')->get();
        }

        return $this->chatfuelDatatable($customers);
    }

    public function chatfuelDatatable($customers)
    {
        return DataTables::of($customers)
            ->editColumn('salary', function ($customer) {
                $text = number_format($customer->salary, 0, '.', '.');

                $text = '<input value="'.$text.'">';

                return $text;
            })
            ->editColumn('name', function ($customer) {
                $text = '<input value="'.$customer->name.'">';

                return $text;
            })
            ->editColumn('birthday', function ($customer) {
                $text = '<input value="'.$customer->birthday.'">';

                return $text;
            })
            ->editColumn('address', function ($customer) {
                $text = '<input value="'.$customer->address.'">';

                return $text;
            })
            ->editColumn('quan', function ($customer) {
                $text = '<input value="'.$customer->quan.'">';

                return $text;
            })
            ->editColumn('phone', function ($customer) {
                $text = '<input value="'.$customer->phone.'">';

                return $text;
            })
            ->editColumn('email', function ($customer) {
                $text = '<input value="'.$customer->email.'">';

                return $text;
            })
            ->editColumn('type', function ($customer) {
                $text = '';

                if ($customer->type == ChatfuelCustomer::CITI) {
                    $text = '<label class="label label-success">Citi</label>';
                } else if ($customer->type == ChatfuelCustomer::VPBANK) {
                    $text = '<label class="label label-danger">VPBank</label>';
                }

                return $text;
            })

            ->editColumn('status', function ($customer) {
                $text = '';

                if ($customer->status == ChatfuelCustomer::DONE) {
                    $text = '<label class="label label-success">Xong</label>';
                } else if ($customer->status == ChatfuelCustomer::NOT_DONE) {
                    $text = '<label class="label label-danger">Chưa</label>';
                    $text .= '<button class="btn-success btn btn-sm go-done" data-id="'.$customer->id.'"><i class="fa fa-forward"></i> DONE!</button>';
                }

                return $text;
            })
            ->addColumn('action', function ($customer) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/customers/'.$customer->id.'">Sửa</a><a href="/admin/customers/delete/'.$customer->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })
            ->rawColumns(['action', 'salary', 'type', 'birthday', 'name', 'email', 'phone', 'quan', 'address', 'status'])
            ->make(true);
    }

    public function chatfuelDelete($id) {
        try {
            Customer::where('id', $id)->delete();
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa không thành công!');
        }

        return redirect()->back()->with('success', 'Xóa thành công!');
    }

    public function updateCustomer(Request $request) {
        $id = $request->input('id');

        $customer = ChatfuelCustomer::find($id);

        if (empty($customer)) {
            return response([
                'status' => 0,
                'message' => 'Không tìm thấy khách hàng'
            ]);
        }

        $customer->update([
            'status' => ChatfuelCustomer::DONE
        ]);

        return response([
            'status' => 1,
            'message' => 'Cập nhật thành công'
        ]);
    }
}
