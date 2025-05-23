<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

// Group product-related routes under 'products' prefix
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // List products
    Route::post('/', [ProductController::class, 'store']); // Create product
    Route::get('{id}', [ProductController::class, 'show']); // Show product or user products
    Route::put('{id}', [ProductController::class, 'update']); // Update product
    Route::delete('{id}', [ProductController::class, 'destroy']); // Delete product
});

// Get paginated products for a specific category
Route::get('categories/{id}/products', [CategoryController::class, 'products']);
// Get all categories
Route::get('categories', [CategoryController::class, 'index']);

// User authentication route for login
Route::post('/auth/login', [AuthController::class, 'login']);

// Get all products for a specific user
Route::get('user/{user_id}/products', [ProductController::class, 'userProducts']);

