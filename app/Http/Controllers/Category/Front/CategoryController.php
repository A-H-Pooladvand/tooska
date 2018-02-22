<?php

namespace App\Http\Controllers\Category\Front;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($module, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->blogs()->paginate(10);
        return view('category.front.index', compact('posts'));
    }
}
