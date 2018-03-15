<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\ShinhanBank;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Sheets;
use Google;

class GetDataShinhanBank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:shinhanbank';

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

        $valuesShinhan = Sheets::sheet('Shinhan')->all();

        foreach ($valuesShinhan as $key => $value) {
            try {
                if ($key != 0) {
                    $value[3] = Unit::formatPhone($value[3]);

                    if ($value[3][0] != '0') {
                        $value[3] = '0' . $value[3];
                    }

                    $dataInsert = [
                        'name' => $value[0],
                        'region' => $value[1],
                        'birthday' => $value[2],
                        'phone' => $value[3],
                        'email' => $value[4],
                        'salary' => $value[5],
                        'note' => $value[6],
                        'type' => 'shinhanbank',
                        'updated_at' => Carbon::now(),
                    ];

                    $checkExist = ShinhanBank::where('phone', $value[3])->first();
                    if (empty($checkExist)) {
                        ShinhanBank::create($dataInsert);
                    }

                }
            } catch (\Exception $ex) {
                $this->line('ERROR SHINHANBANK '.$key.': ' . $ex->getMessage() . '|'.$ex->getLine());
            }
        }

        $this->line('END: ' . Carbon::now());
    }
}
