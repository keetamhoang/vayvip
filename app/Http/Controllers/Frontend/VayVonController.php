<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VayVonController extends Controller
{
    public function index(Request $request) {
        $data = $request->all();
        Session::forget('vayvon');
        $query = http_build_query($data, '', '&');

        if (!empty($query)) {
            Session::put('vayvon', $query);
        }

        return view('frontend.vayvon');
    }

    public function registerCustomer(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $bank = $request->input('bank');

        $name = trim($name);
        $phone = trim($phone);
        $email = trim($email);

        if ($name == '' or $phone == '') {
            return response([
                'status' => 0,
                'message' => 'Không được để trống thông tin của bạn!'
            ]);
        }

        try {
            DB::table('customers')->updateOrInsert([
                'phone' => $phone,
                'bank' => $bank,
                'source' => config('const.VAY_VON')
            ],[
                'name' => $name,
                'email' => $email,
                'created_at' => Carbon::now()
            ]);
        } catch (\Exception $ex) {
//            dd($ex->getMessage() . '|' . $ex->getLine());

            return response([
                'status' => 0,
                'message' => 'Có chút lỗi xảy ra, bạn vui lòng thử lại sau'
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }
}
