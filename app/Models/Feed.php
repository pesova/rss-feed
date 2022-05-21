<?php

namespace App\Models;

use App\Models\FeedItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'frequency',
        'preview_length',
    ];

    public function feedItems()
    {
        return $this->hasMany(FeedItem::class);
    }

    public function getFeedItems()
    {
        return $this->items()->orderBy('created_at', 'desc')->take(10)->get();
    }


}
