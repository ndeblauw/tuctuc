<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('keywords', 'author')->whereNotNull('published_at')->take(4)->latest('published_at')->get();
        $authors = User::withCount('articles')->whereHas('articles')->get();

        $authors = $authors->sortByDesc( fn($author) => $author->articles_count )->take(4);

        return view('welcome', compact('articles', 'authors'));
    }
}
