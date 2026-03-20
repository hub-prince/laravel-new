<?php

namespace App\Providers;

use App\Services\greetingService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use App\Services\paymentService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

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

        View::composer('*', function ($view) {
            $view->with('current_user',Auth::user());
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

         View::share('company_name', 'Intern Training App');
    }
}
