<?php

namespace App\Providers;

use App\Services\customService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(customService::class,function(){
            return new customService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         config(['custom.app_name' => 'Practice App']);
          View::composer('*', function ($view) {
        $view->with('appName', config('custom.app_name'));
    });
    }
}
