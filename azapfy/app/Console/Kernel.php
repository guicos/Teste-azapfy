<?php

namespace App\Console;

use App\Adapters\AzapfyApiAdapter;
use App\Services\AzapfyApiService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $azapfyApiAdapter = new AzapfyApiAdapter();
            $azapfyService = new AzapfyApiService($azapfyApiAdapter);
            $azapfyService -> getNotas();
        })->cron('* * * * *');
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
