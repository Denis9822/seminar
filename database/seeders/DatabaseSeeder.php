<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory()->has(Order::factory()->count(fake()->numberBetween(5, 10)))->count(15)->create();
    }
}
