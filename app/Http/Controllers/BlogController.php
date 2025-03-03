<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return Inertia::render('Blogs/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function show(Blog $blog)
    {
        return Inertia::render('Blogs/Show', [
            'blog' => $blog,
        ]);
    }
}
