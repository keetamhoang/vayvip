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

        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/lazada');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
                            $data['desc'] = trim($desc);
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

        // tiki
        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/tiki');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'tiki')->first();

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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
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

        // shopee
        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/shopee');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'shopee')->first();

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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
                            $data['desc'] = trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'shopee';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // yes24
        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/yes24');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'yes24')->first();

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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
                            $data['desc'] = trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'yes24';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // adayroi
        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/adayroi');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'adayroi')->first();

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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
                            $data['desc'] = trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'adayroi';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // lotte
        $res = $client->request('GET', 'https://bloggiamgia.vn/ma-giam-gia/lotte');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $a = $node->filter('.coupon-detail a')->attr('onclick');
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'lotte')->first();

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
                        $title = $node->filter('.coupon-title')->text();
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

                        if ($node->filter('.coupon-des-full')->count() > 0) {
                            $desc = $node->filter('.coupon-des-full')->html();
                            $desc = trim($desc);
                            $desc = preg_replace("/[\n\r]/", "", $desc);

                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

                            $data['desc'] = trim($desc);
                        } elseif ($node->filter('.coupon-des-ellip')->count() > 0) {
                            $desc = $node->filter('.coupon-des-ellip')->html();
                            $data['desc'] = trim($desc);
                        }

                    } catch (\Exception $ex) {
                        $this->line('ERROR6: '.$ex->getMessage());
                    }

                    if (!empty($data)) {
                        $data['name'] = 'lotte';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

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
                        $percent = $node->filter('.cs-row-pri .cs-col-pri-1')->text();
                        $data['percent'] = trim($percent);
                    } catch (\Exception $ex) {
                        $this->line('ERROR2: '.$ex->getMessage());
                    }
                    try {
//                        $typeKm = $node->filter('.coupon_code_label')->text();
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

//                    try {
//                        $hsd = $node->filter('.cs-col-exp-1 p')->first()->html();
//                        $data['hsd'] = trim($hsd);
//                    } catch (\Exception $ex) {
//                        $this->line('ERROR5: '.$ex->getMessage());
//                    }

                    try {

                        if ($node->filter('.cs-col-exp-1')->count() > 0) {
                            $desc = $node->filter('.cs-col-exp-1')->html();
//                            $desc = trim($desc);
//                            $desc = preg_replace("/[\n\r]/", "", $desc);
//
//                            $desc = str_replace('<a class="more less" href="#" target="_blank" rel="nofollow">….Thu gọn</a>', '', $desc);

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
    }


}
