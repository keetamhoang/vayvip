<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VayVonController extends Controller
{
    public function index() {
        return view('frontend.vayvon');
    }

    public function registerCustomer(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');

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
            Customer::create([
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'source' => config('const.FROM_WEB')
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
