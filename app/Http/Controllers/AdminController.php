<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::latest()->paginate(3)
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $cleanData = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'slug' => ['required', 'min:3', 'max:255', 'unique:blogs,slug'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
        $cleanData['user_id'] = auth()->id();
        Blog::create($cleanData);

        return redirect(route('admin.dashboard'));
    }


    public function update(Blog $blog)
    {
        $cleanData = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'slug' => ['required', 'min:3', 'max:255'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $blog->update($cleanData);

        return redirect(route('admin.dashboard'));
    }



    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::all(),
        ]);
    }
}
