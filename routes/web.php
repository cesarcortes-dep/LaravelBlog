<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControler;
use App\Http\Controllers\PostController;

Route::controller(PageControler::class)->group(function () {
    Route::get('/',  'home')->name('home');
    Route::get('post/{post:slug}', 'post')->name('post');
});


Route::redirect('dashboard', 'posts' )->name('dashboard');
Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except(['show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
