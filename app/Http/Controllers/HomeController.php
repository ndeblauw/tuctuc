<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::take(4)->latest()->get();
        $authors = User::whereHas('articles')->orderBy('name')->get();

        return view('welcome', compact('articles', 'authors'));
    }
}
