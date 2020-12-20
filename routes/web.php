<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::middleware('auth.basic')->group(function () {
    Route::get('/', Controllers\HomeController::class)->name('home.index');
});
