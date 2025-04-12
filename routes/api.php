<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::prefix('products')->group(function(){ // Group routes under the 'products' prefix
    Route::get('/', [ProductController::class, 'index']); // Route for getting all products
    Route::post('/', [ProductController::class, 'store']); // Route for creating a new product
    Route::get('{id}', [ProductController::class, 'show']); // Route for getting a specific product by ID
    Route::put('{id}', [ProductController::class, 'update']); // Route for updating a product by ID
    Route::delete('{id}', [ProductController::class, 'destroy']); // Route for deleting a product by ID
});

Route::get('categories/{id}/products', [CategoryController::class, 'products']); // Route for getting products by category ID
