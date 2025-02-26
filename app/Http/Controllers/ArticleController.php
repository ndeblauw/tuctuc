<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('site.articles.index', ['articles' => $articles]);
    }

    public function show(int $article)
    {
        $article = \App\Models\Article::where('id', $article)->first();

        return view('site.articles.show', ['article' => $article]);
    }
}
