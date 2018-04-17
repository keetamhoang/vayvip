<?php

namespace App\Console\Commands;

use App\Models\Discount;
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
        SitemapIndex::create()
            ->add('http://taichinhsmart.vn/sitemap_trangchinh.xml')
            ->add('http://taichinhsmart.vn/sitemap_anh.xml')
            ->add('http://taichinhsmart.vn/sitemap_tintuctaichinh.xml')
            ->add('http://taichinhsmart.vn/sitemap_muasamhomnay.xml')
            ->writeToFile('public/sitemap.xml');

        // sitemap_trangchinh.xml
//        SitemapGenerator::create('http://taichinhsmart.vn')->writeToFile('public/sitemap_trangchinh.xml');

        // sitemap_anh.xml
        Discount::chunk(200, function ($discounts) {
            foreach ($discounts as $discount) {

            }
        });
    }
}
