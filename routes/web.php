<?php

use App\Http\Controllers\FRONTEND\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home'])->name("Home");
