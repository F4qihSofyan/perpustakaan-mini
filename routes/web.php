<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryWebController;
use App\Http\Controllers\BookWebController;

Route::get('/', function () {
    return view('welcome');
});

// === KATEGORI ===
Route::resource('categories', CategoryWebController::class);

// === BUKU ===
Route::resource('books', BookWebController::class);