<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Keyword;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $articles = Article::factory(10)->create();
        Comment::factory(25)->create();

        Keyword::factory(5)->create();

        foreach($articles as $article){
            $nr = random_int(1,3);
            $keywords = Keyword::inRandomOrder()->take($nr)->get();
            $article->keywords()->attach($keywords);
        }
    }
}
