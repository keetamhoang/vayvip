<?php

namespace App\Http\Controllers\Frontend;

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

    public function register(Request $request) {
        $data = $request->all();

//        $token = '';
//        Google::setAccessToken('AIzaSyDtUfIe0oHVOFUdaUVlxinhKXJJVdlvwRo');
        Sheets::setService(Google::make('sheets'));
        Sheets::spreadsheet('1f1tgOTIV1K6LqqbeQ5gTvRYETDSp1YdfzJRWiSOFkw8');

        Sheets::sheet($data['sp'])->range('')->append([
            [$data['name'], $data['mobile'], $data['address']]
        ]);

        return redirect()->back();
    }
}
