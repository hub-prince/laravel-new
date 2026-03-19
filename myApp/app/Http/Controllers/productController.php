<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DiscountService;
use Illuminate\Support\Facades\Log;

class productController extends Controller
{
     public function price()
    {
        Log::info('4. controller executed');
        $price = 1000;
        $discountPercent = 10;

        $discountService = new DiscountService();

        $finalPrice = $discountService->discount($price, $discountPercent);

        return "Final Price: " . $finalPrice . "<br>discount is : ".$discountPercent."%";
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        // 1. Using input()
        $name = $request->input('name');

        // 2. Using property access
        $price = $request->price;

        // 3. Using all()
        $allData = $request->all();

        // Testing has()
        if ($request->has('description')) {
            echo "Description field exists.<br>";
        }

        // Testing filled()
        if ($request->filled('category')) {
            echo "Category is filled.<br>";
        }

        // Display data
        echo "Name: " . $name . "<br>";
        echo "Price: " . $price . "<br>";

        echo "<pre>";
        print_r($allData);
        echo "</pre>";
    }

    public function search(Request $request)
{
    // Get query parameters
    $category = $request->query('category');
    $price = $request->query('price');

    // Example static data 
    $products = [
        ['name' => 'Laptop', 'category' => 'electronics', 'price' => 50000],
        ['name' => 'Phone', 'category' => 'electronics', 'price' => 15000],
        ['name' => 'Shirt', 'category' => 'fashion', 'price' => 1000],
        ['name' => 'Shoes', 'category' => 'fashion', 'price' => 2000],
    ];

    // Filter products
    $filtered = array_filter($products, function ($product) use ($category, $price) {
        return (!$category || $product['category'] == $category)
            && (!$price || $product['price'] <= $price);
    });

    // Return result
    return response()->json(array_values($filtered));
}
}
