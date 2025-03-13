<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::whereHas('articles')->with('articles')->orderBy('name')->get();

        return view('site.authors.index', compact('authors'));
    }

    public function show(int $author)
    {

        $author = \App\Models\User::where('id', $author)->first();

        return view('site.authors.show', compact('author'));
    }
}
