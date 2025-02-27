<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles/create', [\App\Http\Controllers\ArticleController::class, 'create']);
Route::post('/articles', [\App\Http\Controllers\ArticleController::class, 'store']);
Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/articles/{article}/edit', [\App\Http\Controllers\ArticleController::class, 'edit']);
Route::put('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'update']);

Route::get('/authors', [\App\Http\Controllers\AuthorController::class, 'index']);
Route::get('/authors/{id}', [\App\Http\Controllers\AuthorController::class, 'show']);


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
