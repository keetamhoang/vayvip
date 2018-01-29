<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\Banner;
use App\Models\Coupon;
use App\Models\Discount;
use App\Models\KmCategory;
use App\Models\Merchant;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetKm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:km-at';

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

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"https://api.accesstrade.vn/v1/offers_informations?status=1");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Token 9aB2aZedjbQqh5xdVjiZwiT5ETpUiKvl',
        ));

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        if (empty($output['message'])) {
            foreach ($output['data'] as $each) {
                try {
                    $dataDiscount = [
                        'aff_link' => $each['aff_link'],
                        'content' => $each['content'],
                        'domain' => $each['domain'],
                        'image' => $each['image'],
                        'link' => $each['link'],
                        'name' => $each['name'],
                        'root_id' => $each['id'],
                        'merchant' => $each['merchant'],
                        'end_time' => Carbon::parse($each['end_time'])->toDateTimeString(),
                        'start_time' => Carbon::parse($each['start_time'])->toDateTimeString(),
                        'slug' => Unit::create_slug($each['name'])
                    ];

                    if (count($each['coupons']) > 0) {
                        $dataDiscount['is_coupon'] = 1;
                    }

                    $merchant = Merchant::where('name', $each['merchant'])->first();

                    if (empty($merchant)) {
                        $merchant = Merchant::create([
                            'name' => $each['merchant'],
                            'slug' => $each['merchant'],
                        ]);
                    }

                    $dataDiscount['merchant_id'] = $merchant->id;

                    $checkDiscount = Discount::where('root_id', $each['id'])->first();

                    if (!empty($checkDiscount)) {
                        $checkDiscount->update($dataDiscount);

                        Coupon::where('discount_id', $checkDiscount->id)->delete();
                        KmCategory::where('discount_id', $checkDiscount->id)->delete();
                        Banner::where('discount_id', $checkDiscount->id)->delete();
                    } else {
                        $checkDiscount = Discount::create($dataDiscount);
                    }

                    if (count($each['coupons']) > 0) {
                        foreach ($each['coupons'] as $keyCoupon => $eachCoupon) {
                            $each['coupons'][$keyCoupon]['discount_id'] = $checkDiscount->id;
                        }

                        DB::table('coupons')->insert($each['coupons']);
                    }

                    if (count($each['categories']) > 0) {
                        foreach ($each['categories'] as $keyCate => $eachCate) {
                            $each['categories'][$keyCate]['discount_id'] = $checkDiscount->id;
                        }

                        DB::table('km_categories')->insert($each['categories']);
                    }

                    if (count($each['banners']) > 0) {
                        foreach ($each['banners'] as $keyBanner => $eachBanner) {
                            $each['banners'][$keyBanner]['discount_id'] = $checkDiscount->id;
                        }

                        DB::table('banners')->insert($each['banners']);
                    }

                } catch (\Exception $ex) {
                    $this->line($ex->getMessage() . '|' . $ex->getLine());
                }
            }
        }

        $this->line('END: ' . Carbon::now());
    }
}
