<?php

use App\Http\Controllers\StoreOwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreOwnerController::class, 'index']);
