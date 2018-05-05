<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\Coupon;
use App\Models\Discount;
use App\Models\Merchant;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Console\Command;

class GetKmMasOffer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'km:mas-offer';

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

        $store = 'lazada';

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://api.masoffer.com/promotions/".$store."?coupon=all");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        $outputs = $output['data']['promotions'];

        $merchant = Merchant::where('name', $store)->first();

        foreach ($outputs as $each) {
            try {
                $checkDiscount = Discount::where('root_id', $each['id'])->first();

                if (empty($checkDiscount)) {
                    $affLink = str_replace('{publisher_id}', 'hoangnangnam', $each['aff_url']);

                    $child = [
                        'aff_link' => $affLink,
                        'domain' => '',
                        'root_id' => $each['id'],
                        'image' => $each['thumbnail'],
                        'link' => $each['original_url'],
                        'merchant' => $store,
                        'merchant_id' => $merchant->id,
                    ];

                    if (!empty($each['expired_date'])) {
                        $child['end_time'] = date('Y-m-d', $each['expired_date']);
                    }

                    if (!empty($each['coupon_code'])) {
                        $child['is_coupon'] = 1;
                        $child['name'] = $each['title'] . '-' . $each['content'];
                        $child['content'] = $each['description'];
                    } else {
                        $child['is_coupon'] = 0;
                        $child['name'] = $each['title'];
                        $child['content'] = $each['description'] . '-' . $each['content'];
                    }

                    $child['slug'] = Unit::create_slug($child['name']);

                    $discount = Discount::create($child);

                    if (!empty($each['coupon_code'])) {
                        Coupon::create([
                            'discount_id' => $discount->id,
                            'coupon_code' => $each['coupon_code'],
                            'coupon_desc' => $each['description'],
                            'coupon_save' => 'KM'
                        ]);
                    }
                }
            } catch (\Exception $ex) {
                $this->line('lazada: '. $ex->getMessage().'|'.$ex->getLine());
            }
        }


        $store = 'tikivn';

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://api.masoffer.com/promotions/tiki?coupon=all");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        $outputs = $output['data']['promotions'];

        $merchant = Merchant::where('name', $store)->first();

        foreach ($outputs as $each) {
            try {
                $checkDiscount = Discount::where('root_id', $each['id'])->first();

                if (empty($checkDiscount)) {
                    $affLink = str_replace('{publisher_id}', 'hoangnangnam', $each['aff_url']);

                    $child = [
                        'aff_link' => $affLink,
                        'domain' => '',
                        'root_id' => $each['id'],
                        'image' => $each['thumbnail'],
                        'link' => $each['original_url'],
                        'merchant' => $store,
                        'merchant_id' => $merchant->id,
                    ];

                    if (!empty($each['expired_date'])) {
                        $child['end_time'] = date('Y-m-d', $each['expired_date']);
                    }

                    if (!empty($each['coupon_code'])) {
                        $child['is_coupon'] = 1;
                        $child['name'] = $each['title'] . '-' . $each['content'];
                        $child['content'] = $each['description'];
                    } else {
                        $child['is_coupon'] = 0;
                        $child['name'] = $each['title'];
                        $child['content'] = $each['description'] . '-' . $each['content'];
                    }

                    $child['slug'] = Unit::create_slug($child['name']);

                    $discount = Discount::create($child);

                    if (!empty($each['coupon_code'])) {
                        Coupon::create([
                            'discount_id' => $discount->id,
                            'coupon_code' => $each['coupon_code'],
                            'coupon_desc' => $each['description'],
                            'coupon_save' => 'KM'
                        ]);
                    }
                }
            } catch (\Exception $ex) {
                $this->line('tiki: '. $ex->getMessage().'|'.$ex->getLine());
            }
        }

        $store = 'adayroi';

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://api.masoffer.com/promotions/adayroi?coupon=all");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        $outputs = $output['data']['promotions'];

        $merchant = Merchant::where('name', $store)->first();

        foreach ($outputs as $each) {
            try {
                $checkDiscount = Discount::where('root_id', $each['id'])->first();

                if (empty($checkDiscount)) {
                    $affLink = str_replace('{publisher_id}', 'hoangnangnam', $each['aff_url']);

                    $child = [
                        'aff_link' => $affLink,
                        'domain' => '',
                        'root_id' => $each['id'],
                        'image' => $each['thumbnail'],
                        'link' => $each['original_url'],
                        'merchant' => $store,
                        'merchant_id' => $merchant->id,
                    ];

                    if (!empty($each['expired_date'])) {
                        $child['end_time'] = date('Y-m-d', $each['expired_date']);
                    }

                    if (!empty($each['coupon_code'])) {
                        $child['is_coupon'] = 1;
                        $child['name'] = $each['title'] . '-' . $each['content'];
                        $child['content'] = $each['description'];
                    } else {
                        $child['is_coupon'] = 0;
                        $child['name'] = $each['title'];
                        $child['content'] = $each['description'] . '-' . $each['content'];
                    }

                    $child['slug'] = Unit::create_slug($child['name']);

                    $discount = Discount::create($child);

                    if (!empty($each['coupon_code'])) {
                        Coupon::create([
                            'discount_id' => $discount->id,
                            'coupon_code' => $each['coupon_code'],
                            'coupon_desc' => $each['description'],
                            'coupon_save' => 'KM'
                        ]);
                    }
                }
            } catch (\Exception $ex) {
                $this->line('adayroi: '. $ex->getMessage().'|'.$ex->getLine());
            }
        }

        $store = 'yes24vn';

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://api.masoffer.com/promotions/yes24?coupon=all");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        $outputs = $output['data']['promotions'];

        $merchant = Merchant::where('name', $store)->first();

        foreach ($outputs as $each) {
            try {
                $checkDiscount = Discount::where('root_id', $each['id'])->first();

                if (empty($checkDiscount)) {
                    $affLink = str_replace('{publisher_id}', 'hoangnangnam', $each['aff_url']);

                    $child = [
                        'aff_link' => $affLink,
                        'domain' => '',
                        'root_id' => $each['id'],
                        'image' => $each['thumbnail'],
                        'link' => $each['original_url'],
                        'merchant' => $store,
                        'merchant_id' => $merchant->id,
                    ];

                    if (!empty($each['expired_date'])) {
                        $child['end_time'] = date('Y-m-d', $each['expired_date']);
                    }

                    if (!empty($each['coupon_code'])) {
                        $child['is_coupon'] = 1;
                        $child['name'] = $each['title'] . '-' . $each['content'];
                        $child['content'] = $each['description'];
                    } else {
                        $child['is_coupon'] = 0;
                        $child['name'] = $each['title'];
                        $child['content'] = $each['description'] . '-' . $each['content'];
                    }

                    $child['slug'] = Unit::create_slug($child['name']);

                    $discount = Discount::create($child);

                    if (!empty($each['coupon_code'])) {
                        Coupon::create([
                            'discount_id' => $discount->id,
                            'coupon_code' => $each['coupon_code'],
                            'coupon_desc' => $each['description'],
                            'coupon_save' => 'KM'
                        ]);
                    }
                }
            } catch (\Exception $ex) {
                $this->line('yes24: '. $ex->getMessage().'|'.$ex->getLine());
            }
        }

        $store = 'lottevn';

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://api.masoffer.com/promotions/lotte?coupon=all");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output, true);

        $outputs = $output['data']['promotions'];

        $merchant = Merchant::where('name', $store)->first();

        foreach ($outputs as $each) {
            try {
                $checkDiscount = Discount::where('root_id', $each['id'])->first();

                if (empty($checkDiscount)) {
                    $affLink = str_replace('{publisher_id}', 'hoangnangnam', $each['aff_url']);

                    $child = [
                        'aff_link' => $affLink,
                        'domain' => '',
                        'root_id' => $each['id'],
                        'image' => $each['thumbnail'],
                        'link' => $each['original_url'],
                        'merchant' => $store,
                        'merchant_id' => $merchant->id,
                    ];

                    if (!empty($each['expired_date'])) {
                        $child['end_time'] = date('Y-m-d', $each['expired_date']);
                    }

                    if (!empty($each['coupon_code'])) {
                        $child['is_coupon'] = 1;
                        $child['name'] = $each['title'] . '-' . $each['content'];
                        $child['content'] = $each['description'];
                    } else {
                        $child['is_coupon'] = 0;
                        $child['name'] = $each['title'];
                        $child['content'] = $each['description'] . '-' . $each['content'];
                    }

                    $child['slug'] = Unit::create_slug($child['name']);

                    $discount = Discount::create($child);

                    if (!empty($each['coupon_code'])) {
                        Coupon::create([
                            'discount_id' => $discount->id,
                            'coupon_code' => $each['coupon_code'],
                            'coupon_desc' => $each['description'],
                            'coupon_save' => 'KM'
                        ]);
                    }
                }
            } catch (\Exception $ex) {
                $this->line('lotte: '. $ex->getMessage().'|'.$ex->getLine());
            }
        }

        $this->line('END: ' . Carbon::now());
    }
}
