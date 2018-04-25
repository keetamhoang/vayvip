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

            $sheetRange = $data['sp'];

            if ($sheetRange == 'toiden_blaga') {
                $exe = Unit::addRowToSpreadsheet2($sheets, $spreadsheetId, $sheetRange, [$data['name'], $data['mobile'], $data['address'], Carbon::now()->toDateTimeString()]);
                $link = 'https://taichinhsmart.vn/san-pham/san-pham-toi-den-1-nhanh-blaga/success';
            } else {
                $exe = Unit::addRowToSpreadsheet2($sheets, $spreadsheetId, $sheetRange, [$data['name'], $data['mobile'], $data['email'], Carbon::now()->toDateTimeString()]);
                $link = 'https://taichinhsmart.vn/san-pham/san-pham-hoan-xuan-thang';
            }
        } catch (\Exception $exception) {
            return response([
                'status' => 0,
                'message' => 'Có chút lỗi xảy ra, bạn vui lòng thử lại sau.',
                'error' => $exception->getMessage()
            ]);
        }

        if (!$exe) {
            return response([
                'status' => 0,
                'message' => 'Có chút lỗi xảy ra, bạn vui lòng thử lại sau.',
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Thành công',
            'link' => $link
        ]);
    }

    public function hoanxuanthang() {
        return view('frontend.product.hoanxuanthang.index');
    }

    public function hoanxuanthangSuccess() {
        return view('frontend.product.hoanxuanthang.success');
    }
}
