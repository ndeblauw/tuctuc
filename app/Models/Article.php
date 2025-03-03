<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $guarded = [];

    // Model relations --------
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }
}
