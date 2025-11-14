<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\BookController;


Route::middleware('api')->group(function () {
    Route::apiResource('categories', CategoryController::class)->names([
        'index' => 'api.categories.index',
        'show' => 'api.categories.show',
        'store' => 'api.categories.store',
        'update' => 'api.categories.update',
        'destroy' => 'api.categories.destroy',
    ]);
    Route::apiResource('books', BookController::class)->names([
        'index' => 'api.books.index',
        'show' => 'api.books.show',
        'store' => 'api.books.store',
        'update' => 'api.books.update',
        'destroy' => 'api.books.destroy',
    ]);

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
});
