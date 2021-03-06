<?php

namespace App\Console;

use App\Console\Commands\Crawler;
use App\Console\Commands\CrawlerChanhTuoi;
use App\Console\Commands\CrawlerMaGiamGia;
use App\Console\Commands\DownloadImageLocal;
use App\Console\Commands\GetDataFromSheetGG;
use App\Console\Commands\GetDataShinhanBank;
use App\Console\Commands\GetGGSheetResponse;
use App\Console\Commands\GetKm;
use App\Console\Commands\GetKmMasOffer;
use App\Console\Commands\GetKmProduct;
use App\Console\Commands\HoangCommand;
use App\Console\Commands\LazadaEco;
use App\Console\Commands\SendNoti;
use App\Console\Commands\UpdateExpireKm;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        GetKm::class,
        UpdateExpireKm::class,
        GetDataFromSheetGG::class,
        GetGGSheetResponse::class,
        GetKmProduct::class,
        GetDataShinhanBank::class,
        Crawler::class,
        DownloadImageLocal::class,
        HoangCommand::class,
        CrawlerChanhTuoi::class,
        CrawlerMaGiamGia::class,
        GetKmMasOffer::class,
        LazadaEco::class,
        SendNoti::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('get:km-at')
            ->at('10:00')->withoutOverlapping()->appendOutputTo(storage_path('get_km_AT_cron.log'));
//            ->everyMinute()->withoutOverlapping()->appendOutputTo(storage_path('get_km_AT_cron.log'));

        $schedule->command('km:mas-offer')
            ->at('10:00')->withoutOverlapping()->appendOutputTo(storage_path('get_km_MASOFFER_cron.log'));

        $schedule->command('lazada:eco')
            ->at('10:00')->withoutOverlapping()->appendOutputTo(storage_path('get_km_MASOFFER_cron.log'));

        $schedule->command('get:km-product')
            ->at('10:00')->withoutOverlapping()->appendOutputTo(storage_path('get_km_product_AT_cron.log'));

        $schedule->command('download:image')
            ->hourly()->withoutOverlapping()->appendOutputTo(storage_path('download_image_cron.log'));

        $schedule->command('send:noti')
            ->cron('0 */4 * * *')->withoutOverlapping()->appendOutputTo(storage_path('send_noti_cron.log'));

        $schedule->command('update:expire-km')
            ->at('01:00')->withoutOverlapping()->appendOutputTo(storage_path('update_expire_km_cron.log'));

//        $schedule->command('get:data-gg-sheet')
//            ->everyTenMinutes()->withoutOverlapping()->appendOutputTo(storage_path('get_gg_sheets_cron.log'));
//
//        $schedule->command('data:shinhanbank')
//            ->everyTenMinutes()->withoutOverlapping()->appendOutputTo(storage_path('shinhanbank_cron.log'));

//        tam bo
//        $schedule->command('crawl:km')
//            ->hourly()->withoutOverlapping()->appendOutputTo(storage_path('crawl_km_cron.log'));

//        $schedule->command('crawl:chanhtuoi')
//            ->hourly()->withoutOverlapping()->appendOutputTo(storage_path('crawl_chanhtuoi_cron.log'));
//        ??

//        $schedule->command('crawl:magiamgia')
//            ->hourly()->withoutOverlapping()->appendOutputTo(storage_path('crawl_magiamgia_cron.log'));

//        $schedule->command('get:sheet-response')
//            ->everyTenMinutes()->withoutOverlapping()->appendOutputTo(storage_path('get_gg_sheets_response_cron.log'));
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
