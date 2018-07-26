<?php

namespace App\Http\Controllers\Frontend\V2;

use App\Models\Coupon;
use App\Models\Discount;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function submitEndpoint(Request $request) {
        $endpoint = $request->input('endpoint');

        $data = json_decode($endpoint, true);

        $keys = $data['keys'];

        $checkExist = DB::table('push_subscriptions')->where('endpoint', $data['endpoint'])->where('public_key', $keys['p256dh'])
            ->where('auth_token', $keys['auth'])->count();

        if (empty($checkExist)) {
            DB::table('push_subscriptions')->insert(
                [
                    'endpoint' => $data['endpoint'],
                    'public_key' => $keys['p256dh'],
                    'auth_token' => $keys['auth'],
                    'created_at' => Carbon::now()
                ]
            );
        }

        return response([
            'status' => 1
        ]);
    }

    public function index() {
        $mosts = Discount::where('status', 0);
        $coupons = Discount::where('status', 0);
        $deals = Discount::where('status', 0);
        $exps = Discount::where('status', 0);

        if (session()->get('web') == 'vi') {
            $mosts = $mosts->VN()->limit(4);
            $coupons = $coupons->VN()->limit(4);
            $deals = $deals->VN()->limit(4);
            $exps = $exps->VN()->limit(4);
        } else if (session()->get('web') == 'sg') {
            $mosts = $mosts->SG();
            $coupons = $coupons->SG();
            $deals = $deals->SG();
            $exps = $exps->SG();
        } elseif (session()->get('web') == 'my') {
            $mosts = $mosts->MY();
            $coupons = $coupons->MY();
            $deals = $deals->MY();
            $exps = $exps->MY();
        } elseif (session()->get('web') == 'ph') {
            $mosts = $mosts->PH();
            $coupons = $coupons->PH();
            $deals = $deals->PH();
            $exps = $exps->PH();
        } elseif (session()->get('web') == 'id') {
            $mosts = $mosts->ID();
            $coupons = $coupons->ID();
            $deals = $deals->ID();
            $exps = $exps->ID();
        } elseif (session()->get('web') == 'th') {
            $mosts = $mosts->TH();
            $coupons = $coupons->TH();
            $deals = $deals->TH();
            $exps = $exps->TH();
        }

        $mosts = $mosts->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $coupons = $coupons->where('is_coupon', 1)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $deals = $deals->where('is_coupon', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $exps = $exps->where('end_time', '>=', Carbon::now()->toDateString())->orderBy('is_hot', 'desc')->orderBy('end_time', 'asc')->orderBy('count_view', 'desc')->get();

        if (session()->get('web') == 'vi') {
            return view('frontend.v2.index', compact('mosts', 'coupons', 'deals', 'exps'));
        } else if (in_array(session()->get('web'), ['sg', 'my', 'ph'])) {
            return view('frontend.v2.en.index', compact('mosts', 'coupons', 'deals', 'exps'));
        } else if (session()->get('web') == 'id') {
            return view('frontend.v2.id.index', compact('mosts', 'coupons', 'deals', 'exps'));
        }
    }

    public function getDetail(Request $request) {
        $id = $request->input('id');

        $discount = Discount::find($id);

        if (empty($discount)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại'
            ]);
        }

        if ($discount->is_coupon == 1) {
            $coupon = Coupon::where('discount_id', $id)->first();
        }

        return response([
            'status' => 1,
            'coupon' => !empty($coupon) ? $coupon : null,
            'discount' => $discount
        ]);
    }

    public function coupons() {
        $mosts = Discount::VN()->where('status', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $coupons = Discount::VN()->where('status', 0)->where('is_coupon', 1)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $deals = Discount::VN()->where('status', 0)->where('is_coupon', 0)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->get();
        $exps = Discount::VN()->where('status', 0)->where('end_time', '>=', Carbon::now()->toDateString())->orderBy('is_hot', 'desc')->orderBy('end_time', 'asc')->orderBy('count_view', 'desc')->get();

        return view('frontend.v2.en.index', compact('mosts', 'coupons', 'deals', 'exps'));
    }

    public function test() {
        return view('frontend.test');
    }

    public function testSubmit(Request $request) {
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36';
        $session = mt_rand();
        $super_proxy = 'zproxy.lum-superproxy.io';
        $curl = curl_init('https://api.avay.vn/captcha');
        curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curl, CURLOPT_PROXY, "http://$super_proxy:$port");
//        curl_setopt($curl, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
        $result = curl_exec($curl);
        curl_close($curl);

//        json_decode($result);

        return response([
            'capcha' => json_decode($result)
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $data = $request->all();

        Test::create($data);

        return response([
            'status' => 1
        ]);
    }
}
