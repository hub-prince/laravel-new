<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Models\Product;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('hello');
});

Route::get('/company',[homeController::class,'companyInfo']);

Route::get('/discount',[productController::class,'price'])->middleware('log');

Route::get('/payment',[PaymentController::class,'pay'])->middleware('log'); // GET route

Route::post('/post',function(){         // POST route
    return "created successfully";
});

Route::get('/post/{id}',function($id){      //parameters
    return "$id post created successfully";
});

Route::get('/form/{id?}',function($id = 3){    // optional params
    return "$id form created successfully";
});

Route::get('/dashboard', function () {       // named route
    return "Dashboard Page";
})->name('dashboard');

Route::redirect('/dashboard', '/form', 301);   // redirect

Route::middleware('role:admin')->prefix('admin')->group(function () {    // prefix route group

    Route::get('/dash', function () {
        return "Admin Dashboard";
    });

    Route::get('/users', function () {
        return "Admin Users";
    });

});

Route::middleware(['log'])->group(function () {   // middleware route group

    Route::get('/profile', function () {
        return "User Profile";
    });

    Route::get('/settings', function () {
        return "User Settings";
    });

});

Route::fallback(function(){
    return "page not found";
});

Route::get('/product/{product}', function (Product $product) {

    return $product;

});

Route::get('/dashboard-invoke', DashboardController::class);

Route::resource('posts',PostController::class);

Route::get('/posts/json', [PostController::class, 'jsonResponse']);
Route::get('/posts/download', [PostController::class, 'download']);
Route::get('/posts/macro', [PostController::class, 'macroExample']);