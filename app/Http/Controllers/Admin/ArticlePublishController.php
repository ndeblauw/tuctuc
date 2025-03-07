<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlePublishController extends Controller
{
    public function publish(Article $article)
    {
        $article->update([
            'published_at' => now(),
        ]);

        session()->flash('success', 'Article published successfully.');

        return redirect()->back();
    }

    public function unpublish(Article $article)
    {
        $article->update([
            'published_at' => null,
        ]);

        session()->flash('success', 'Article unpublished successfully.');

        return redirect()->back();
    }


}
