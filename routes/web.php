<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth')->group(function () {
Route::get('/posts/trash', [PostController::class, 'trash'])->name('posts.trash');

Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');

Route::delete('/posts/{id}/forceDelete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('posts', PostController::class)
// ->middleware('authCheck');
;
});

Route::get('user-data',function()
    {
    return Auth::user()->name;
    }
);

