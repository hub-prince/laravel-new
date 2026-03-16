<?php

namespace App\Providers;

use App\Services\greetingService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use App\Services\paymentService;
use Illuminate\Support\Facades\Response;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(paymentService::class, function () {
            return new paymentService();
        });

        $this->app->bind('greeting', function () {
            return new greetingService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Log::info('2. AppServiceProvider boot executed');

        Response::macro('success', function ($data) {
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        });
    }
}
