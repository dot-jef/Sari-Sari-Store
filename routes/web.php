<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreOwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [StoreOwnerController::class, 'goToDashboard'])->name('dashboard.index');
Route::redirect('/', '/dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/restock', [ProductController::class, 'restockForm'])->name('products.restock');
Route::post('/products/restock', [ProductController::class, 'restock'])->name('products.restock.store');
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.delete');
