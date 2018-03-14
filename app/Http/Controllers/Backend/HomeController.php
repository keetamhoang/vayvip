<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShinhanBank;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends AdminController
{
    public function index() {
        if (auth('admin')->user()->type == 'shinhanbank') {
            return redirect(url('admin/shinhanbank'));
        }

        return view('admin.index');
    }

    public function updateCustomerStatus(Request $request) {
        $customerId = $request->input('customer_id');
        $status = $request->input('status');
        $bank = $request->input('bank');

        $customer = ShinhanBank::find($customerId);

        if (empty($customer)) {
            return response([
                'status' => 0,
                'message' => 'Cập nhật không thành công'
            ]);
        }

        if ($bank == 'shinhanbank' and $customer->type == 'shinhanbank') {
            $customer->update([
                'status' => $status,
                'done_date' => Carbon::now()
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Cập nhật thành công'
        ]);
    }
}
