<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Unit;
use App\Models\Customer;
use App\Models\Post;
use App\Models\ShinhanBank;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
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

    public function registerCustomerBankGet(Request $request) {
        return view('frontend.register');
    }

    public function registerCustomerBank(Request $request) {

        $data = $request->all();

        if (empty($data['region'])) {
            return redirect()->back()->with('error', 'Hãy chọn khu vực bạn đang làm việc');
        }

        $data['phone'] =  Unit::formatPhone($data['phone']);
        $data['salary'] =  Unit::formatPhone($data['salary']);

        $data['type'] = 'web';
        $data['hide'] = 1;

        if (preg_match('/^[0-9.]+$/', $data['salary'])) {
        } else {
            return redirect()->back()->with('error', 'Hãy điền đúng định dạng số tiền lương');
        }

        if (intval($data['salary']) < 7000000) {
            $fbPixel = '0t';
        } else {
            $fbPixel = '7t';
        }

        unset($data['_token']);

        $data['salary'] = Unit::formatPhone($data['salary']);

        ShinhanBank::create($data);

        $url = '/tin-dung/success?name=' . $data['name'].'&phone='.$data['phone'].'&job='.$data['job'].'&region='.$data['region'].'&salary='.$data['salary']
            .'&salary_type='.$data['salary_type'].'&pixel='.$fbPixel;

        if (Session::has('vayvon')) {
            $url .= '&' . Session::get('vayvon');
        }

        return redirect(url($url));
    }

    public function success() {
        return view('frontend.success');
    }

    public function registerCustomerBankGetVay(Request $request) {
        return view('frontend.register_vay');
    }

    public function registerCustomerBankVay(Request $request) {

        $data = $request->all();

        if (empty($data['region'])) {
            return redirect()->back()->with('error', 'Hãy chọn khu vực bạn đang làm việc');
        }

        if (preg_match('/^[0-9.]+$/', $data['salary'])) {
        } else {
            return redirect()->back()->with('error', 'Hãy điền đúng định dạng số tiền lương');
        }

        if (preg_match('/^[0-9.]+$/', $data['money'])) {
        } else {
            return redirect()->back()->with('error', 'Hãy điền đúng định dạng số tiền muốn vay');
        }

        $data['phone'] =  Unit::formatPhone($data['phone']);
        $data['salary'] =  Unit::formatPhone($data['salary']);
        $data['money'] =  Unit::formatPhone($data['money']);

        if (intval($data['salary']) < 7000000) {
            $fbPixel = '0t';
        } else {
            $fbPixel = '7t';
        }

        if (intval($data['money']) < 10000000) {
            $mucvay = '0t';
        } else if (intval($data['money']) < 25000000) {
            $mucvay = '10t';
        } else {
            $mucvay = '25t';
        }

        $data['type'] = 'web';
        $data['hide'] = 1;

        unset($data['_token']);

        $data['salary'] = Unit::formatPhone($data['salary']);

        ShinhanBank::create($data);

        $url = '/vay-von/success?name=' . $data['name'].'&phone='.$data['phone'].'&job='.$data['job']
            .'&region='.$data['region'].'&salary='.$data['salary'].'&salary_type='.$data['salary_type'].'&money='
            .$data['money'].'&address='.$data['address'].'&pixel='.$fbPixel.'&mucvay='.$mucvay;

        if (Session::has('vayvon')) {
            $url .= '&' . Session::get('vayvon');
        }

        return redirect(url($url));
    }

    public function successVay() {
        return view('frontend.success_vay');
    }
}
