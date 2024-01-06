<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);


// Route::get('/categories', [CategoryController::class,'index']);
// Route::get('/categories/{category:slug}', [BlogController::class,'showCatBlogs']);
// Route::get('/categories/{category:slug}', [BlogController::class,'showCatBlogs']);

Route::get('/about', function(){
    return view('about');
});

// Route::get('/author/{author:username}', [BlogController::class,'showAuthorBlogs']);
