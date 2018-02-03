<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\ChatfuelCustomer;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Sheets;
use Google;

class GetDataFromSheetGG extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:data-gg-sheet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('BEGIN: ' . Carbon::now());

        $sheet = '1byMQtSXtlWbmzQaJ0exEDj5xsmdsfVX1u2y4OxWPxBE';

        Sheets::setService(Google::make('sheets'));

        Sheets::spreadsheet($sheet);

        $valuesCiti = Sheets::sheet('Citi')->all();

        foreach ($valuesCiti as $key => $value) {
            try {
                if ($key != 0) {
                    $value[4] = Unit::formatPhone($value[4]);
                    $value[6] = Unit::formatPhone($value[6]);

                    if ($value[4][0] != '0') {
                        $value[4] = '0' . $value[4];
                    }

                    $dataInsert = [
                        'name' => $value[0],
                        'address' => $value[1],
                        'birthday' => $value[3],
                        'phone' => $value[4],
                        'email' => $value[5],
                        'salary' => $value[6],
                        'note' => $value[7],
                        'quan' => $value[2],
                        'type' => ChatfuelCustomer::CITI,
                        'updated_at' => Carbon::now()
                    ];

                    $checkCiti = ChatfuelCustomer::where('phone', $value[4])->where('type', ChatfuelCustomer::CITI)->first();

                    if (!empty($checkCiti)) {
                        $checkCiti->update($dataInsert);
                    } else {
                        $checkVPBank = ChatfuelCustomer::where('phone', $value[4])->where(function ($query){
                            $query->where('type', ChatfuelCustomer::VPBANK)->orWhere('type', ChatfuelCustomer::SACOM);
                        })->where('is_from', 1)->first();

                        if (empty($checkVPBank)) {
                            ChatfuelCustomer::create($dataInsert);
                        }
                    }

                }
            } catch (\Exception $ex) {
                $this->line('ERROR CITI '.$key.': ' . $ex->getMessage() . '|'.$ex->getLine());
            }
        }

        $valuesVP = Sheets::sheet('VPBank')->all();

        foreach ($valuesVP as $key => $value) {
            try {
                if ($key != 0) {
                    $value[4] = Unit::formatPhone($value[4]);
                    $value[6] = Unit::formatPhone($value[6]);

                    if ($value[4][0] != '0') {
                        $value[4] = '0' . $value[4];
                    }

                    $dataInsert = [
                        'name' => $value[0],
                        'address' => $value[1],
                        'birthday' => $value[3],
                        'phone' => $value[4],
                        'email' => $value[5],
                        'salary' => $value[6],
                        'note' => $value[7],
                        'quan' => $value[2],
                        'type' => ChatfuelCustomer::VPBANK,
                        'updated_at' => Carbon::now()
                    ];

                    $checkVPBank = ChatfuelCustomer::where('phone', $value[4])->where('type', ChatfuelCustomer::VPBANK)->first();

                    if (!empty($checkVPBank)) {
                        $checkVPBank->update($dataInsert);
                    } else {
                        $checkVPBank = ChatfuelCustomer::where('phone', $value[4])->where(function ($query){
                            $query->where('type', ChatfuelCustomer::CITI)->orWhere('type', ChatfuelCustomer::SACOM);
                        })->where('is_from', 1)->first();

                        if (empty($checkVPBank)) {
                            ChatfuelCustomer::create($dataInsert);
                        }
                    }

                }
            } catch (\Exception $ex) {
                $this->line('ERROR VPBANK '.$key.': ' . $ex->getMessage() . '|'.$ex->getLine());
            }
        }


        $valuesSacom = Sheets::sheet('Sacombank')->all();

        foreach ($valuesSacom as $key => $value) {
            try {
                if ($key != 0) {
                    $value[4] = Unit::formatPhone($value[4]);
                    $value[6] = Unit::formatPhone($value[6]);

                    if ($value[4][0] != '0') {
                        $value[4] = '0' . $value[4];
                    }

                    $dataInsert = [
                        'name' => $value[0],
                        'address' => $value[1],
                        'birthday' => $value[3],
                        'phone' => $value[4],
                        'email' => $value[5],
                        'salary' => $value[6],
                        'note' => $value[7],
                        'quan' => $value[2],
                        'type' => ChatfuelCustomer::SACOM,
                        'updated_at' => Carbon::now()
                    ];

                    $checkSacom = ChatfuelCustomer::where('phone', $value[4])->where('type', ChatfuelCustomer::SACOM)->first();

                    if (!empty($checkSacom)) {
                        $checkSacom->update($dataInsert);
                    } else {
                        $checkSacom = ChatfuelCustomer::where('phone', $value[4])->where(function ($query){
                            $query->where('type', ChatfuelCustomer::CITI)->orWhere('type', ChatfuelCustomer::VPBANK);
                        })->where('is_from', 1)->first();

                        if (empty($checkSacom)) {
                            ChatfuelCustomer::create($dataInsert);
                        }
                    }

//                    DB::table('chatfuel_customers')->updateOrInsert([
//                        'phone' => $value[4],
//                        'type' => ChatfuelCustomer::VPBANK
//                    ], $dataInsert);
                }
            } catch (\Exception $ex) {
                $this->line('ERROR SACOM '.$key.': ' . $ex->getMessage() . '|'.$ex->getLine());
            }
        }

        $this->line('END: ' . Carbon::now());

    }
}
