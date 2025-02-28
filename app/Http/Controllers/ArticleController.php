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

    public function show(Article $article)
    {

        return view('site.articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('site.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => 1,
            ]);

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('site.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.show', $article);
    }

    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }
}
