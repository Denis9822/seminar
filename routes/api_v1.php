<?php

use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\TokenController;
use Illuminate\Support\Facades\Route;

Route::post('/token/create', TokenController::class.'@create')->name('token.create');

Route::apiResource('/tasks', TaskController::class)->middleware('auth:sanctum');
