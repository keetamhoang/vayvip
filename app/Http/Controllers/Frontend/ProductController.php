<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sheets;
use Google;

class ProductController extends Controller
{
    protected $token;

    public function toidenBlaga() {
        return view('frontend.product.toidenblaga.index');
    }

    public function toidenBlagaSuccess() {
        return view('frontend.product.toidenblaga.success');
    }

    public function register(Request $request) {
        $data = $request->all();

        try {
            $client = new \Google_Client();
            $client->setApplicationName('vayvip');
            $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
            $client->setAccessType('offline');

            $client->setAuthConfig(storage_path('credentials.json'));

            $sheets = new \Google_Service_Sheets($client);

            $spreadsheetId = '1f1tgOTIV1K6LqqbeQ5gTvRYETDSp1YdfzJRWiSOFkw8';

            Unit::addRowToSpreadsheet($sheets, $spreadsheetId, [$data['name'], $data['mobile'], $data['address'], Carbon::now()->toDateTimeString()]);
        } catch (\Exception $exception) {
            return response([
                'status' => 0,
                'message' => 'Có chút lỗi ,ảy ra, bạn vui lòng thử lại sau.',
                'error' => $exception->getMessage()
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Thành công',
            'link' => 'https://taichinhsmart.vn/san-pham/san-pham-toi-den-1-nhanh-blaga/success'
        ]);
    }

    public function hoanxuanthang() {
        return view('frontend.product.hoanxuanthang.index');
    }

    public function hoanxuanthangSuccess() {
        return view('frontend.product.hoanxuanthang.success');
    }
}
