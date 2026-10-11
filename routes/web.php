<?php

use App\Http\Controllers\StoreOwnerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [StoreOwnerController::class, 'goToDashboard'])->name('dashboard.page');
Route::redirect('/', '/dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.page');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
