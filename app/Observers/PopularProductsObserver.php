<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class PopularProductsObserver
{
    public function created()
    {
        Cache::forget('popular_products');
    }
}
