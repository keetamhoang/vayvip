<?php

namespace App\Console\Commands;

use App\Models\Code;
use App\Models\Discount;
use Goutte\Client;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;

class HoangCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hoang:command';

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
        $client = new Client();

        // grab
        $res = $client->request('GET', 'https://blogtietkiem.com/ma-khuyen-mai-grab-moi-nhat.html');

        $res->filter('.wpcd-coupon')->each(function ($node, $i) {

            try {
                $a = $node->filter('a')->attr('onclick');
                $a = trim($a);
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'grab')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.wpcd-coupon-discount-text')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2: '.$ex->getMessage());
                    }
                    try {
                        $typeKm = $node->filter('.coupon-type')->text();
                        $data['type_km'] = trim($typeKm);
                    } catch (\Exception $ex) {
                        $this->line('ERROR3: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.wpcd-coupon-title')->html();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4: '.$ex->getMessage());
                    }

                    try {
                        $hsd = $node->filter('.wpcd-coupon-expire')->text();
                        $data['hsd'] = trim($hsd);
                    } catch (\Exception $ex) {
                        $this->line('ERROR5: '.$ex->getMessage());
                    }

                    try {

                        $desc = $node->filter('.wpcd-full-description')->html();
                        $data['desc'] = trim($desc);
                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'grab';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });
    }
}
