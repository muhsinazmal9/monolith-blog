<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();
        $categories = Category::all();

        return Inertia::render('Index', [
            'blogs' => $blogs,
            'categories' => $categories,
        ]);
    }
}
