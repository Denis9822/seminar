<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/{id}', ProductController::class.'@index')->name('product.index');
