<?php

namespace App\Console;

use App\Console\Commands\GetKm;
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
        UpdateExpireKm::class
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
            ->hourly()->withoutOverlapping()->appendOutputTo(storage_path('get_km_AT_cron.log'));
//            ->everyMinute()->withoutOverlapping()->appendOutputTo(storage_path('get_km_AT_cron.log'));

        $schedule->command('update:expire-km')
            ->at('01:00')->withoutOverlapping()->appendOutputTo(storage_path('update_expire_km_cron.log'));
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
