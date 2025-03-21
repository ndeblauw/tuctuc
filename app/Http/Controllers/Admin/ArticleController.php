<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        if(auth()->user()->is_admin) {
            $articles = Article::select(['id', 'title'])->paginate(10);
        } else {
            $articles = Article::select(['id', 'title'])->where('author_id', auth()->id())->paginate(10);
        }

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
            'photo' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $article = Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => auth()->user()->id,
            ]);

        if($request->has('photo')) {
            $article->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        $article->keywords()->sync($request->keywords);

        return redirect()->route('admin.articles.show',  $article);
    }

    public function edit(Article $article)
    {
        if(!$article->canEdit()) {
            abort(401);
        }

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        if(!$article->canEdit()) {
            abort(401);
        }

        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
            'keywords' => ['required',  'array'],
            'photo' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);


        $article->keywords()->sync($request->keywords);

        if($request->has('photo')) {
            $article->getMedia('photo')->each->delete();
            $article->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        return redirect()->route('admin.articles.show', $article);
    }

    public function destroy(Request $request, Article $article)
    {
        if(!$article->canEdit()) {
            abort(401);
        }

        $article->delete();

        return redirect()->route('admin.articles.index');
    }

}
