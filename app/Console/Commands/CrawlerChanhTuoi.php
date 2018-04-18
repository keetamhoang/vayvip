<?php

namespace App\Console\Commands;

use App\Models\Code;
use Goutte\Client;
use Illuminate\Console\Command;

class CrawlerChanhTuoi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:chanhtuoi';

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
        // lazada
        $client = new Client();

        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/lazada');

        $res->filter('.coupon-live')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'lazada')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.coupon_code_discount')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2: '.$ex->getMessage());
                    }
                    try {
                        $typeKm = $node->filter('.coupon_code_label')->text();
                        $data['type_km'] = trim($typeKm);
                    } catch (\Exception $ex) {
                        $this->line('ERROR3: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.coupon-link')->text();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4: '.$ex->getMessage());
                    }

                    try {
                        $hsd = $node->filter('.exp')->text();
                        $data['hsd'] = trim($hsd);
                    } catch (\Exception $ex) {
                        $this->line('ERROR5: '.$ex->getMessage());
                    }

                    try {

                        $desc = $node->filter('.coupon-des-full ul')->html();
                        $desc = trim($desc);
                        $desc = preg_replace("/[\n\r]/","",$desc);

                        if ($node->filter('.coupon-des-full li')->count() > 0) {
                            $last = $node->filter('.coupon-des-full li')->last();

                            if ($last->filter('.external')->count() > 0) {
                                $last = $last->html();
                                $last = preg_replace("/[\n\r]/","",$last);

                                $last = '<li>'.$last.'</li>';
                                $desc = str_replace($last, '', $desc);
                            }
                        }

                        $data['desc'] = '<ul>'.trim($desc).'</ul>';

                        $firstP = $node->filter('.coupon-des-full p')->first();
                        if ($firstP->filter('.less')->count() == 0) {
                            $data['desc'] = '<p>'.$firstP->text().'</p>'.$data['desc'];
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'lazada';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });
    }
}
