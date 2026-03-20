<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
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

        return "Final Price: " . $finalPrice . "<br>discount is : " . $discountPercent . "%";
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
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

        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);

        // Save data (example)
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $filename
        ]);


        return redirect()->route('products.create')->with('success', 'Product created');
        // redicted and flash message
    }

    public function search(Request $request)
    {
        // Get query parameters
        $category = $request->query('category');
        $price = $request->query('price');

        // Example static data 
        $products = (array)Product::all();

        // Filter products
        $filtered = array_filter($products, function ($product) use ($category, $price) {
            return (!$category || $product['category'] == $category)
                && (!$price || $product['price'] <= $price);
        });

        // Return result
        return response()->json(array_values($filtered));
    }

    public function index(){

        //index product list

        $products = Product::all();
        $total = count($products);
        $title = 'Product Dashboard';
        return view('products.index',compact('products','total','title'));
    }

      public function indexjson(){
        $products = Product::all();
        return response()->json([
            'status'=>"success",
            'data'=>$products
        ]);
    }


public function generateLink()
{
    $url = URL::signedRoute('unsubscribe', ['user' => 1]);

      return view('link', ['url' => $url]);
}
}
