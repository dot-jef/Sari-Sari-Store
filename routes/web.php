<?php

use App\Http\Controllers\StoreOwnerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [StoreOwnerController::class, 'goToDashboard']);
Route::redirect('/', '/dashboard');

Route::get('/products', [ProductController::class, 'index']);
