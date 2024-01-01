<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        return view('categories.index', [
            'categories' => 'Category:all()',
        ]);
    }

    function show(Category $category)
    {
        // dd($category->blogs);
        return view('categories.show', [
            'category' => 'Category:find()',
        ]);
    }

    // public function showCatBlogs(Category $category)
    // {
    //     return view('blogs.index', [
    //         'blogs' => $category->blogs,
    //         'category' => $category,
    //     ]);
    // }
}
