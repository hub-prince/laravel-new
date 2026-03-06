<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DiscountService;

class productController extends Controller
{
     public function price()
    {
        $price = 1000;
        $discountPercent = 10;

        $discountService = new DiscountService();

        $finalPrice = $discountService->discount($price, $discountPercent);

        return "Final Price: " . $finalPrice . "<br>discount is : ".$discountPercent."%";
    }
}
