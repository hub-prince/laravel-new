<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\paymentService;

class PaymentController extends Controller
{
     protected $paymentService;

    public function __construct(paymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function pay()
    {
        return $this->paymentService->process(500); 
    }
}
