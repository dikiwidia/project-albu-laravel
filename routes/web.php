<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('albu');
});

Route::get('/customer', [ProductController::class, 'customer']);
Route::get('/product', [ProductController::class, 'product']);
