<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Task extends Model
{
    use HasApiTokens;
    use HasFactory;

    public const STATUS = [
        'opened' => 'відкрито',
        'closed' => 'закрыто',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
