<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductController extends Controller
{
    public function index(User $user): ResourceCollection
    {
        $products = $user->query()->first()
            ->through('orders')
            ->has('products')
            ->get()->reject(function ($product) {
                return $product->created_at <= now()->subMonth(1);
            });

        return ProductResource::collection($products);
    }
}
