<?php

use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString();
    return view("posts", ['title' => 'Blog Page', 'posts' => $posts]);
});
Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts()->latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString();

    return view("posts", [
        'title' => $posts->total() . ' Article By. ' . $user->name,
        'posts' => $posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts()->latest()->filter(request(['search', 'author']))->paginate(6)->withQueryString();

    return view("posts", [
        'title' => 'Category : ' . $category->name,
        'posts' => $posts
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view("post", ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/about', function () {
    return view("about", ['title' => 'About Page']);
});
Route::get('/contak', function () {
    return view("contak", ['title' => 'Contak Page']);
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PostDashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [PostDashboardController::class, 'store']);
    Route::get('/dashboard/create', [PostDashboardController::class, 'create']);
    Route::delete('/dashboard/{post:slug}', [PostDashboardController::class, 'destroy']);
    Route::get('/dashboard/{post:slug}/edit', [PostDashboardController::class, 'edit']);
    Route::patch('/dashboard/{post:slug}', [PostDashboardController::class, 'update']);
    Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload', [ProfileController::class, 'upload'])->name('profile.upload');
});

require __DIR__ . '/auth.php';
