<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();

        return Inertia::render('Index', [
            'blogs' => $blogs,
        ]);
    }
}
