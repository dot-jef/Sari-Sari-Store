<?php

use App\Http\Controllers\StoreOwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [StoreOwnerController::class, 'goToDashboard'])->name('dashboard.page');
Route::redirect('/', '/dashboard');

Route::view('/products', 'products')->name('products.page');
