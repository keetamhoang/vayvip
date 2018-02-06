<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\KmProduct;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetKmProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:km-product';

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
        curl_setopt($ch,CURLOPT_URL,"https://api.accesstrade.vn/v1/top_products");
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
                    $dataProduct = [
                        'aff_link' => $each['aff_link'],
                        'brand' => $each['brand'],
                        'category_id' => $each['category_id'],
                        'category_name' => $each['category_name'],
                        'desc' => $each['desc'],
                        'discount' => $each['discount'],
                        'image' => $each['image'],
                        'link' => $each['link'],
                        'name' => $each['name'],
                        'price' => $each['price'],
                        'product_category' => $each['product_category'],
                        'product_id' => $each['product_id'],
                        'slug' => Unit::create_slug($each['name']),
                        'root_id' => $each['product_category'] . '_' . $each['product_id']
                    ];

                    $checkProduct = KmProduct::where('root_id', $each['product_category'] . '_' . $each['product_id'])->first();

                    if (!empty($checkProduct)) {
                        $checkProduct->update($dataProduct);
                    } else {
                        $checkProduct = KmProduct::create($dataProduct);
                    }

                } catch (\Exception $ex) {
                    $this->line($ex->getMessage() . '|' . $ex->getLine());
                }
            }
        } else {
            $this->line($output['message']);
        }

        $this->line('END: ' . Carbon::now());
    }
}
