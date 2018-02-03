<?php

namespace App\Console\Commands;

use App\Components\Unit;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Sheets;
use Google;

class GetGGSheetResponse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:sheet-response';

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

        $sheet = '1zhySQPF7vohBbwnp9udkEStvjxsWCpPsrJIHlKnCdwM';

        Sheets::setService(Google::make('sheets'));

        Sheets::spreadsheet($sheet);

        $values = Sheets::sheet('taichinhsmart')->all();

        foreach ($values as $key => $value) {
            try {
                if ($key != 0) {
                    $value[1] = Unit::formatPhone($value[1]);

                    if ($value[1][0] != '0') {
                        $value[1] = '0' . $value[1];
                    }



                }
            } catch (\Exception $ex) {
                $this->line('ERROR '.$key.': ' . $ex->getMessage() . '|'.$ex->getLine());
            }
        }

        $this->line('END: ' . Carbon::now());
    }
}
