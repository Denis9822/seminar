<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function popular(): ResourceCollection
    {
        $products = Cache::remember('popular_products', 60 * 60, function () {
            return Product::query()->popular()->get();
        });

        return ProductResource::collection($products);
    }
}