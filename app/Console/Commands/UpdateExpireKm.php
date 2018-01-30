<?php

namespace App\Console\Commands;

use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateExpireKm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:expire-km';

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

        Discount::where('end_time', '<', Carbon::now()->toDateString() . ' 00:00:00')->chunk(100, function ($discounts) {
            foreach ($discounts as $discount) {
                if ($discount->status == 0) {
                    $discount->update([
                        'status' => 1
                    ]);
                }
            }
        });

        $this->line('END: ' . Carbon::now());
    }
}
