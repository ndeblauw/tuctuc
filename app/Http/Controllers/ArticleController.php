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

    public function create()
    {
        return view('site.articles.create');
    }

    public function store(Request $request)
    {
        Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => 1,
            ]);

        return redirect('/articles');
    }
}
