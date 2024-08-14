<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products/popular', ProductController::class . '@popular')->name('products.popular');
