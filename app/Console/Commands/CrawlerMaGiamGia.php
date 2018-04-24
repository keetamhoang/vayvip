<?php

namespace App\Console\Commands;

use App\Models\Code;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Console\Command;

class CrawlerMaGiamGia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:magiamgia';

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

        $client = new Client();

        // tiki chanh tuoi
        $res = $client->request('GET', 'https://chanhtuoi.com/ma-giam-gia-tiki-khuyen-mai.html');

        $res->filter('.cs-row')->each(function ($node, $i) {
            try {
                $a = $node->filter('.cs-row-pri .ec-code')->text();

                $data['code'] = trim($a);
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'tiki')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.cs-col-exp-1 p')->eq(1)->text();
                        $percent = trim($percent);
                        $percent = preg_replace("/[\n\r]/", "", $percent);
                        $percent = str_replace('Khuyến mãi:', '', $percent);
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2: '.$ex->getMessage());
                    }
                    try {
                        $data['type_km'] = 'COUPON';
                    } catch (\Exception $ex) {
                        $this->line('ERROR3: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.cs-row-pri .cs-des')->text();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4: '.$ex->getMessage());
                    }

                    try {

                        if ($node->filter('.cs-col-exp-1')->count() > 0) {
                            $desc = $node->filter('.cs-col-exp-1')->html();
                            $data['desc'] = trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'tiki';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // lazada
        $res = $client->request('GET', 'https://magiamgia.com/ma-giam-gia-lazada/');

        $res->filter('.mgg-list-mgg-item')->each(function ($node, $i) {
            try {
                $a = $node->filter('.mgg-code-text')->text();
                $data['code'] = trim($a);
            } catch (\Exception $ex) {
                $this->line('ERROR1 lazada: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'lazada')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.mgg-discount-big-text')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2 lazada: '.$ex->getMessage());
                    }
                    try {
                        $typeKm = $node->filter('.mgg-discount-med-text')->text();
                        $data['type_km'] = trim($typeKm);
                    } catch (\Exception $ex) {
                        $this->line('ERROR3 lazada: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.mgg-list-mgg-title')->text();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4 lazada: '.$ex->getMessage());
                    }

                    try {
                        $hsd = $node->filter('.mgg-item-expires')->text();
                        $data['hsd'] = 'Hạn sử dụng: '.trim($hsd);
                    } catch (\Exception $ex) {
                        $this->line('ERROR5: '.$ex->getMessage());
                    }

                    try {

                        if ($node->filter('.mgg-item-cat')->count() > 0) {
                            $desc = $node->filter('.mgg-item-cat')->html();
                            $data['desc'] = trim($desc);
                        }

                        if ($node->filter('.mgg-item-note')->count() > 0) {
                            $desc = $node->filter('.mgg-item-note')->text();
                            $data['desc'] .='<br>';
                            $data['desc'] .= trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6 lazada: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'lazada';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // tiki
        $res = $client->request('GET', 'https://magiamgia.com/ma-giam-gia-tiki/');

        $res->filter('.mgg-list-mgg-item')->each(function ($node, $i) {
            try {
                $a = $node->filter('.mgg-code-text')->text();
                $data['code'] = trim($a);
            } catch (\Exception $ex) {
                $this->line('ERROR1 tiki: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'tiki')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.mgg-discount-big-text')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2 tiki: '.$ex->getMessage());
                    }
                    try {
                        $typeKm = $node->filter('.mgg-discount-med-text')->text();
                        $data['type_km'] = trim($typeKm);
                    } catch (\Exception $ex) {
                        $this->line('ERROR3 tiki: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.mgg-list-mgg-title')->text();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4 tiki: '.$ex->getMessage());
                    }

                    try {
                        $hsd = $node->filter('.mgg-item-expires')->text();
                        $data['hsd'] = 'Hạn sử dụng: '.trim($hsd);
                    } catch (\Exception $ex) {
                        $this->line('ERROR5 tiki: '.$ex->getMessage());
                    }

                    try {

                        if ($node->filter('.mgg-item-cat')->count() > 0) {
                            $desc = $node->filter('.mgg-item-cat')->html();
                            $data['desc'] = trim($desc);
                        }

                        if ($node->filter('.mgg-item-note')->count() > 0) {
                            $desc = $node->filter('.mgg-item-note')->text();
                            $data['desc'] .='<br>';
                            $data['desc'] .= trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6 tiki: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'tiki';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // adayroi
        $res = $client->request('GET', 'https://magiamgia.com/ma-giam-gia-adayroi/');

        $res->filter('.mgg-list-mgg-item')->each(function ($node, $i) {
            try {
                $a = $node->filter('.mgg-code-text')->text();
                $data['code'] = trim($a);
            } catch (\Exception $ex) {
                $this->line('ERROR1 adayroi: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'adayroi')->first();

                if (empty($checkCode)) {

                    try {
                        $percent = $node->filter('.mgg-discount-big-text')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2 adayroi: '.$ex->getMessage());
                    }
                    try {
                        $typeKm = $node->filter('.mgg-discount-med-text')->text();
                        $data['type_km'] = trim($typeKm);
                    } catch (\Exception $ex) {
                        $this->line('ERROR3 adayroi: '.$ex->getMessage());
                    }

                    try {
                        $title = $node->filter('.mgg-list-mgg-title')->text();
                        $data['title'] = trim($title);
                    } catch (\Exception $ex) {
                        $this->line('ERROR4 adayroi: '.$ex->getMessage());
                    }

                    try {
                        $hsd = $node->filter('.mgg-item-expires')->text();
                        $data['hsd'] = 'Hạn sử dụng: '.trim($hsd);
                    } catch (\Exception $ex) {
                        $this->line('ERROR5 adayroi: '.$ex->getMessage());
                    }

                    try {

                        if ($node->filter('.mgg-item-cat')->count() > 0) {
                            $desc = $node->filter('.mgg-item-cat')->html();
                            $data['desc'] = trim($desc);
                        }

                        if ($node->filter('.mgg-item-note')->count() > 0) {
                            $desc = $node->filter('.mgg-item-note')->text();
                            $data['desc'] .='<br>';
                            $data['desc'] .= trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6 adayroi: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'adayroi';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        $this->line('END: ' .Carbon::now());
    }
}
