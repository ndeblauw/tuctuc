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

    // Business logic
    public function canEdit(): bool
    {
        if($this->author_id === auth()->id()) {
            return true;
        }

        if(auth()->user()->is_admin) {
            return true;
        }

        return false;
    }

    public function getContentText(): string
    {
        $content = $this->content;
        $content = str_replace('<p>', '<p class="mb-4 text-lg text-slate-800">', $content);
        $content = str_replace('<ul>', '<ul class="list-disc pl-4 text-lg text-slate-800 mb-4">', $content);

        return $content;
    }

    public function getSummaryText(): string
    {
        return str(strip_tags($this->content))->limit(250);
    }
}
