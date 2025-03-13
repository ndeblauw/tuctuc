<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('articles', [\App\Http\Controllers\Api\ArticleController::class, 'index'])->name('api.articles.index');
Route::get('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'show'])->name('api.articles.show');

Route::get('authors', [\App\Http\Controllers\Api\AuthorController::class, 'index']);
