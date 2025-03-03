<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {

        return view('admin.articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
            'keywords' => ['required',  'array'],
        ]);

        $article = Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => auth()->user()->id,
            ]);

        $article->keywords()->sync($request->keywords);

        return redirect()->route('admin.articles.show',  $article);
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
            'keywords' => ['required',  'array'],
        ]);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);


        $article->keywords()->sync($request->keywords);

        return redirect()->route('admin.articles.show', $article);
    }

    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index');
    }
}
