<?php
namespace App\Components;

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
}