<?php

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', HomeController::class);
Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'index')->name('blogs.index');
    Route::get('/blogs/{blog}', 'show')->name('blogs.show');
});

// categories
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories/{category}', 'show')->name('categories.show');
});