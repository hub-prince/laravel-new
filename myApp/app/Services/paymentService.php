<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;

class paymentService
{
     public function __construct()
    {
        Log::info('PaymentService instance created');
    }

    public function process($amount)
    {
        return "Payment of {$amount} processed successfully";
    }
}
