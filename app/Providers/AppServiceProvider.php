<?php

namespace App\Providers;

use App\Interfaces\FileSystemService;
use App\Services\FileService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FileSystemService::class, function ($app) {
            return new FileService($app->make(FileService::class));
        });
    }
}
