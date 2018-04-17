<?php

namespace App\Console\Commands;

use App\Models\Discount;
use App\Models\KmProduct;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DownloadImageLocal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:image';

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
        $this->line('BEGIN:' . Carbon::now());

        Discount::chunk(200, function ($discounts) {
            foreach ($discounts as $discount) {
                if (empty($discount->image_local)) {
                    try {
                        $file = $discount->image;

                        if (!str_contains($file, 'uptheme.ishopgo.com')) {
                            $files = file_get_contents($file);

                            $filename = basename($file);

                            $filename = 'ma-giam-gia-' . $discount->merchant . '-' . time() . uniqid() . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                            Storage::disk('public')->put($filename, $files, 'public');

                            $discount->update([
                                'image_local' => '/uploads/' . $filename
                            ]);
                        }
                    } catch (\Exception $ex) {
                        $this->line($ex->getMessage() . '|' . $ex->getLine());
                    }
                }
            }
        });

        $this->line('END CTKM:' . Carbon::now());

        KmProduct::chunk(200, function ($discounts) {
            foreach ($discounts as $discount) {
                if (empty($discount->image_local)) {
                    try {
                        $file = $discount->image;

                        if (!str_contains($file, 'uptheme.ishopgo.com')) {
                            $files = file_get_contents($file);

                            $filename = basename($file);

                            $filename = 'ma-giam-gia-san-pham-' . time() . uniqid() . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                            Storage::disk('public')->put($filename, $files, 'public');

                            $discount->update([
                                'image_local' => '/uploads/' . $filename
                            ]);
                        }
                    } catch (\Exception $ex) {
                        $this->line($ex->getMessage() . '|' . $ex->getLine());
                    }
                }
            }
        });

        $this->line('END SP KM:' . Carbon::now());
    }
}
