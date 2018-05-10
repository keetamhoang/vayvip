<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\Coupon;
use App\Models\Discount;
use App\Models\Merchant;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Sheets;
use Google;

class LazadaEco extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lazada:eco';

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

        $token = 'XXIojgGJSvKuZJFGKvUzW';

        $sheet = '10NXEkKdzN5epnMikZ5sddw0otM2QxNA8xZSw_jklUzI';

        Sheets::setService(Google::make('sheets'));

        Sheets::spreadsheet($sheet);

//        MYANMAR
        $valuesMY = Sheets::sheet('Lazada MY')->all();

        $merchantSlug = 'lazada-my';
        $local = 'my';
        $merchant = Merchant::where('name', $merchantSlug)->first();

        if (empty($merchant)) {
            $merchant = Merchant::create([
                'name' => $merchantSlug,
                'slug' => $merchantSlug,
            ]);
        }

        foreach ($valuesMY as $key => $each) {
            if ($key > 0) {
                try {
                    if (!empty($each[5])) {
                        $affLink = urlencode($each[5]);
                        $slug = Unit::create_slug($each[1]);

                        $dataDiscount = [
                            'aff_link' => 'http://go.ecotrackings.com/?token=' . $token . '&url=' . $affLink,
                            'content' => $each[4],
                            'domain' => '',
                            'image' => '',
                            'image_local' => '/assets/image/voucher-coupon-deal-offer-free-discount.png',
                            'link' => $each[5],
                            'name' => $each[1],
                            'root_id' => $merchantSlug . '-' . $slug,
                            'merchant' => $merchantSlug,
                            'end_time_text' => $each[3],
                            'slug' => $slug,
                            'merchant_id' => $merchant->id,
                            'local' => $local
                        ];

                        if (!empty($each[2])) {
                            $dataDiscount['is_coupon'] = 1;
                        }

                        $checkDiscount = Discount::where('root_id', $dataDiscount['root_id'])->first();

                        if (empty($checkDiscount)) {
                            $checkDiscount = Discount::create($dataDiscount);

                            if (!empty($each[2])) {
                                Coupon::create([
                                    'discount_id' => $checkDiscount->id,
                                    'coupon_code' => $each[2],
                                    'coupon_desc' => $each[1],
                                    'coupon_save' => 'SALE'
                                ]);
                            }
                        }
                    }
                } catch (\Exception $ex) {
                    $this->line('ERROR MY ' . $key . ': ' . $ex->getMessage() . '|' . $ex->getLine());
                }
            }
        }


//        PHILIPIN
        $valuesMY = Sheets::sheet('Lazada PH')->all();

        $merchantSlug = 'lazada-ph';
        $local = 'ph';
        $merchant = Merchant::where('name', $merchantSlug)->first();

        if (empty($merchant)) {
            $merchant = Merchant::create([
                'name' => $merchantSlug,
                'slug' => $merchantSlug,
            ]);
        }

        foreach ($valuesMY as $key => $each) {
            if ($key > 0) {
                try {
                    if (!empty($each[5])) {
                        $affLink = urlencode($each[5]);
                        $slug = Unit::create_slug($each[1]);

                        $dataDiscount = [
                            'aff_link' => 'http://go.ecotrackings.com/?token=' . $token . '&url=' . $affLink,
                            'content' => $each[4],
                            'domain' => '',
                            'image' => '',
                            'image_local' => '/assets/image/voucher-coupon-deal-offer-free-discount.png',
                            'link' => $each[5],
                            'name' => $each[1],
                            'root_id' => $merchantSlug . '-' . $slug,
                            'merchant' => $merchantSlug,
                            'end_time_text' => $each[3],
                            'slug' => $slug,
                            'merchant_id' => $merchant->id,
                            'local' => $local
                        ];

                        if (!empty($each[2])) {
                            $dataDiscount['is_coupon'] = 1;
                        }

                        $checkDiscount = Discount::where('root_id', $dataDiscount['root_id'])->first();

                        if (empty($checkDiscount)) {
                            $checkDiscount = Discount::create($dataDiscount);

                            if (!empty($each[2])) {
                                Coupon::create([
                                    'discount_id' => $checkDiscount->id,
                                    'coupon_code' => $each[2],
                                    'coupon_desc' => $each[1],
                                    'coupon_save' => 'SALE'
                                ]);
                            }
                        }
                    }
                } catch (\Exception $ex) {
                    $this->line('ERROR PH ' . $key . ': ' . $ex->getMessage() . '|' . $ex->getLine());
                }
            }
        }


//        INDONESIA
        $valuesMY = Sheets::sheet('Lazada ID')->all();

        $merchantSlug = 'lazada-id';
        $local = 'id';
        $merchant = Merchant::where('name', $merchantSlug)->first();

        if (empty($merchant)) {
            $merchant = Merchant::create([
                'name' => $merchantSlug,
                'slug' => $merchantSlug,
            ]);
        }

        foreach ($valuesMY as $key => $each) {
            if ($key > 0) {
                try {
                    if (!empty($each[5])) {
                        $affLink = urlencode($each[5]);
                        $slug = Unit::create_slug($each[1]);

                        $dataDiscount = [
                            'aff_link' => 'http://go.ecotrackings.com/?token=' . $token . '&url=' . $affLink,
                            'content' => $each[4],
                            'domain' => '',
                            'image' => '',
                            'image_local' => '/assets/image/voucher-coupon-deal-offer-free-discount.png',
                            'link' => $each[5],
                            'name' => $each[1],
                            'root_id' => $merchantSlug . '-' . $slug,
                            'merchant' => $merchantSlug,
                            'end_time_text' => $each[3],
                            'slug' => $slug,
                            'merchant_id' => $merchant->id,
                            'local' => $local
                        ];

                        if (!empty($each[2])) {
                            $dataDiscount['is_coupon'] = 1;
                        }

                        $checkDiscount = Discount::where('root_id', $dataDiscount['root_id'])->first();

                        if (empty($checkDiscount)) {
                            $checkDiscount = Discount::create($dataDiscount);

                            if (!empty($each[2])) {
                                Coupon::create([
                                    'discount_id' => $checkDiscount->id,
                                    'coupon_code' => $each[2],
                                    'coupon_desc' => $each[1],
                                    'coupon_save' => 'SALE'
                                ]);
                            }
                        }
                    }
                } catch (\Exception $ex) {
                    $this->line('ERROR ID ' . $key . ': ' . $ex->getMessage() . '|' . $ex->getLine());
                }
            }
        }

        $this->line('END: ' . Carbon::now());
    }
}
