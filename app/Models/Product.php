<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function scopePopular(Builder $query): void
    {
        $query->withCount(['orders' => function (Builder $query) {
            $query->whereColumn('orders.created_at', '>', now()->subDays(30));
        }])->orderByDesc('orders_count');
    }
}
