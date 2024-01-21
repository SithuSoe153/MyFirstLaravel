<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubscribeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/blogs/create', [AdminController::class, 'create']);
    Route::get('/admin/blogs/{blog:slug}/edit', [AdminController::class, 'edit']);
    Route::patch('/admin/blogs/{blog:slug}/update', [AdminController::class, 'update']);
    Route::post('/admin/blogs/store', [AdminController::class, 'store']);
    Route::delete('/admin/blogs/{blog:slug}/destroy', [AdminController::class, 'destroy']);
});

Route::get('/', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/blogs/{blog:slug}/comments', [CommentController::class, 'store']);

    Route::post('/blogs/{blog:slug}/toggle-subscribe', [SubscribeController::class, 'toggle'])->name('blogs.toggle');
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
