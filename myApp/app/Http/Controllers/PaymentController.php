<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\paymentService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(paymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function pay()
    {
        Cache::put('name', 'Rahul', 600);
        Log::info('User logged in');
        $users = DB::table('users')->get();
        $content = File::get(storage_path('logs/laravel.log'));
      

        return $this->paymentService->process(500);
    }
}
