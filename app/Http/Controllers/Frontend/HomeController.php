<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Sheets;
use Google;

class HomeController extends Controller
{
    public function index() {
        return redirect(url('khuyen-mai'));
        return view('frontend.index');
    }

    public function registerForm(Request $request) {
        $data = $request->all();

        try {
            DB::table('customers')->updateOrInsert([
                'phone' => trim($data['phone']),
                'post_id' => trim($data['post_id']),
                'source' => config('const.SAN_PHAM')
            ],[
                'name' => $data['name'],
                'created_at' => Carbon::now()
            ]);

        } catch (\Exception $ex) {
            dd($ex->getMessage());

            return response([
                'status' => 0,
                'message' => 'Có chút lỗi xảy ra, bạn vui lòng thử lại sau!'
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Bạn đã đăng ký thông tin thành công. Chúng tôi sẽ sớm liên hệ với bạn!'
        ]);
    }

    public function registerCustomer(Request $request) {
        $email = $request->input('email');

        $email = trim($email);

        if (empty($email)) {
            return response([
                'status' => 0,
                'message' => 'Không được để trống Email của bạn'
            ]);
        }

        try {
            $customer = Customer::where('type', Customer::VOUCHER)->where('email', $email)->count();

            if ($customer == 0) {
                Customer::create([
                    'email' => $email,
                    'type' => Customer::VOUCHER // la dang ky tu popup voucher
                ]);
            }
        } catch (\Exception $ex) {
            return response([
                'status' => 0,
                'message' => 'Đăng ký không thành công, vui lòng thử lại sau'
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Chúc mừng bạn! Bạn đã đăng ký thành công!'
        ]);
    }

    public function getInfoCustomerChatfuel(Request $request) {
        $data = $request->all();

        Log::info(json_encode($data));
    }

    public function ggSheet() {
        Sheets::setService(Google::make('sheets'));
        Sheets::spreadsheet('1byMQtSXtlWbmzQaJ0exEDj5xsmdsfVX1u2y4OxWPxBE');

        $values = Sheets::sheet('Citi')->all();
//        $values = Sheets::sheet('VPBank')->all();

        dd($values);
    }
}
