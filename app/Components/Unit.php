<?php
namespace App\Components;

use App\Models\Discount;
use App\Models\DiscountCategory;
use App\Models\PushSubscrtiption;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

class Unit {
    public static function create_slug($string) {
        $search = array (
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        ) ;
        $replace = array (
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        ) ;
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);

        return $string;
    }

    public static function formatPhone($phone)
    {
        $phone = preg_replace('/\s+/', '', $phone);
        $phone = preg_replace("/[^0-9]/", "", $phone);

        return $phone;
    }

    public static function addRowToSpreadsheet($sheet_service, $spreadsheetId, $ary_values = array()) {
        // Set the sheet ID
        $fileId = $spreadsheetId; // Copy & paste from a spreadsheet URL
        $range = 'toiden_blaga!A2:D';
        // Build the CellData array
        $values = array();
        foreach( $ary_values AS $d ) {
            $cellData = new \Google_Service_Sheets_CellData();
            $value = new \Google_Service_Sheets_ExtendedValue();
            $value->setStringValue($d);
            $cellData->setUserEnteredValue($value);
            $values[] = $cellData;
        }
        // Build the RowData
        $rowData = new \Google_Service_Sheets_RowData();
        $rowData->setValues($values);
        // Prepare the request
        $append_request = new \Google_Service_Sheets_AppendCellsRequest();
        $append_request->setSheetId(0);
        $append_request->setRows($rowData);
        $append_request->setFields('userEnteredValue');
        // Set the request
        $request = new \Google_Service_Sheets_Request();
        $request->setAppendCells($append_request);
        // Add the request to the requests array
        $requests = array();
        $requests[] = $request;
        // Prepare the update
        $batchUpdateRequest = new \Google_Service_Sheets_BatchUpdateSpreadsheetRequest(array(
            'requests' => $requests
        ));

        try {
            // Execute the request
            $response = $sheet_service->spreadsheets->batchUpdate($fileId, $batchUpdateRequest);
            if( $response->valid() ) {
                // Success, the row has been added
                return true;
            }
        } catch (\Exception $e) {
            // Something went wrong
            dd($e->getMessage());
        }

        return false;
    }

    public static function addRowToSpreadsheet2($sheet_service, $spreadsheetId, $sSpreadsheetRange, $ary_values = array()) {
        try {
            $sSpreadsheetID = $spreadsheetId; // change me
            $sSpreadsheetRange = $sSpreadsheetRange . '!A2:D';

            $asSpreadsheetRows = array(
                $ary_values
            );
            $body = new \Google_Service_Sheets_ValueRange(array(
                'values' => $asSpreadsheetRows
            ));
            $params = array(
                'valueInputOption' => 'USER_ENTERED'
            );

            $result = $sheet_service->spreadsheets_values->append($sSpreadsheetID, $sSpreadsheetRange, $body, $params);

        } catch (\Exception $ex) {
            return false;
        }

        return true;
    }

    public static function convertDateFormat($original) {
        $original = str_replace('DD', Carbon::now()->day, $original);
        $original = str_replace('MM', Carbon::now()->month, $original);
        $original = str_replace('YY', Carbon::now()->year, $original);

        return $original;
    }

    public static function getNewDetailStore($store, $partner, $merchant) {
        $descHot = 'Cập nhật các mã giảm giá '.$store.' tháng '.Carbon::now()->month.' cực hot dùng được cho mọi đơn hàng. Đây là những mã khuyến mãi được săn đón nhiều nhất, bởi bạn không cần quan tâm đến sản phẩm nào mới là sản phẩm được khuyến mãi. Bạn chỉ cần chọn đúng mặt hàng bạn cần mua và áp dụng mã giảm giá '.$store.' cho cả đơn hàng. Nhanh tay copy mã giảm giá '.$store.' phía dưới đi nào';

        $categories = Cache::remember('discount-category-'.$merchant, 1, function () use ($partner) {
            return DiscountCategory::where('partner_id', $partner->id)->get();
        });

//        $categories = DiscountCategory::where('partner_id', $partner->id)->get();

        $coupons = Cache::remember('coupons-'.$merchant, 5, function () use ($partner, $categories, $descHot, $merchant) {
            $coupons = [];

            $hots = Discount::VN()->where('status', 0)->where('merchant', $merchant)->where('is_hot', 1)->orderBy('count_view', 'desc')->limit(10)->get();

            if (count($hots) > 0) {
                $coupons['hots'] = [
                    'discounts' => $hots,
                    'desc' => $descHot
                ];
            }

            foreach ($categories as $category) {
                $discounts = Discount::VN()->where('status', 0)->where('merchant', $merchant)->where('discount_category_id', $category->id)->orderBy('is_hot', 'desc')->orderBy('count_view', 'desc')->limit(10)->get();

                if (count($discounts) > 0) {
                    $coupons[$category->id] = [
                        'cate' => $category,
                        'discounts' => $discounts
                    ];
                }
            }

            $others = Discount::VN()->where('status', 0)->where('merchant', $merchant)->whereNull('discount_category_id')->orderBy('id', 'desc')->limit(10)->get();

            $coupons['others'] = ['discounts' => $others];

            return $coupons;
        });

        return $coupons;
    }

    public static function sendNotiWeb() {
        $auth = array(
            'VAPID' => array(
                'subject' => 'https://github.com/Minishlink/web-push-php-example/',
                'publicKey' => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY')
            ),
        );

        $webPush = new WebPush($auth);

        PushSubscrtiption::chunk(100, function ($endpoints) use ($webPush) {
            foreach ($endpoints as $e) {
                $notification = [
                    'subscription' => Subscription::create([
                        'endpoint' => $e->endpoint,
                        'publicKey' => $e->public_key,
                        'authToken' => $e->auth_token,
                    ]),
                    'payload' => 'hello !',
                ];

                $webPush->sendNotification(
                    $notification['subscription'],
                    $notification['payload'] // optional (defaults null)
                );
            }
        });

        $webPush->flush();
    }
}