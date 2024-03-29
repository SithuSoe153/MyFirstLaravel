<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    // API START

    function indexapi()
    {
        return [
            'blogs' => Blog::with('category', 'author')
                ->latest()
                ->filter(request(['search', 'author', 'category'])) //query, category, author
                ->paginate(3),
        ];
    }

    function showapi(Blog $blog)
    {

        return [
            'blog' => $blog
        ];
    }

    // API END



    function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::with('category', 'author')
                ->latest()
                ->filter(request(['search', 'author', 'category'])) //query, category, author
                // ->get(),
                ->paginate(3),
        ]);
    }



    function show(Blog $blog)
    {

        // $blog = Blog::where('slug', $blog)->first();

        return view('blogs.show', [
            'blog' => $blog
        ]);

        // return Blog::where('slug', $blog->slug)->first();

    }

    // public function showAuthorBlogs(User $author)
    // {
    //     return view('blogs.index', [
    //         'blogs' => $author->blogs->load('category', 'author')
    //     ]);
    // }


    // function showCatBlogs(Category $category)
    // {

    //     // dd($category->blogs);
    //     return view(
    //         'blogs.index',
    //         ['blogs' => $category->blogs]
    //     );
    // }

    // function showCatBlogs(Category $category)
    // {
    //     return view('blogs.index', [
    //         'blogs' => $category->posts->load('category', 'author'),
    //         'categories' => Category::all(),
    //     ]);
    // }
}
