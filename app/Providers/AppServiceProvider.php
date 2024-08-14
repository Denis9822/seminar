<?php

namespace App\Providers;

use App\Models\Order;
use App\Observers\PopularProductsObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Order::observe(PopularProductsObserver::class);
    }
}
