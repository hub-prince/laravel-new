<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use App\Services\paymentService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(paymentService::class,function(){
            return new paymentService();
        });
    }   

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Log::info('2. AppServiceProvider boot executed');
    }
}
