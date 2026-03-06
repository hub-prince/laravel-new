<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/company',[homeController::class,'companyInfo']);

Route::get('/discount',[productController::class,'price'])->middleware('log');