<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;
use App\Facades\Greeting;

class paymentService
{
     public function __construct()
    {
        Log::info('PaymentService instance created');
    }

    public function process($amount)
    {
          echo Greeting::greet('Rahul')."<br>";
        return "Payment of {$amount} processed successfully";
    }
}
