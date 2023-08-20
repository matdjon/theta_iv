<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/blogpost', [\App\Http\Controllers\BlogPostController::class, 'index']);

Route::controller(BlogPostController::class)->group(function () {
    Route::get('/blogpost', [BlogPostController::class, 'index'])->name('blogpost.index');
    Route::post('/blogpost', [BlogPostController::class, 'store'])->name('blogpost.store');
    Route::get('/blogpost/{blogPost}', [BlogPostController::class, 'show'])->name('blogpost.show');
    Route::get('/blogpost/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('blogpost.edit');
    Route::put('/blogpost/{blogPost}/edit', [BlogPostController::class, 'update'])->name('blogpost.update');
    Route::delete('/blogpost/{blogPost}', [BlogPostController::class, 'destroy'])->name('blogpost.destroy');
});