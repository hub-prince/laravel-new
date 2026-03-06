<?php

namespace App\Services;

class DiscountService
{
    public function discount($price, $percent)
    {
        $discount = ($price * $percent) / 100;
        return $price - $discount;
    }
}