<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Services\ApplicationStatus\ApplicationStatusService;
use App\Services\ApplicationStatus\ApplicationStatusV1;

class ZipdjServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the singleton in the container
        $this->app->singleton(ApplicationStatusService::class, ApplicationStatusV1::class);
    }
}
