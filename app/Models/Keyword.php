<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    /** @use HasFactory<\Database\Factories\KeywordFactory> */
    use HasFactory;

    protected $guarded = [];

    // Model relations
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
