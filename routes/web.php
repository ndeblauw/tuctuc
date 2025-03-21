<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


// Public area of website
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', \App\Http\Controllers\ArticleController::class)->only(['index', 'show']);
Route::resource('authors', \App\Http\Controllers\AuthorController::class)->only(['index', 'show']);

Route::post('comments', [\App\Http\Controllers\ArticleCommentController::class, 'store'])->name('comments.store');

Route::get('contact-me', [\App\Http\Controllers\ContactMeController::class, 'create'])->name('contact.create');
Route::post('contact-me', [\App\Http\Controllers\ContactMeController::class, 'store'])->name('contact.store');


// Logged in user area of website (= admin area for this app)
Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\DashboardController::class )->name('dashboard');
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::get('articles/{article}/publish', [\App\Http\Controllers\Admin\ArticlePublishController::class, 'publish'])->name('articles.publish');
    Route::get('articles/{article}/unpublish', [\App\Http\Controllers\Admin\ArticlePublishController::class, 'unpublish'])->name('articles.unpublish');

    Route::resource('keywords', \App\Http\Controllers\KeywordController::class)->except(['show'])->middleware([\App\Http\Middleware\IsAdmin::class]);
});









Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
