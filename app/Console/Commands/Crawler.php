<?php

namespace App\Console\Commands;

use App\Models\Code;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Console\Command;

class Crawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:km';

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

        // lazada
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/lazada');

        $res->filter('.c-type-code')->each(function ($node, $i) {
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

        // tiki
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/tiki');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
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
                        $data['name'] = 'tiki';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // shopee
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/shopee');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
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
                        $data['name'] = 'shopee';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // grab
        $res = $client->request('GET', 'https://blogtietkiem.com/ma-khuyen-mai-grab-moi-nhat.html');

        $res->filter('.wpcd-coupon')->each(function ($node, $i) {

            try {
                $a = $node->filter('a')->attr('onclick');
                $a = trim($a);
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1 GRAB: '.$ex->getMessage().'|'.$i);
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

        // yes24
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/yes24');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
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
                        $data['name'] = 'yes24';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // adayroi
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/adayroi');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
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
                        $data['name'] = 'adayroi';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // lotte
        $res = $client->request('GET', 'https://magiamtot.com/ma-giam-gia/lotte');

        $res->filter('.c-type-code')->each(function ($node, $i) {
            try {
                $code = $node->filter('.code-text')->text();
                $data['code'] = trim($code);
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
                        $data['name'] = 'lotte';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        // du lich
        $res = $client->request('GET', 'https://blogtietkiem.com/ma-giam-gia-mytour-moi-nhat.html');

        $res->filter('.wpcd-coupon')->each(function ($node, $i) {

            try {
                $a = $node->filter('a')->attr('onclick');
                $a = trim($a);
                $a = explode("'", $a);

                $data['code'] = $a[3];
            } catch (\Exception $ex) {
                $this->line('ERROR1 MYTOUR: '.$ex->getMessage().'|'.$i);
            }

            if (!empty($data['code'])) {
                $checkCode = Code::where('code', $data['code'])->where('name', 'dulich')->first();

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
                        $data['name'] = 'dulich';
                        $data['type'] = 1; //coupon

                        Code::create($data);
                    }
                }
            }
        });

        $this->line('END: ' . Carbon::now());
    }
}
