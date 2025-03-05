<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->nonQueued()
            ->width(400)
            ->height(300)
            ->sharpen(10);

        $this->addMediaConversion('poster')
            ->nonQueued()
            ->width(800)
            ->height(800)
            ->sharpen(10);

    }
}
