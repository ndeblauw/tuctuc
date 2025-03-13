<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Notifications\NewAccountCreatedForYou;
use App\Notifications\NewCommentToYourArticle;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    public function store(Request $request)
    {
        if(auth()->user()) {
            $request->validate([
                'article_id' => ['required', 'exists:articles,id'],
                'comment' => ['required','min:10','max:1000'],
            ]);
        } else {
            $request->validate([
                'article_id' => ['required', 'exists:articles,id'],
                'email' => ['required','email'],
                'name' => ['required','min:3','max:100'],
                'comment' => ['required','min:10','max:1000'],
            ]);
        }

        if(auth()->user()===null) {
            // no logged in user, thus check if there is one with the given address
            $user = User::where('email', $request->email)->first();

            // no user with the give email address
            if($user === null) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => \Hash::make(random_bytes(8)),
                ]);

                $user->notify( new NewAccountCreatedForYou());
            }
        }

        $comment = Comment::create([
            'article_id' => $request->article_id,
            'author_id' => auth()->id() ?? $user->id,
            'comment' => $request->comment,
        ]);

        $comment->article->author->notify(new NewCommentToYourArticle($comment));

        return redirect()->route('articles.show', $request->article_id);
    }

}
