<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreOwnerController extends Controller
{
    public function goToDashboard() {
        return view("dashboard");
    }

}

