<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $category->load('blogs');
        return Inertia::render('Categories/Show', [
            'category' => $category,
        ]);
    }
}
