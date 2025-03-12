<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home dengan gallery langsung di dalamnya
Route::get('/', [HomeController::class, 'home']);
