<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/popular', ProductController::class.'@popular')->name('products.popular');
