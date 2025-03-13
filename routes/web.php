<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/catalogue', [MainController::class, 'catalogue'])->name('catalogue');
Route::get('/about-us', [MainController::class, 'aboutus'])->name('about-us');





