<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/blogs/{blog:slug}/comments', [CommentController::class, 'store']);
});


Route::middleware('guest')->group(function () {

    Route::get('/register', [AuthController::class, 'create']);
    Route::post('/register', [AuthController::class, 'store']);

    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'loginStore']);
});

Route::get('/marks', [AuthController::class, 'calCreate']);
Route::post('/marks', [AuthController::class, 'calculate']);


// Route::get('/categories', [CategoryController::class,'index']);
// Route::get('/categories/{category:slug}', [BlogController::class,'showCatBlogs']);
// Route::get('/categories/{category:slug}', [BlogController::class,'showCatBlogs']);

Route::get('/about', function () {
    return view('about');
});

// Route::get('/author/{author:username}', [BlogController::class,'showAuthorBlogs']);
