<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('author', 'keywords')->paginate(150);

        return view('site.articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        $article->load('author', 'keywords');

        /*
         * PROMPT - I have a Laravel application. The Article model has a belongsToMany relation with the Keyword model.
         * I want to find for a specific $article the related articles. I define related as "having at least one
         * keyword the same". Sort the list alphabetically, only give me the 10 first related articles.
         */
        $related_articles = Article::whereHas('keywords', function ($query) use ($article) {
            $query->whereIn('keywords.id', $article->keywords->pluck('id'));
        })
            ->where('id', '!=', $article->id) // Exclude the current article
            ->orderBy('title', 'asc') // Order alphabetically
            ->limit(10) // Get only 10 results
            ->get();

        return view('site.articles.show', compact('article', 'related_articles'));
    }

}
