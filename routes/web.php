<?php

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);
Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'index')->name('blogs.index');
});