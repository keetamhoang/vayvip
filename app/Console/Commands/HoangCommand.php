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

            dd(1);
        });
    }
}
