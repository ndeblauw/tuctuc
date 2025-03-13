<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('keywords', 'author')->whereNotNull('published_at')->take(4)->latest('published_at')->get();
        $authors = User::withCount('articles')->whereHas('articles')->get();

        $authors = $authors->sortByDesc( fn($author) => $author->articles_count )->take(4);

        $quote = cache()->remember(
            'quote_for_welcome_page',
            20,
            fn() => $this->getQuote()
        );

        return view('welcome', compact('articles', 'authors', 'quote'));
    }

    private function getQuote()
    {
        $url = 'https://api.api-ninjas.com/v1/quotes';

        try {
            sleep(6);
            $response = Http::withHeaders(['X-Api-Key' => env('APININJAKEY')])->get($url);
            $quote = json_decode($response->body())[0];
        } catch (\Exception) {
            return (object) ['quote' => 'No quote available', 'author' => 'nobody', 'category' => 'empty'];
        }

        return $quote;
    }
}
